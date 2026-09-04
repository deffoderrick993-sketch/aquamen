<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement de mot de passe obligatoire - AQUAMEN</title>
    <link rel="icon" href="{{asset('assets/img/aquamen.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #0b1a26 0%, #17334a 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Public Sans', sans-serif;
            padding: 20px;
        }
        .card-change-password {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            overflow: hidden;
            max-width: 480px;
            width: 100%;
        }
        .card-header-banner {
            background: #0b1a26;
            border-bottom: 4px solid #54b7e9;
            padding: 30px 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="card-change-password animate__animated animate__fadeIn">
        <div class="card-header-banner">
            <img src="{{asset('assets/img/aquamen.png')}}" alt="AQUAMEN Logo" style="max-height: 55px; filter: drop-shadow(0 0 10px rgba(84, 183, 233, 0.6));" class="mb-2">
            <h4 class="fw-bold text-white mb-0" style="letter-spacing: 1px;">SÉCURITÉ DU COMPTE</h4>
            <small style="color: #54b7e9;">Association AQUAMEN Cameroun</small>
        </div>

        <div class="p-4">
            <div class="alert alert-warning border-0 d-flex align-items-center mb-4" role="alert" style="background: rgba(255, 193, 7, 0.15); border-left: 4px solid #ffc107 !important; border-radius: 10px;">
                <i class="bi bi-shield-lock-fill text-warning fs-3 me-3"></i>
                <div style="font-size: 13px; color: #664d03;">
                    <strong>Première Connexion Détectée !</strong><br>
                    Pour sécuriser votre compte administrateur, veuillez définir votre mot de passe personnel définitif.
                </div>
            </div>

            @if(session('warning'))
                <div class="alert alert-info alert-dismissible fade show" role="alert" style="font-size: 13px;">
                    <i class="bi bi-info-circle-fill me-1"></i>{{ session('warning') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size: 13px;">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('update_forced_password') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="current_password" class="form-label fw-bold text-dark" style="font-size: 13px;">Mot de passe temporaire actuel *</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-key"></i></span>
                        <input type="password" name="current_password" id="current_password" class="form-control" required placeholder="Entrez le mot de passe temporaire">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold text-dark" style="font-size: 13px;">Nouveau mot de passe personnel *</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" name="password" id="password" class="form-control" required placeholder="Minimum 8 caractères">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label fw-bold text-dark" style="font-size: 13px;">Confirmer le nouveau mot de passe *</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light"><i class="bi bi-shield-check"></i></span>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required placeholder="Répétez le nouveau mot de passe">
                    </div>
                </div>

                <button type="submit" class="btn w-100 py-3 fw-bold shadow" style="background: #54b7e9; color: #0b1a26; border-radius: 12px; font-size: 15px;">
                    <i class="bi bi-check-circle-fill me-1"></i>Enregistrer mon Nouveau Mot de Passe
                </button>
            </form>

            <div class="text-center mt-3 pt-3 border-top">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link text-muted text-decoration-none btn-sm">
                        <i class="bi bi-box-arrow-right me-1"></i>Se déconnecter
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
