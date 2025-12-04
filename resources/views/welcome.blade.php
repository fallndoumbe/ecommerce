<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon Application Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: #333;
        }

        /* Header */
        header {
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: white;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 30px;
            padding: 10px 25px;
            border-radius: 25px;
            transition: all 0.3s;
            font-weight: 500;
        }

        nav a:hover {
            background: white;
            color: #667eea;
        }

        /* Main Content */
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
            text-align: center;
        }

        .hero {
            background: white;
            padding: 60px 80px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 48px;
            color: #667eea;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .subtitle {
            font-size: 20px;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.5);
        }

        .btn-secondary {
            background: #f0f0f0;
            color: #667eea;
        }

        .btn-secondary:hover {
            background: #e0e0e0;
            transform: translateY(-3px);
        }

        .btn-success {
            background: #10b981;
            color: white;
        }

        .btn-success:hover {
            background: #059669;
            transform: scale(1.05);
        }

        .btn-warning {
            background: #f59e0b;
            color: white;
        }

        .btn-warning:hover {
            background: #d97706;
            transform: scale(1.05);
        }

        .btn-danger {
            background: #ef4444;
            color: white;
        }

        .btn-danger:hover {
            background: #dc2626;
            transform: scale(1.05);
        }

        /* Features */
        .features {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
        }

        .feature-card {
            background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
            padding: 25px;
            border-radius: 15px;
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .feature-title {
            font-size: 18px;
            font-weight: 600;
            color: #667eea;
            margin-bottom: 10px;
        }

        .feature-desc {
            font-size: 14px;
            color: #666;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: white;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 20px;
                padding: 20px;
            }

            nav a {
                margin-left: 10px;
                padding: 8px 15px;
                font-size: 14px;
            }

            .hero {
                padding: 40px 30px;
            }

            h1 {
                font-size: 32px;
            }

            .subtitle {
                font-size: 16px;
            }

            .buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">🚀 Mon App</div>
        <nav>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Tableau de bord</a>
                @else
                    <a href="{{ route('login') }}">Connexion</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Inscription</a>
                    @endif
                @endauth
            @endif
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="hero">
            <h1>👋 Bienvenue !</h1>
            <p class="subtitle">
                Découvrez votre nouvelle application Laravel. 
                Simple, rapide et prête à être personnalisée selon vos besoins.
            </p>

            <div class="buttons">
                <button class="btn btn-success" onclick="alert('Élément ajouté avec succès ! ✅')">
                    ➕ Ajouter
                </button>
                <button class="btn btn-warning" onclick="alert('Modification enregistrée ! ✏️')">
                    ✏️ Modifier
                </button>
                <button class="btn btn-danger" onclick="alert('Élément supprimé ! 🗑️')">
                    🗑️ Supprimer
                </button>
            </div>

            <!-- Features -->
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <div class="feature-title">Rapide</div>
                    <div class="feature-desc">Performance optimale</div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎨</div>
                    <div class="feature-title">Design</div>
                    <div class="feature-desc">Interface moderne</div>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <div class="feature-title">Sécurisé</div>
                    <div class="feature-desc">Protection maximale</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Mon Application Laravel - Fait avec ❤️</p>
    </footer>
</body>
</html>
