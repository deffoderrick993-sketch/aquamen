<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use App\Models\User;
use App\Mail\VolunteerApplicationAdminMail;
use App\Mail\VolunteerApplicationConfirmationMail;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    /**
     * Store a new volunteer application.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'message' => 'required|string',
        ], [
            'name.required' => 'Votre nom complet est obligatoire.',
            'email.required' => 'Votre adresse e-mail est obligatoire.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
            'message.required' => 'Veuillez rédiger un court message de motivation.',
        ]);

        $volunteer = Volunteer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'is_read' => false,
        ]);

        // Send email notification to all administrators
        try {
            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                if (!empty($admin->email)) {
                    Mail::to($admin->email)->send(new VolunteerApplicationAdminMail($volunteer));
                }
            }
        } catch (\Throwable $e) {
            // Silently handle email exception
        }

        // Send confirmation email to candidate
        try {
            Mail::to($volunteer->email)->send(new VolunteerApplicationConfirmationMail($volunteer->name));
        } catch (\Throwable $e) {
            // Silently handle email exception
        }

        if ($request->wantsJson()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Merci pour votre candidature de bénévolat ! Un e-mail de confirmation vous a été envoyé et l\'équipe d\'administration a été notifiée.'
            ]);
        }

        return redirect()->back()->with('success', 'Merci pour votre candidature de bénévolat ! Un e-mail de confirmation vous a été envoyé et l\'équipe d\'administration AQUAMEN a été notifiée.');
    }
}
