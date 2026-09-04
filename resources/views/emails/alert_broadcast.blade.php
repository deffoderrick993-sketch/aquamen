<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚨 ALERTE AQUAMEN</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f8fb; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333333;">

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: #f4f8fb; padding: 40px 10px;">
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.12);">
                    
                    <!-- Header Banner Alert -->
                    <tr>
                        <td align="center" style="background-color: #0b1a26; padding: 35px 20px; border-bottom: 4px solid #e71d36;">
                            <span style="background: #e71d36; color: #ffffff; font-size: 11px; font-weight: 800; text-uppercase; padding: 4px 12px; border-radius: 20px; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">COMMUNIQUÉ & ALERTE COMPORTEMENTALE</span>
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: 800;">AQUAMEN ALERTE</h1>
                            <p style="color: #54b7e9; margin: 5px 0 0 0; font-size: 13px;">Association pour la Gestion Environnementale Aquatique</p>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <h2 style="color: #e71d36; margin-top: 0; font-size: 20px; font-weight: 700; border-bottom: 2px solid #fee2e2; padding-bottom: 10px;">
                                🚨 {{ $title }}
                            </h2>

                            <div style="font-size: 15px; line-height: 1.7; color: #2d3748; margin: 20px 0;">
                                {!! nl2br(e($alertMessage)) !!}
                            </div>

                            <div style="background-color: #fff5f5; border-left: 4px solid #e71d36; padding: 15px; border-radius: 6px; margin: 25px 0;">
                                <p style="margin: 0; font-size: 13px; color: #991b1b; line-height: 1.5;">
                                    <strong>Vigilance & Urgence :</strong> Cette alerte vous est adressée en tant qu'abonné au réseau de prévention environnementale AQUAMEN.
                                </p>
                            </div>

                            <div align="center" style="margin: 30px 0;">
                                <a href="https://coastalvuln-gulfguinea.com/" target="_blank" style="background-color: #0b1a26; color: #ffffff; font-weight: 700; text-decoration: none; padding: 12px 28px; border-radius: 30px; display: inline-block; font-size: 14px;">
                                    En savoir plus sur le site officiel &rarr;
                                </a>
                            </div>

                            <p style="font-size: 13px; color: #718096; line-height: 1.5; margin-bottom: 0; border-top: 1px solid #edf2f7; padding-top: 20px;">
                                Association AQUAMEN - Kribi, Cameroun.<br>
                                En cas d'urgence sur le terrain : +237 697 49 78 92 | contact@aquamen.org
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: #f4f8fb; padding: 20px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #a0aec0;">
                            Vous recevez ce message car vous êtes inscrit à la liste d'alerte d'AQUAMEN. &copy; {{ date('Y') }} AQUAMEN Cameroun.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
