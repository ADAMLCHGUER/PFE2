
<x-layout>
    <x-slot:title>Accès refusé - Plateforme Tourisme Maroc</x-slot>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès refusé - Plateforme Tourisme Maroc</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --danger-color: #dc2626;
            --success-color: #059669;
            --warning-color: #d97706;
            --dark-color: #1f2937;
            --light-gray: #f8fafc;
            --medium-gray: #64748b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Arrière-plan animé avec des formes flottantes */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
            animation: float 15s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Particules flottantes */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: particle-float 20s infinite linear;
        }

        .particle:nth-child(1) { width: 10px; height: 10px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 6px; height: 6px; left: 20%; animation-delay: 2s; }
        .particle:nth-child(3) { width: 8px; height: 8px; left: 30%; animation-delay: 4s; }
        .particle:nth-child(4) { width: 12px; height: 12px; left: 40%; animation-delay: 6s; }
        .particle:nth-child(5) { width: 4px; height: 4px; left: 50%; animation-delay: 8s; }
        .particle:nth-child(6) { width: 14px; height: 14px; left: 60%; animation-delay: 10s; }
        .particle:nth-child(7) { width: 6px; height: 6px; left: 70%; animation-delay: 12s; }
        .particle:nth-child(8) { width: 10px; height: 10px; left: 80%; animation-delay: 14s; }
        .particle:nth-child(9) { width: 8px; height: 8px; left: 90%; animation-delay: 16s; }

        @keyframes particle-float {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }

        .container {
            position: relative;
            z-index: 2;
        }

        .main-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.1) inset;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .main-card:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.1) inset;
        }

        .card-header {
            background: linear-gradient(135deg, var(--danger-color), #ef4444);
            border: none;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .card-header h4 {
            position: relative;
            z-index: 2;
            font-weight: 600;
            letter-spacing: -0.025em;
        }

        .card-body {
            padding: 3rem;
            text-align: center;
        }

        .error-icon {
            color: var(--danger-color);
            filter: drop-shadow(0 4px 8px rgba(220, 38, 38, 0.3));
            animation: pulse-icon 2s ease-in-out infinite;
        }

        @keyframes pulse-icon {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .main-title {
            color: var(--dark-color);
            font-weight: 700;
            letter-spacing: -0.025em;
            margin-bottom: 1.5rem;
        }

        .lead-text {
            color: var(--medium-gray);
            font-size: 1.125rem;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .info-alert {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border: 1px solid #0ea5e9;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(14, 165, 233, 0.1);
        }

        .info-alert h5 {
            color: #0c4a6e;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .info-alert p {
            color: #0369a1;
            margin: 0;
            line-height: 1.6;
        }

        .info-alert a {
            color: #0c4a6e;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid #0ea5e9;
            transition: all 0.3s ease;
        }

        .info-alert a:hover {
            color: #075985;
            border-bottom-color: #075985;
        }

        .card-footer {
            background: rgba(248, 250, 252, 0.8);
            border: none;
            padding: 2rem;
        }

        .modern-btn {
            padding: 0.875rem 2rem;
            border-radius: 12px;
            font-weight: 500;
            letter-spacing: -0.025em;
            border: 2px solid transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-primary-modern {
            background: linear-gradient(135deg, var(--primary-color), #3b82f6);
            color: white;
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.3);
        }

        .btn-primary-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
            background: linear-gradient(135deg, #1d4ed8, var(--primary-color));
        }

        .btn-secondary-modern {
            background: rgba(255, 255, 255, 0.9);
            color: var(--medium-gray);
            border: 2px solid rgba(100, 116, 139, 0.2);
            backdrop-filter: blur(10px);
        }

        .btn-secondary-modern:hover {
            background: rgba(255, 255, 255, 1);
            color: var(--dark-color);
            border-color: rgba(100, 116, 139, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .card-body {
                padding: 2rem 1.5rem;
            }
            
            .card-header, .card-footer {
                padding: 1.5rem;
            }
            
            .error-icon {
                font-size: 4rem !important;
            }
            
            .main-title {
                font-size: 1.5rem;
            }
            
            .btn-group-mobile {
                flex-direction: column;
                gap: 0.75rem;
            }
            
            .modern-btn {
                width: 100%;
            }
        }

        /* Animation d'entrée */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Particules flottantes -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="main-card fade-in-up">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Accès Refusé</h4>
                    </div>
                    
                    <div class="card-body">
                        <div class="mb-4">
                            <i class="bi bi-x-circle-fill error-icon" style="font-size: 5rem;"></i>
                        </div>
                        
                        <h2 class="main-title">Votre compte n'a pas été approuvé</h2>
                        
                        <p class="lead-text">
                            Nous sommes désolés, mais votre demande d'inscription en tant que prestataire n'a pas été approuvée par notre équipe.
                        </p>
                        
                        <div class="info-alert">
                            <h5>
                                <i class="bi bi-question-circle-fill me-2"></i>
                                Que faire maintenant ?
                            </h5>
                            <p>
                                Si vous pensez qu'il s'agit d'une erreur ou si vous souhaitez obtenir plus d'informations sur les raisons du refus, n'hésitez pas à nous contacter à 
                                <a href="mailto:contact@tourisme-maroc.com">contact@tourisme-maroc.com</a>. 
                                Notre équipe vous répondra dans les plus brefs délais.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card-footer text-center">
                        <div class="d-flex gap-3 justify-content-center btn-group-mobile">
                            <a href="{{ route('accueil') }}" class="btn modern-btn btn-primary-modern">
                                <i class="bi bi-house-fill me-2"></i>
                                Retour à l'accueil
                            </a>
                            <form action="{{ route('prestataire.deconnexion') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn modern-btn btn-secondary-modern">
                                    <i class="bi bi-box-arrow-right me-2"></i> Se déconnecter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


   

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <script>
        
        

        // Animation au chargement
        document.addEventListener('DOMContentLoaded', function() {
            // Ajouter une classe d'animation supplémentaire après le chargement
            setTimeout(() => {
                document.querySelector('.main-card').style.transform = 'scale(1)';
            }, 100);
        });

        // Effet de parallaxe léger sur le mouvement de la souris
        document.addEventListener('mousemove', function(e) {
            const particles = document.querySelectorAll('.particle');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            particles.forEach((particle, index) => {
                const speed = (index + 1) * 0.5;
                particle.style.transform += ` translate(${x * speed}px, ${y * speed}px)`;
            });
        });
    </script>
</x-layout>