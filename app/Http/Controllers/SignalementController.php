<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signalement;
use App\Models\User;
use App\Mail\IncidentReportAdminMail;
use Illuminate\Support\Facades\Mail;

class SignalementController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type_pollution' => 'required|string|max:255',
            'localisation' => 'required|string|max:255',
            'description' => 'required|string',
            'contact' => 'nullable|string|max:255'
        ]);

        $signalement = Signalement::create([
            'type_pollution' => $request->type_pollution,
            'localisation' => $request->localisation,
            'description' => $request->description,
            'contact' => $request->contact,
            'is_read' => false,
        ]);

        // Send email alert to all administrators
        try {
            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                if (!empty($admin->email)) {
                    Mail::to($admin->email)->send(new IncidentReportAdminMail($signalement));
                }
            }
        } catch (\Throwable $e) {
            // Silently log mail error
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Merci pour votre vigilance ! Votre signalement environnemental a bien été enregistré. L\'équipe d\'administration AQUAMEN a été notifiée par e-mail et traite l\'alerte en priorité.'
        ]);
    }
}
