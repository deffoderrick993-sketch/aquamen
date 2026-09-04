<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Candidature Bénévolat - AQUAMEN</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f8fb; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333333;">

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: #f4f8fb; padding: 40px 10px;">
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.12);">
                    
                    <!-- Header Banner -->
                    <tr>
                        <td align="center" style="background-color: #0b1a26; padding: 40px 20px; border-bottom: 4px solid #54b7e9;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 26px; font-weight: 800;">🌊 MERCI POUR VOTRE ENGAGEMENT !</h1>
                            <p style="color: #54b7e9; margin: 8px 0 0 0; font-size: 14px;">AQUAMEN - Conservation Marine & Gestion Écosystémique</p>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <p style="font-size: 16px; color: #0b1a26; margin-top: 0;">Bonjour <strong>{{ $name }}</strong>,</p>
                            
                            <p style="font-size: 15px; line-height: 1.7; color: #4a5568;">
                                Nous avons bien reçu votre candidature de bénévolat pour rejoindre l'association <strong>AQUAMEN</strong>. Nous vous remercions chaleureusement pour l'intérêt et la passion que vous portez à la préservation du littoral et de la biodiversité marine du Cameroun !
                            </p>

                            <div style="background-color: #f0f7fc; border-left: 4px solid #54b7e9; border-radius: 6px; padding: 20px; margin: 25px 0; font-size: 14px; color: #2d3748; line-height: 1.6;">
                                <strong>Prochaines étapes :</strong><br>
                                Notre équipe examine votre candidature et reprendra contact avec vous très prochainement par e-mail ou téléphone afin d'échanger sur nos prochaines actions de terrain (reboisement de mangroves, nettoyage de plages, sensibilisation citoyenne).
                            </div>

                            <div align="center" style="margin: 30px 0;">
                                <a href="https://aquamen.org" target="_blank" style="background-color: #0b1a26; color: #ffffff; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 30px; display: inline-block; font-size: 14px;">
                                    Découvrir nos Projets en Cours &rarr;
                                </a>
                            </div>

                            <p style="font-size: 14px; color: #718096; line-height: 1.6; margin-bottom: 0;">
                                Bien cordialement,<br>
                                <strong>L'Équipe AQUAMEN Cameroun</strong><br>
                                <span style="font-size: 12px; color: #a0aec0;">E-mail: contact@aquamen.org | Tél: +237 697 49 78 92</span>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: #f4f8fb; padding: 20px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #a0aec0;">
                            &copy; {{ date('Y') }} AQUAMEN Association. Tous droits réservés.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
