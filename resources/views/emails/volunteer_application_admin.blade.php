<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Candidature de Bénévolat</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f8fb; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333333;">

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; background-color: #f4f8fb; padding: 40px 10px;">
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.12);">
                    
                    <!-- Header Banner -->
                    <tr>
                        <td align="center" style="background-color: #0b1a26; padding: 35px 20px; border-bottom: 4px solid #54b7e9;">
                            <span style="background: #54b7e9; color: #0b1a26; font-size: 11px; font-weight: 800; text-uppercase; padding: 4px 12px; border-radius: 20px; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">NOTIFICATION ADMINISTRATEUR</span>
                            <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: 800;">🤝 NOUVELLE CANDIDATURE DE BÉNÉVOLAT</h1>
                            <p style="color: #54b7e9; margin: 5px 0 0 0; font-size: 13px;">Plateforme AQUAMEN Cameroun</p>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <h2 style="color: #0b1a26; margin-top: 0; font-size: 19px; font-weight: 700;">
                                Un nouveau citoyen souhaite s'engager bénévolement avec AQUAMEN :
                            </h2>

                            <!-- Volunteer Details Card -->
                            <div style="background-color: #f0f7fc; border: 1px solid #bce1f5; border-left: 4px solid #54b7e9; border-radius: 8px; padding: 20px; margin: 25px 0;">
                                <table border="0" cellpadding="6" cellspacing="0" width="100%" style="font-size: 14px;">
                                    <tr>
                                        <td width="140" style="color: #0b1a26; font-weight: 700;">Nom complet :</td>
                                        <td style="color: #0b1a26; font-weight: 800; font-size: 15px;">👤 {{ $volunteer->name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #0b1a26; font-weight: 700;">Adresse E-mail :</td>
                                        <td style="color: #54b7e9; font-weight: 700;">✉️ {{ $volunteer->email }}</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #0b1a26; font-weight: 700;">Téléphone :</td>
                                        <td style="color: #4a5568; font-weight: 600;">📞 {{ $volunteer->phone ?? 'Non renseigné' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="color: #0b1a26; font-weight: 700;">Date de demande :</td>
                                        <td style="color: #4a5568;">{{ $volunteer->created_at ? $volunteer->created_at->format('d/m/Y à H:i') : now()->format('d/m/Y à H:i') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <h4 style="color: #0b1a26; margin-bottom: 8px;">Motivation / Message du bénévole :</h4>
                            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 15px; font-size: 14px; line-height: 1.6; color: #2d3748;">
                                {!! nl2br(e($volunteer->message)) !!}
                            </div>

                            <!-- CTA Link -->
                            <div align="center" style="margin: 35px 0;">
                                <a href="{{ route('admin.volontaires') }}" target="_blank" style="background-color: #54b7e9; color: #0b1a26; font-weight: 800; text-decoration: none; padding: 14px 32px; border-radius: 30px; display: inline-block; font-size: 15px; box-shadow: 0 4px 15px rgba(84, 183, 233, 0.4);">
                                    Consulter la Candidature sur le Panel Admin &rarr;
                                </a>
                            </div>

                            <p style="font-size: 13px; color: #718096; line-height: 1.5; margin-bottom: 0; border-top: 1px solid #edf2f7; padding-top: 20px;">
                                Ce message est généré automatiquement lors de chaque demande de volontariat soumise sur le site AQUAMEN.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color: #f4f8fb; padding: 20px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #a0aec0;">
                            &copy; {{ date('Y') }} AQUAMEN Association - Gestion du Bénévolat.
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
