<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Membres;
use App\Models\Activite;
use App\Models\PDF;
use App\Models\Article;
use App\Models\gallery;
use App\Models\Visit;
use App\Models\Subscriber;
use App\Models\Signalement;
use App\Models\Testimonial;
use App\Models\Volunteer;
use App\Mail\WelcomeAdminMail;
use App\Mail\AlertBroadcastMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{
    public function index()
    {
        $admin = User::where('role', 'admin')->count();
        $activite = Activite::count();
        $membres = Membres::count();
        $reports = PDF::count();
        $articles = Article::count();
        $galleryCount = gallery::count();

        try {
            $totalVisits = Visit::count();
            $todayVisits = Visit::whereDate('created_at', today())->count();
        } catch (\Throwable $e) {
            $totalVisits = 0;
            $todayVisits = 0;
        }

        try {
            $subscribersCount = Subscriber::count();
        } catch (\Throwable $e) {
            $subscribersCount = 0;
        }

        try {
            $volunteersCount = Volunteer::count();
        } catch (\Throwable $e) {
            $volunteersCount = 0;
        }

        $recentActivites = Activite::latest()->take(5)->get();

        return view('admin', compact('admin', 'activite', 'membres', 'reports', 'articles', 'galleryCount', 'recentActivites', 'totalVisits', 'todayVisits', 'subscribersCount', 'volunteersCount'));
    }

    /**
     * Show form to add a new administrator and list current admins.
     */
    public function addAdminView()
    {
        $admins = User::where('role', 'admin')->latest()->get();
        return view('addadmin', compact('admins'));
    }

    /**
     * Store new administrator.
     */
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'name.required' => 'Le nom complet est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.unique' => 'Cet email est déjà utilisé par un autre compte.',
            'password.required' => 'Le mot de passe temporaire est obligatoire.',
            'password.min' => 'Le mot de passe temporaire doit contenir au moins 8 caractères.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
            'must_change_password' => true,
        ]);

        // Send Welcome Email
        try {
            Mail::to($user->email)->send(new WelcomeAdminMail($user->name, $user->email, $request->password));
        } catch (\Throwable $e) {
            // Silently log email error
        }

        return redirect()->back()->with('success', 'Nouvel administrateur créé avec succès ! Un e-mail de bienvenue lui a été envoyé avec ses identifiants temporaires.');
    }

    /**
     * Delete an administrator account.
     */
    public function deleteAdmin($id)
    {
        if (auth()->id() == $id) {
            return redirect()->back()->with('error', 'Vous ne pouvez pas supprimer votre propre compte administrateur.');
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Administrateur supprimé avec succès.');
    }

    /**
     * View for environmental signalements/alerts.
     */
    public function adminSignalementsView()
    {
        Signalement::where('is_read', false)->update(['is_read' => true]);
        $signalements = Signalement::latest()->get();
        return view('admin_signalements', compact('signalements'));
    }

    /**
     * Mark signalement as read/processed.
     */
    public function markSignalementAsRead($id)
    {
        $sig = Signalement::findOrFail($id);
        $sig->is_read = true;
        $sig->save();

        return redirect()->back()->with('success', 'Signalement marqué comme lu/traité.');
    }

    /**
     * Delete signalement.
     */
    public function deleteSignalement($id)
    {
        $sig = Signalement::findOrFail($id);
        $sig->delete();

        return redirect()->back()->with('success', 'Signalement supprimé avec succès.');
    }

    /**
     * View for volunteer applications.
     */
    public function adminVolontairesView()
    {
        Volunteer::where('is_read', false)->update(['is_read' => true]);
        $volunteers = Volunteer::latest()->get();
        return view('admin_volontaires', compact('volunteers'));
    }

    /**
     * Mark volunteer application as read.
     */
    public function markVolunteerAsRead($id)
    {
        $vol = Volunteer::findOrFail($id);
        $vol->is_read = true;
        $vol->save();

        return redirect()->back()->with('success', 'Candidature de bénévolat marquée comme lue.');
    }

    /**
     * Delete volunteer application.
     */
    public function deleteVolunteer($id)
    {
        $vol = Volunteer::findOrFail($id);
        $vol->delete();

        return redirect()->back()->with('success', 'Candidature de bénévolat supprimée.');
    }

    /**
     * View for testimonials.
     */
    public function testimonialsView()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin_testimonials', compact('testimonials'));
    }

    /**
     * Store new testimonial.
     */
    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role_title' => 'required|string|max:255',
            'quote' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            
            if (!file_exists(public_path('assets/img/testimonials'))) {
                mkdir(public_path('assets/img/testimonials'), 0755, true);
            }
            
            $file->move(public_path('assets/img/testimonials'), $fileName);
            $imagePath = 'assets/img/testimonials/' . $fileName;
        }

        $nameParts = explode(' ', trim($request->name));
        $initials = count($nameParts) >= 2 
            ? strtoupper(substr($nameParts[0], 0, 1) . substr($nameParts[count($nameParts) - 1], 0, 1))
            : strtoupper(substr($request->name, 0, 2));

        Testimonial::create([
            'name' => $request->name,
            'role_title' => $request->role_title,
            'image' => $imagePath,
            'quote' => $request->quote,
            'stars' => $request->stars,
            'initials' => $initials,
        ]);

        return redirect()->back()->with('success', 'Témoignage publié avec succès !');
    }

    /**
     * Delete testimonial.
     */
    public function deleteTestimonial($id)
    {
        $testi = Testimonial::findOrFail($id);
        $testi->delete();

        return redirect()->back()->with('success', 'Témoignage supprimé avec succès.');
    }

    /**
     * View for managing subscribers and sending broadcast alerts.
     */
    public function adminAlertsView()
    {
        Subscriber::where('is_read', false)->update(['is_read' => true]);
        $subscribers = Subscriber::latest()->get();
        return view('admin_alerts', compact('subscribers'));
    }

    /**
     * Send email alert broadcast to all subscribers.
     */
    public function sendAlertBroadcast(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'title.required' => 'Le titre de l\'alerte est obligatoire.',
            'message.required' => 'Le message / contenu de l\'alerte est obligatoire.',
        ]);

        $subscribers = Subscriber::where('is_active', true)->get();

        if ($subscribers->isEmpty()) {
            return redirect()->back()->with('error', 'Aucun abonné n\'est actuellement enregistré pour recevoir cette alerte.');
        }

        $sentCount = 0;
        foreach ($subscribers as $sub) {
            try {
                Mail::to($sub->email)->send(new AlertBroadcastMail($request->title, $request->message));
                $sentCount++;
            } catch (\Throwable $e) {
                // Continue sending to others even if one email fails
            }
        }

        return redirect()->back()->with('success', "L'alerte \"{$request->title}\" a été diffusée par e-mail avec succès à {$sentCount} abonné(s) !");
    }

    /**
     * Delete a subscriber.
     */
    public function deleteSubscriber($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        return redirect()->back()->with('success', 'Abonné supprimé avec succès.');
    }

    /**
     * View for forced password change on first login.
     */
    public function forceChangePasswordView()
    {
        return view('auth.force-change-password');
    }

    /**
     * Process forced password change.
     */
    public function updateForcedPassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'current_password.required' => 'Le mot de passe actuel (temporaire) est requis.',
            'password.required' => 'Le nouveau mot de passe est obligatoire.',
            'password.min' => 'Le nouveau mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du nouveau mot de passe ne correspond pas.',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Le mot de passe temporaire saisi est incorrect.']);
        }

        if (Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Votre nouveau mot de passe doit être différent de votre mot de passe temporaire.']);
        }

        $user->password = Hash::make($request->password);
        $user->must_change_password = false;
        $user->save();

        return redirect()->route('admin')->with('success', 'Votre mot de passe a été mis à jour avec succès ! Bienvenue sur le panneau d\'administration.');
    }
}
