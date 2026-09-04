<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur AQUAMEN</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f8fb; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333333;">

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: #f4f8fb; padding: 40px 10px;">
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                    
                    <!-- Header Banner -->
                    <tr>
                        <td align="center" style="background-color: #0b1a26; padding: 35px 20px; border-bottom: 4px solid #54b7e9;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 26px; font-weight: 800; letter-spacing: 1.5px;">AQUAMEN</h1>
                            <p style="color: #54b7e9; margin: 5px 0 0 0; font-size: 13px; text-uppercase; font-weight: 600; letter-spacing: 1px;">Association pour la Gestion Environnementale Aquatique</p>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <h2 style="color: #0b1a26; margin-top: 0; font-size: 20px; font-weight: 700;">Bonjour {{ $name }},</h2>
                            
                            <p style="font-size: 15px; line-height: 1.6; color: #4a5568;">
                                Bienvenue dans l'équipe d'administration d'<strong>AQUAMEN</strong>. Un compte administrateur a été configuré pour vous afin de vous donner accès à la gestion du contenu et des activités de l'association.
                            </p>

                            <!-- Credentials Card -->
                            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; margin: 25px 0;">
                                <h3 style="color: #0b1a26; margin-top: 0; font-size: 15px; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #54b7e9; padding-bottom: 8px;">
                                    🔑 Vos Identifiants de Connexion :
                                </h3>
                                <table border="0" cellpadding="5" cellspacing="0" width="100%" style="font-size: 14px;">
                                    <tr>
                                        <td width="140" style="color: #718096; font-weight: 600;">Adresse Email :</td>
                                        <td style="color: #0b1a26; font-weight: 700;">{{ $email }}</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #718096; font-weight: 600;">Mot de Passe Temporaire :</td>
                                        <td style="color: #e71d36; font-weight: 700; font-family: monospace; font-size: 15px; background: #fff3f3; padding: 3px 8px; border-radius: 4px; display: inline-block;">{{ $temporaryPassword }}</td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Security Box -->
                            <div style="background-color: #fffbe6; border-left: 4px solid #ffc107; padding: 15px; border-radius: 6px; margin-bottom: 30px;">
                                <p style="margin: 0; font-size: 13px; color: #856404; line-height: 1.5;">
                                    <strong>🔒 Changement de mot de passe obligatoire :</strong><br>
                                    Pour garantir la sécurité du système, vous serez invité à remplacer ce mot de passe temporaire par votre propre mot de passe personnel dès votre première connexion.
                                </p>
                            </div>

                            <!-- CTA Button -->
                            <div align="center" style="margin: 35px 0;">
                                <a href="{{ route('login') }}" target="_blank" style="background-color: #54b7e9; color: #0b1a26; font-weight: 700; text-decoration: none; padding: 14px 32px; border-radius: 30px; display: inline-block; font-size: 15px; box-shadow: 0 4px 15px rgba(84, 183, 233, 0.4);">
                                    Se Connecter au Panneau d'Administration &rarr;
                                </a>
                            </div>

                            <p style="font-size: 14px; color: #718096; line-height: 1.5; margin-bottom: 0;">
                                En cas de question ou de problème de connexion, n'hésitez pas à contacter l'équipe technique AQUAMEN à <a href="mailto:contact@aquamen.org" style="color: #54b7e9; text-decoration: none;">contact@aquamen.org</a>.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: #f4f8fb; padding: 20px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #a0aec0;">
                            &copy; {{ date('Y') }} Association AQUAMEN - Kribi, Cameroun. Tous droits réservés.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
