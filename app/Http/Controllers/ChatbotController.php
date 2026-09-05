<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function handleMessage(Request $request)
    {
        $userMessage = trim(mb_strtolower($request->input('message', '')));

        if (empty($userMessage)) {
            return response()->json([
                'reply' => "Bonjour ! Je suis AQUA-Bot 🌊, l'assistant d'AQUAMEN. Posez-moi une question !",
                'suggestions' => [
                    'Qui sommes-nous ?',
                    'Nos projets & recherches',
                    'Comment faire un don ?',
                    'Devenir bénévole',
                    'Contact & Localisation'
                ]
            ]);
        }

        $reply = "";
        $suggestions = [];

        // Matching logic based on intent
        if ($this->containsAny($userMessage, ['bonjour', 'salut', 'hello', 'coucou', 'bonsoir', 'hey'])) {
            $reply = "Bonjour ! 👋 Je suis **AQUA-Bot**, l'assistant virtuel d'**AQUAMEN** (Association pour la Gestion Environnementale Aquatique). Comment puis-je vous aider aujourd'hui ?";
            $suggestions = [
                'Nos projets & recherches',
                'Comment faire un don ?',
                'Devenir bénévole',
                'Consulter les rapports'
            ];
        } elseif ($this->containsAny($userMessage, ['qui', 'présentation', 'association', 'mission', 'histoire', 'c\'est quoi', 'aquamen'])) {
            $reply = "🌊 **AQUAMEN** (Association pour la Gestion Environnementale Aquatique) a été créée en 2016 par 4 étudiants ingénieurs en halieutique.<br><br>Notre mission principale est la **conservation et la gestion durable des écosystèmes marins et côtiers au Cameroun** à travers la recherche en océanographie, la protection des mangroves et l'implication des communautés locales.<br><br><a href='" . route('aboutus') . "' class='btn btn-sm text-dark mt-1' style='background: #54b7e9; font-weight: 600;'>Lire toute notre histoire <i class='bi bi-arrow-right me-1'></i></a>";
            $suggestions = [
                'Nos axes de recherche',
                'Découvrir l\'équipe',
                'Comment faire un don ?'
            ];
        } elseif ($this->containsAny($userMessage, ['projet', 'recherche', 'activit', 'action', 'programme', 'aqua-research', 'aqua-com'])) {
            $reply = "🎯 **Nos Axes Stratégiques & Projets :**<br><br>1️⃣ **AQUA-RESEARCH** : Cartographie des habitats marins essentiels et recherches en océanographie/limnologie.<br>2️⃣ **AQUA-COM** : Sensibilisation environnementale des populations côtières du Golfe de Guinée.<br>3️⃣ **Gestion Durable** des ressources et soutien aux moyens de subsistance locaux.<br><br><a href='" . route('activite') . "' class='btn btn-sm text-dark me-2 mt-2' style='background: #54b7e9; font-weight: 600;'><i class='bi bi-folder-fill me-1'></i>Voir nos projets</a>";
            $suggestions = [
                'Consulter les rapports',
                'Devenir bénévole',
                'Comment faire un don ?'
            ];
        } elseif ($this->containsAny($userMessage, ['don', 'paypal', 'financ', 'soutenir', 'aide', 'argent', 'mobile money', 'orange', 'mtn'])) {
            $reply = "💚 **Soutenir nos actions**<br><br>Vos contributions permettent de financer nos recherches scientifiques et la préservation de la biodiversité marine sur la côte camerounaise.<br><br>• **PayPal & Carte Bancaire** : Don sécurisé en ligne.<br>• **Mobile Money (Orange / MTN)** : +237 697 49 78 92<br><br><button class='btn btn-sm text-white mt-2' data-bs-toggle='modal' data-bs-target='#donationModal' style='background: #e71d36; border-radius: 20px; font-weight: 700;'><i class='bi bi-heart-fill me-1'></i>Ouvrir le formulaire de Don</button>";
            $suggestions = [
                'Nos projets & recherches',
                'Devenir bénévole',
                'Contact'
            ];
        } elseif ($this->containsAny($userMessage, ['bénévole', 'benevole', 'volontaire', 'rejoindre', 'membre', 'participer', 'stage', 'recrutement'])) {
            $reply = "🤝 **Devenir Bénévole chez AQUAMEN**<br><br>Vous souhaitez vous engager pour la préservation marine ? Les candidatures se font **exclusivement par appel téléphonique** pour échanger de vive voix sur vos motivations.<br><br><a href='tel:+237697497892' class='btn btn-sm text-dark mt-2 me-2' style='background: #54b7e9; font-weight: 600;'><i class='bi bi-telephone-fill me-1'></i>Appeler le +237 697 49 78 92</a><a href='" . route('volontariat') . "' class='btn btn-sm btn-outline-info mt-2'>En savoir plus</a>";
            $suggestions = [
                'Qui sommes-nous ?',
                'Nos projets & recherches',
                'Contact'
            ];
        } elseif ($this->containsAny($userMessage, ['rapport', 'document', 'article', 'publication', 'pdf', 'etude', 'étude', 'recherche'])) {
            $reply = "📄 **Publications & Rapports Scientifiques**<br><br>Accédez en libre accès à l'ensemble de nos rapports d'études et articles scientifiques :<br><br><a href='" . route('rapport') . "' class='btn btn-sm btn-outline-info me-2 mt-2'><i class='bi bi-file-earmark-pdf me-1'></i>Voir les Rapports</a> <a href='" . route('Aquarticle') . "' class='btn btn-sm btn-outline-info mt-2'><i class='bi bi-journal-text me-1'></i>Lire nos Articles</a>";
            $suggestions = [
                'Nos projets & recherches',
                'Comment faire un don ?'
            ];
        } elseif ($this->containsAny($userMessage, ['contact', 'adresse', 'téléphone', 'telephone', 'mail', 'email', 'kribi', 'localisation', 'où'])) {
            $reply = "📍 **Contactez l'équipe AQUAMEN :**<br><br>🏢 **Adresse :** BOCOM, Entrée Elécam, Kribi - Cameroun<br>📞 **Téléphone :** +237 697 49 78 92<br>✉️ **Email :** <a href='mailto:contact@aquamen.org'>contact@aquamen.org</a><br>🌐 **Carte de travail :** <a href='https://coastalvuln-gulfguinea.com/' target='_blank'>Voir sur la carte</a>";
            $suggestions = [
                'Comment faire un don ?',
                'Devenir bénévole',
                'Consulter les rapports'
            ];
        } elseif ($this->containsAny($userMessage, ['equipe', 'équipe', 'bureau', 'membre', 'fondateur', 'dirigeant'])) {
            $reply = "👥 **Bureau Exécutif & Équipe AQUAMEN**<br><br>Notre équipe est composée d'experts en océanographie, limnologie et conservation côtière engagés pour le Golfe de Guinée.<br><br><a href='" . route('aboutus') . "#chefs' class='btn btn-sm text-dark mt-2' style='background: #54b7e9; font-weight: 600;'><i class='bi bi-people-fill me-1'></i>Découvrir les membres</a>";
            $suggestions = [
                'Qui sommes-nous ?',
                'Nos projets & recherches',
                'Devenir bénévole'
            ];
        } else {
            $reply = "Merci pour votre message ! 😊 Pour une réponse personnalisée concernant *" . htmlspecialchars($request->input('message')) . "*, n'hésitez pas à nous contacter directement :<br><br>📞 **Tel / WhatsApp :** +237 697 49 78 92<br>✉️ **Email :** <a href='mailto:contact@aquamen.org'>contact@aquamen.org</a>";
            $suggestions = [
                'Qui sommes-nous ?',
                'Nos projets & recherches',
                'Comment faire un don ?',
                'Devenir bénévole',
                'Contact & Localisation'
            ];
        }

        return response()->json([
            'reply' => $reply,
            'suggestions' => $suggestions
        ]);
    }

    private function containsAny(string $haystack, array $needles): bool
    {
        foreach ($needles as $needle) {
            if (mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }
        return false;
    }
}
