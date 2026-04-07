<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Asansör 360 - Profesyonel Yönetim Platformu</title>
    
    <!-- Google Fonts: Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Material Design Iconic Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #09090b; /* Zinc 950 Deep Dark */
            background-image: 
                radial-gradient(ellipse at 50% -20%, rgba(37, 99, 235, 0.15) 0%, transparent 60%),
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
            font-family: 'Outfit', sans-serif;
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .auth-container {
            width: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 10;
        }

        .premium-card {
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.05);
            max-width: 440px;
            width: 100%;
            padding: 48px;
            text-align: left;
        }

        @media (max-width: 480px) {
            .premium-card {
                padding: 40px 24px;
                border-radius: 20px;
            }
        }

        /* Typography Logo */
        .brand-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 40px;
        }
        .brand-logo .icon {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .brand-logo .text {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -1px;
            color: #ffffff;
        }
        .brand-logo .text span {
            color: #3b82f6;
            font-weight: 500;
        }

        /* Titles */
        .premium-card h2 {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
            text-align: center;
        }
        .premium-card p.subtitle {
            font-size: 15px;
            color: #94a3b8;
            margin-bottom: 32px;
            text-align: center;
            font-weight: 400;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #94a3b8;
            margin-bottom: 8px;
        }

        .input-icon-wrapper {
            position: relative;
        }
        .input-icon-wrapper i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: 18px;
            transition: color 0.3s;
        }
        .premium-input {
            width: 100%;
            height: 52px;
            background: rgba(0, 0, 0, 0.3) !important;
            border: 1px solid rgba(255, 255, 255, 0.08) !important;
            color: #f8fafc !important;
            border-radius: 12px;
            padding: 0 16px 0 44px;
            font-size: 15px;
            font-family: 'Outfit', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }
        .premium-input:focus {
            background: rgba(0, 0, 0, 0.5) !important;
            border-color: #3b82f6 !important;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15) !important;
        }
        .premium-input:focus + i, .premium-input:not(:placeholder-shown) + i {
            color: #3b82f6;
        }
        .premium-input::placeholder {
            color: #475569;
        }

        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            margin-top: -5px;
        }
        
        .remember-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13.5px;
            color: #cbd5e1;
            cursor: pointer;
        }
        .remember-checkbox input {
            width: 16px;
            height: 16px;
            accent-color: #3b82f6;
            cursor: pointer;
        }
        
        .forgot-link {
            font-size: 13.5px;
            font-weight: 500;
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.2s;
        }
        .forgot-link:hover {
            color: #3b82f6;
        }

        .btn-premium {
            width: 100%;
            height: 52px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .btn-premium:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
        }
        .btn-premium:active {
            transform: translateY(1px);
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.2);
            color: #4ade80;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 14px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .error-message {
            color: #f87171;
            font-size: 13px;
            margin-top: 6px;
            margin-bottom: -10px;
            display: block;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
            color: #475569;
        }
        .footer span {
            color: #64748b;
        }

        /* Arka plandaki dekoratif ışık hüzmesi */
        .ambient-light {
            position: fixed;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.08) 0%, transparent 60%);
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 0;
        }
    </style>
</head>
<body>

    <div class="ambient-light"></div>

    <div class="auth-container">
        <form class="premium-card" method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="brand-logo">
                <div class="icon">
                    <i class="zmdi zmdi-swap-vertical"></i>
                </div>
                <div class="text">
                    ASANSÖR<span>360</span>
                </div>
            </div>

            <h2>Sisteme Giriş</h2>
            <p class="subtitle">Bakım ve müşteri yönetimi paneline erişin.</p>

            @if (session('status'))
                <div class="alert-success">
                    <i class="zmdi zmdi-check-circle"></i>
                    {{ session('status') }}
                </div>
            @endif

            <div class="form-group">
                <label class="form-label">E-Posta Adresi</label>
                <div class="input-icon-wrapper">
                    <input type="email" name="email" class="premium-input" placeholder="isim@sirket.com" value="{{ old('email') }}" required autofocus>
                    <i class="zmdi zmdi-email"></i>
                </div>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Şifre</label>
                <div class="input-icon-wrapper">
                    <input type="password" name="password" class="premium-input" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required>
                    <i class="zmdi zmdi-lock"></i>
                </div>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="options-row">
                <label class="remember-checkbox">
                    <input type="checkbox" name="remember">
                    <span>Beni Hatırla</span>
                </label>
                
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-link">Şifremi Unuttum</a>
                @endif
            </div>

            <button type="submit" class="btn-premium">
                Giriş Yap <i class="zmdi zmdi-arrow-right" style="margin-left: 4px;"></i>
            </button>

            <div class="footer">
                Güvenli Kurumsal Giriş &bull; <span>v2.2.0</span>
            </div>
        </form>
    </div>

</body>
</html>
