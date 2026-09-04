<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\User;
use App\Mail\SubscriberWelcomeMail;
use App\Mail\NewSubscriberAdminMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SubscriberController extends Controller
{
    /**
     * Store new subscriber.
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ], [
            'email.required' => 'Veuillez saisir votre adresse e-mail.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
        ]);

        $subscriber = Subscriber::where('email', $request->email)->first();

        if ($subscriber) {
            if (!$subscriber->is_active) {
                $subscriber->is_active = true;
                $subscriber->is_read = false;
                $subscriber->save();
            }
            return response()->json([
                'status' => 'info',
                'message' => 'Cette adresse e-mail est déjà inscrite à la communauté AQUAMEN.'
            ]);
        }

        $subscriber = Subscriber::create([
            'email' => $request->email,
            'is_active' => true,
            'is_read' => false,
        ]);

        // Send confirmation email to subscriber
        try {
            Mail::to($subscriber->email)->send(new SubscriberWelcomeMail($subscriber->email));
        } catch (\Throwable $e) {
            Log::error("Échec d'envoi du mail de bienvenue à l'abonné ({$subscriber->email}): " . $e->getMessage());
        }

        // Send email notification to all administrators
        try {
            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                if (!empty($admin->email)) {
                    Mail::to($admin->email)->send(new NewSubscriberAdminMail($subscriber));
                }
            }
        } catch (\Throwable $e) {
            Log::error("Échec d'envoi du mail de notification abonné aux administrateurs: " . $e->getMessage());
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Abonnement réussi ! Merci de rejoindre la communauté AQUAMEN. Un e-mail de confirmation vous a été envoyé.'
        ]);
    }
}
