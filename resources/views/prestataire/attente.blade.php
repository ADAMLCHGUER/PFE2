<x-layout>
    <x-slot:title>Compte en attente - Plateforme Tourisme Maroc</x-slot>
    
    <!-- Styles intégrés dans le head -->
        <!-- Bootstrap 5.3 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <style>
            :root {
                --primary-color: #2563eb;
                --warning-color: #d97706;
                --info-color: #0ea5e9;
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
                font-family: 'Inter', sans-serif !important;
                background-image: url('{{ asset("storage/images/bg1.jpeg") }}');                
                
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
                    radial-gradient(circle at 30% 40%, rgba(251, 191, 36, 0.3) 0%, transparent 50%),
                    radial-gradient(circle at 70% 80%, rgba(245, 158, 11, 0.3) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(217, 119, 6, 0.3) 0%, transparent 50%);
                animation: float-warm 20s ease-in-out infinite;
                z-index: -1;
                pointer-events: none;
            }

            @keyframes float-warm {
                0%, 100% { 
                    transform: translateY(0px) rotate(0deg) scale(1); 
                }
                33% { 
                    transform: translateY(-15px) rotate(120deg) scale(1.1); 
                }
                66% { 
                    transform: translateY(10px) rotate(240deg) scale(0.9); 
                }
            }

            /* Particules dorées flottantes */
            .particles {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                pointer-events: none;
                z-index: 0;
            }

            .particle {
                position: absolute;
                background: rgba(251, 191, 36, 0.2);
                border-radius: 50%;
                animation: particle-float-warm 25s infinite linear;
            }

            .particle:nth-child(1) { width: 12px; height: 12px; left: 15%; animation-delay: 0s; }
            .particle:nth-child(2) { width: 8px; height: 8px; left: 25%; animation-delay: 3s; }
            .particle:nth-child(3) { width: 10px; height: 10px; left: 35%; animation-delay: 6s; }
            .particle:nth-child(4) { width: 14px; height: 14px; left: 45%; animation-delay: 9s; }
            .particle:nth-child(5) { width: 6px; height: 6px; left: 55%; animation-delay: 12s; }
            .particle:nth-child(6) { width: 16px; height: 16px; left: 65%; animation-delay: 15s; }
            .particle:nth-child(7) { width: 8px; height: 8px; left: 75%; animation-delay: 18s; }
            .particle:nth-child(8) { width: 12px; height: 12px; left: 85%; animation-delay: 21s; }

            @keyframes particle-float-warm {
                0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
                10% { opacity: 0.7; }
                90% { opacity: 0.7; }
                100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
            }

            .page-container {
                position: relative;
                z-index: 10;
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: 2rem 0;
            }

            .main-card {
                background: rgba(255, 255, 255, 0.95) !important;
                backdrop-filter: blur(20px) !important;
                border: 1px solid rgba(255, 255, 255, 0.3) !important;
                border-radius: 24px !important;
                box-shadow: 
                    0 25px 50px rgba(217, 119, 6, 0.15),
                    0 0 0 1px rgba(255, 255, 255, 0.1) inset !important;
                transition: all 0.3s ease !important;
                overflow: hidden !important;
            }

            .main-card:hover {
                transform: translateY(-5px) !important;
                box-shadow: 
                    0 35px 70px rgba(217, 119, 6, 0.2),
                    0 0 0 1px rgba(255, 255, 255, 0.1) inset !important;
            }

            .card-header {
                background: linear-gradient(135deg, #fbbf24, #f59e0b) !important;
                border: none !important;
                padding: 2rem !important;
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
                background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.15), transparent);
                animation: shimmer-warm 4s infinite;
            }

            @keyframes shimmer-warm {
                0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
                100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
            }

            .card-header h4 {
                position: relative;
                z-index: 2;
                font-weight: 600 !important;
                letter-spacing: -0.025em;
                color: #1f2937 !important;
                margin: 0 !important;
            }

            .card-body {
                padding: 3rem !important;
                text-align: center;
            }

            .warning-icon {
                color: #d97706 !important;
                filter: drop-shadow(0 4px 8px rgba(217, 119, 6, 0.3));
                animation: pulse-warm 3s ease-in-out infinite;
            }

            @keyframes pulse-warm {
                0%, 100% { 
                    transform: scale(1) rotateY(0deg); 
                    filter: drop-shadow(0 4px 8px rgba(217, 119, 6, 0.3));
                }
                50% { 
                    transform: scale(1.08) rotateY(180deg); 
                    filter: drop-shadow(0 6px 12px rgba(217, 119, 6, 0.4));
                }
            }

            .main-title {
                color: var(--dark-color) !important;
                font-weight: 700 !important;
                letter-spacing: -0.025em;
                margin-bottom: 1.5rem !important;
                font-size: 2rem !important;
            }

            .lead-text {
                color: var(--medium-gray) !important;
                font-size: 1.125rem !important;
                line-height: 1.7;
                margin-bottom: 2rem !important;
            }

            .info-alert {
                background: linear-gradient(135deg, #dbeafe, #bfdbfe) !important;
                border: 1px solid #3b82f6 !important;
                border-radius: 16px !important;
                padding: 1.5rem !important;
                margin-bottom: 2rem !important;
                box-shadow: 0 4px 6px rgba(59, 130, 246, 0.1) !important;
                position: relative;
                overflow: hidden;
            }

            .info-alert::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
                animation: slide-shine 3s infinite;
            }

            @keyframes slide-shine {
                0% { left: -100%; }
                100% { left: 100%; }
            }

            .info-alert h5 {
                color: #1e40af !important;
                font-weight: 600 !important;
                margin-bottom: 0.75rem !important;
                position: relative;
                z-index: 2;
            }

            .info-alert p {
                color: #1d4ed8 !important;
                margin: 0 !important;
                line-height: 1.6;
                position: relative;
                z-index: 2;
            }

            .contact-text {
                color: var(--medium-gray) !important;
                font-size: 1rem;
                margin-bottom: 0 !important;
            }

            .contact-text a {
                color: #d97706 !important;
                text-decoration: none !important;
                font-weight: 500 !important;
                border-bottom: 1px solid #fbbf24 !important;
                transition: all 0.3s ease;
            }

            .contact-text a:hover {
                color: #92400e !important;
                border-bottom-color: #92400e !important;
            }

            .card-footer {
                background: rgba(248, 250, 252, 0.8) !important;
                border: none !important;
                padding: 2rem !important;
            }

            .modern-btn {
                padding: 0.875rem 2rem !important;
                border-radius: 12px !important;
                font-weight: 500 !important;
                letter-spacing: -0.025em;
                border: 2px solid transparent !important;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
                position: relative;
                overflow: hidden;
                text-decoration: none !important;
            }

            .btn-secondary-modern {
                background: rgba(255, 255, 255, 0.9) !important;
                color: var(--medium-gray) !important;
                border: 2px solid rgba(100, 116, 139, 0.2) !important;
                backdrop-filter: blur(10px);
            }

            .btn-secondary-modern:hover {
                background: rgba(255, 255, 255, 1) !important;
                color: var(--dark-color) !important;
                border-color: rgba(100, 116, 139, 0.3) !important;
                transform: translateY(-2px) !important;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
            }

            /* Indicateur de statut animé */
            .status-indicator {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
            }

            .status-dot {
                width: 8px;
                height: 8px;
                background: #f59e0b;
                border-radius: 50%;
                animation: status-pulse 2s ease-in-out infinite;
            }

            @keyframes status-pulse {
                0%, 100% { 
                    opacity: 1; 
                    transform: scale(1); 
                }
                50% { 
                    opacity: 0.6; 
                    transform: scale(1.2); 
                }
            }

            /* Responsive design */
            @media (max-width: 768px) {
                .card-body {
                    padding: 2rem 1.5rem !important;
                }
                
                .card-header, .card-footer {
                    padding: 1.5rem !important;
                }
                
                .warning-icon {
                    font-size: 4rem !important;
                }
                
                .main-title {
                    font-size: 1.5rem !important;
                }
                
                .modern-btn {
                    width: 100% !important;
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

            /* Force le style sur le body même si le layout l'override */
            html, body {
                background: linear-gradient(135deg, #1e40af 0%, #3b82f6 35%, #60a5fa 70%, #93c5fd 100%) ; background-attachment: fixed;
                min-height: 100vh !important;
                background-image: url('{{ asset("storage/images/bg1.jpeg") }}');
            }
        </style>

    <!-- Particules dorées flottantes -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="page-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <div class="main-card fade-in-up">
                        <div class="card-header text-center">
                            <h4 class="mb-0">Compte en attente de validation</h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="mb-4">
                                <i class="bi bi-hourglass-split warning-icon" style="font-size: 5rem;"></i>
                            </div>
                            
                            <h2 class="main-title">Merci pour votre inscription !</h2>
                            
                            <p class="lead-text">
                                Votre compte prestataire est actuellement en cours d'examen par notre équipe spécialisée.
                            </p>
                            
                            <div class="info-alert">
                                <h5>
                                    <i class="bi bi-info-circle-fill me-2"></i>
                                    <span class="status-indicator">
                                        Statut actuel : 
                                        <span class="status-dot"></span>
                                        <strong>En révision</strong>
                                    </span>
                                </h5>
                                <p>
                                    Vous recevrez un email de confirmation dès que votre compte sera validé pour pouvoir commencer à gérer votre service sur notre plateforme.
                                </p>
                            </div>
                            
                            <p class="contact-text">
                                Si vous avez des questions concernant votre inscription, n'hésitez pas à nous contacter à
                                <a href="mailto:contact@tourisme-maroc.com">contact@tourisme-maroc.com</a>.
                            </p>
                        </div>
                        
                        <div class="card-footer text-center">
                            <form action="{{ route('prestataire.deconnexion') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn modern-btn btn-secondary-modern">
                                    <i class="bi bi-box-arrow-right me-2"></i>
                                    Se déconnecter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <x-slot:scripts>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
        
        <script>
            // Animation au chargement
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(() => {
                    const card = document.querySelector('.main-card');
                    if (card) {
                        card.style.transform = 'scale(1)';
                    }
                }, 100);
            });

            // Effet de parallaxe sur les particules
            document.addEventListener('mousemove', function(e) {
                const particles = document.querySelectorAll('.particle');
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;
                
                particles.forEach((particle, index) => {
                    const speed = (index + 1) * 0.3;
                    particle.style.transform += ` translate(${x * speed}px, ${y * speed}px)`;
                });
            });

            // Animation supplémentaire pour l'icône de statut
            setInterval(() => {
                const icon = document.querySelector('.warning-icon');
                if (icon) {
                    icon.style.filter = 'drop-shadow(0 6px 12px rgba(217, 119, 6, 0.5))';
                    setTimeout(() => {
                        icon.style.filter = 'drop-shadow(0 4px 8px rgba(217, 119, 6, 0.3))';
                    }, 500);
                }
            }, 3000);
        </script>
    </x-slot>
</x-layout>