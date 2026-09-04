<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUAMEN Admin Login - Dashboard Access</title>
    <link rel="icon" href="{{asset('assets/img/aquamen.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --brand-cyan: #54b7e9;
            --brand-dark-bg: #080e14;
            --brand-card-bg: rgba(15, 28, 36, 0.85);
            --brand-border: rgba(84, 183, 233, 0.3);
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, rgba(8,14,20,0.92) 0%, rgba(15,28,36,0.95) 100%), url("{{asset('img/kribi.jpg')}}") center/cover no-repeat fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            margin: 0;
            padding: 20px;
        }
        .login-card {
            background: var(--brand-card-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--brand-border);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6), 0 0 25px rgba(84, 183, 233, 0.15);
            width: 100%;
            max-width: 440px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .login-header {
            text-align: center;
            padding: 40px 30px 20px;
            border-bottom: 1px solid rgba(84, 183, 233, 0.15);
        }
        .logo-img {
            max-height: 70px;
            filter: drop-shadow(0 0 10px rgba(84, 183, 233, 0.4));
            transition: transform 0.3s ease;
        }
        .logo-img:hover {
            transform: scale(1.05);
        }
        .login-title {
            font-family: 'Playfair Display', serif;
            color: #ffffff;
            font-weight: 700;
            margin-top: 15px;
            font-size: 24px;
            letter-spacing: 0.5px;
        }
        .login-subtitle {
            color: var(--brand-cyan);
            font-size: 13px;
            font-weight: 500;
            text-uppercase: uppercase;
            letter-spacing: 1.5px;
        }
        .login-body {
            padding: 30px;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(84, 183, 233, 0.25);
            color: #ffffff;
            border-radius: 10px;
            padding: 12px 15px 12px 42px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--brand-cyan);
            color: #ffffff;
            box-shadow: 0 0 12px rgba(84, 183, 233, 0.3);
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--brand-cyan);
            font-size: 16px;
        }
        .btn-submit {
            background: linear-gradient(135deg, #54b7e9 0%, #0077b6 100%);
            color: #080e14;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            padding: 14px;
            width: 100%;
            font-size: 15px;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(84, 183, 233, 0.3);
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(84, 183, 233, 0.5);
            color: #ffffff;
        }
        .form-check-input:checked {
            background-color: var(--brand-cyan);
            border-color: var(--brand-cyan);
        }
        .back-home {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            font-size: 13px;
            transition: color 0.3s ease;
        }
        .back-home:hover {
            color: var(--brand-cyan);
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <a href="{{route('welcome')}}">
                <img src="{{asset('assets/img/aquamen.png')}}" alt="AQUAMEN Logo" class="logo-img">
            </a>
            <h2 class="login-title">AQUAMEN</h2>
            <div class="login-subtitle">Dashboard Portal Access</div>
        </div>

        <div class="login-body">
            @if (session('status'))
                <div class="alert alert-success border-0 text-center py-2 mb-4" style="background: rgba(40, 167, 69, 0.2); color: #28a745; font-size: 13px;">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger border-0 py-2 mb-4" style="background: rgba(220, 53, 69, 0.2); color: #ff6b6b; font-size: 13px;">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Input -->
                <div class="form-group">
                    <i class="bi bi-envelope-fill input-icon"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" required autofocus autocomplete="username">
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <i class="bi bi-lock-fill input-icon"></i>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="d-flex justify-content-between align-items-center mb-4 fs-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                        <label class="form-check-label text-white-50" for="remember_me" style="font-size: 13px;">
                            Remember me
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="back-home" href="{{ route('password.request') }}">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-submit mb-3">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Log In to Dashboard
                </button>
            </form>

            <div class="text-center mt-3 pt-3 border-top border-secondary border-opacity-25">
                <a href="{{route('welcome')}}" class="back-home">
                    <i class="bi bi-arrow-left me-1"></i> Back to AQUAMEN Website
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
