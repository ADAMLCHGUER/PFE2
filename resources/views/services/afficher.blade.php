<x-layout>
    <x-slot:title>{{ $service->titre }} - Plateforme Tourisme Maroc</x-slot>
    <style>
        /* ====== CSS ULTRA-MODERNE 2025 - TOURISME MAROC ====== */

/* Variables CSS 2025 avec couleurs tendance */
:root {
    /* Couleurs principales 2025 */
    --primary-gradient: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%);
    --secondary-gradient: linear-gradient(135deg, #06b6d4 0%, #3b82f6 100%);
    --success-gradient: linear-gradient(135deg, #10b981 0%, #059669 100%);
    --warning-gradient: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    
    /* Couleurs neutres modernes */
    --dark-900: #0f172a;
    --dark-800: #1e293b;
    --dark-700: #334155;
    --dark-600: #475569;
    --gray-500: #64748b;
    --gray-400: #94a3b8;
    --gray-300: #cbd5e1;
    --gray-200: #e2e8f0;
    --gray-100: #f1f5f9;
    --gray-50: #f8fafc;
    
    /* Couleurs vives 2025 */
    --electric-blue: #0066ff;
    --neon-pink: #ff0080;
    --cyber-green: #00ff88;
    --plasma-purple: #8000ff;
    
    /* Ombres et effets */
    --shadow-glow: 0 0 40px rgba(99, 102, 241, 0.3);
    --shadow-float: 0 20px 60px rgba(0, 0, 0, 0.1);
    --shadow-intense: 0 25px 80px rgba(0, 0, 0, 0.15);
    --shadow-neon: 0 0 20px rgba(255, 0, 128, 0.4);
    
    /* Bordures et rayons */
    --radius-xl: 24px;
    --radius-2xl: 32px;
    --radius-3xl: 48px;
    
    /* Animations timing */
    --transition-smooth: cubic-bezier(0.4, 0, 0.2, 1);
    --transition-bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    --transition-elastic: cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

/* Reset et base moderne */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: radial-gradient(ellipse at top, #f0f4ff 0%, #e0e7ff 50%, #c7d2fe 100%);
    min-height: 100vh;
    line-height: 1.6;
    color: var(--dark-800);
    overflow-x: hidden;
}

/* Arrière-plan animé futuriste */
body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        radial-gradient(circle at 20% 50%, rgba(99, 102, 241, 0.1) 0%, transparent 70%),
        radial-gradient(circle at 80% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 70%),
        radial-gradient(circle at 40% 80%, rgba(236, 72, 153, 0.1) 0%, transparent 70%);
    animation: backgroundFloat 20s ease-in-out infinite;
    pointer-events: none;
    z-index: -1;
}

@keyframes backgroundFloat {
    0%, 100% { transform: scale(1) rotate(0deg); }
    50% { transform: scale(1.1) rotate(2deg); }
}

/* Container avec glassmorphism */
.container {
    max-width: 1400px;
    position: relative;
}

/* Breadcrumb futuriste */
.breadcrumb {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-xl);
    padding: 1rem 1.5rem;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-float);
    animation: slideInDown 0.8s var(--transition-elastic);
}

.breadcrumb-item a {
    color: var(--gray-600);
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s var(--transition-smooth);
    padding: 0.25rem 0.5rem;
    border-radius: 8px;
}

.breadcrumb-item a:hover {
    color: var(--electric-blue);
    background: rgba(0, 102, 255, 0.1);
    transform: translateY(-2px);
}

.breadcrumb-item.active {
    color: var(--electric-blue);
    font-weight: 700;
}

/* Carte principale avec design révolutionnaire */
.card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-float);
    transition: all 0.4s var(--transition-smooth);
    position: relative;
    overflow: hidden;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--primary-gradient);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-intense), var(--shadow-glow);
}

.card:hover::before {
    opacity: 1;
}

/* Carousel ultra-moderne */
.carousel {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    position: relative;
}

.carousel-item img {
    object-fit: cover;
    min-height: 500px;
    transition: transform 0.6s var(--transition-smooth);
}

.carousel:hover .carousel-item.active img {
    transform: scale(1.05);
}

/* Contrôles de carousel stylisés */
.carousel-control-prev,
.carousel-control-next {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    transition: all 0.3s var(--transition-smooth);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.carousel-control-prev {
    left: 20px;
}

.carousel-control-next {
    right: 20px;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    background: rgba(255, 255, 255, 1);
    transform: translateY(-50%) scale(1.1);
    box-shadow: var(--shadow-float);
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-size: 20px;
    filter: invert(0.5);
}

/* Indicateurs modernes */
.carousel-indicators {
    bottom: 20px;
    gap: 8px;
}

.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.5);
    border: 2px solid rgba(255, 255, 255, 0.8);
    transition: all 0.3s var(--transition-bounce);
}

.carousel-indicators button.active {
    background: white;
    transform: scale(1.3);
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
}

/* Titre principal avec effet de gradient */
.card-title {
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
    font-size: 2.5rem;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    animation: textGlow 3s ease-in-out infinite alternate;
}

@keyframes textGlow {
    from { filter: brightness(1); }
    to { filter: brightness(1.2); }
}

/* Badges futuristes */
.badge {
    padding: 0.6rem 1.2rem;
    border-radius: var(--radius-xl);
    font-weight: 600;
    font-size: 0.875rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    transition: all 0.3s var(--transition-bounce);
}

.badge:hover {
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.bg-primary.bg-opacity-10 {
    background: rgba(99, 102, 241, 0.1) !important;
    color: var(--electric-blue) !important;
    border-color: rgba(99, 102, 241, 0.2) !important;
}

.bg-secondary.bg-opacity-10 {
    background: rgba(100, 116, 139, 0.1) !important;
    color: var(--gray-600) !important;
    border-color: rgba(100, 116, 139, 0.2) !important;
}

/* Section prestataire avec design premium */
.bg-light.bg-opacity-50 {
    background: rgba(255, 255, 255, 0.8) !important;
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.3) !important;
    border-radius: var(--radius-xl);
    transition: all 0.3s var(--transition-smooth);
}

.bg-light.bg-opacity-50:hover {
    background: rgba(255, 255, 255, 0.95) !important;
    transform: translateY(-2px);
}

/* Icônes avec effets lumineux */
.rounded-circle.bg-primary.bg-opacity-10 {
    background: var(--primary-gradient) !important;
    color: white !important;
    box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
    transition: all 0.3s var(--transition-bounce);
}

.rounded-circle.bg-primary.bg-opacity-10:hover {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 0 30px rgba(99, 102, 241, 0.5);
}

/* Boutons révolutionnaires */
.btn {
    font-weight: 600;
    padding: 0.8rem 2rem;
    border-radius: var(--radius-xl);
    transition: all 0.4s var(--transition-smooth);
    position: relative;
    overflow: hidden;
    border: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 0.875rem;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.6s;
}

.btn:hover::before {
    left: 100%;
}

.btn-primary {
    background: var(--primary-gradient);
    color: white;
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
}

.btn-primary:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(99, 102, 241, 0.4);
    color: white;
}

.btn-outline-dark {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border: 2px solid var(--gray-300);
    color: var(--dark-700);
}

.btn-outline-dark:hover {
    background: var(--dark-800);
    color: white;
    border-color: var(--dark-800);
    transform: translateY(-4px);
}

/* Cartes secondaires avec glassmorphism */
.shadow-sm {
    box-shadow: var(--shadow-float) !important;
}

.card-header {
    background: rgba(255, 255, 255, 0.6) !important;
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
    border-radius: var(--radius-2xl) var(--radius-2xl) 0 0 !important;
}

/* Liste avec animations */
.list-group-item {
    background: transparent !important;
    border: none !important;
    border-bottom: 1px solid rgba(226, 232, 240, 0.3) !important;
    padding: 1.5rem 0;
    transition: all 0.3s var(--transition-smooth);
}

.list-group-item:hover {
    background: rgba(99, 102, 241, 0.05) !important;
    transform: translateX(8px);
    border-left: 4px solid var(--electric-blue);
    padding-left: 1rem;
}

/* Étoiles avec effet scintillant */
.text-warning .bi-star-fill {
    color: #fbbf24;
    animation: sparkle 2s ease-in-out infinite;
    animation-delay: calc(var(--i) * 0.1s);
}

@keyframes sparkle {
    0%, 100% { transform: scale(1) rotate(0deg); }
    50% { transform: scale(1.2) rotate(5deg); }
}

/* Section avis avec design premium */
.col-md-6 .p-3 {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.3) !important;
    border-radius: var(--radius-xl);
    transition: all 0.4s var(--transition-smooth);
    position: relative;
}

.col-md-6 .p-3:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-intense);
    background: rgba(255, 255, 255, 0.95);
}

.col-md-6 .p-3::before {
    content: '"';
    position: absolute;
    top: -10px;
    left: 20px;
    font-size: 4rem;
    color: var(--electric-blue);
    opacity: 0.3;
    font-family: serif;
}

/* Avatars avec bordures animées */
.rounded-circle[style*="width: 40px"] {
    background: var(--primary-gradient) !important;
    border: 3px solid white;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
    animation: pulseAvatar 2s ease-in-out infinite;
}

@keyframes pulseAvatar {
    0%, 100% { box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3); }
    50% { box-shadow: 0 0 0 6px rgba(99, 102, 241, 0.1); }
}

/* Animations d'entrée */
@keyframes slideInDown {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
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

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Classes d'animation */
.fade-in {
    animation: fadeInUp 0.8s var(--transition-elastic);
}

.slide-in-left {
    animation: slideInLeft 0.8s var(--transition-elastic);
}

/* Échelonnement des animations */
.card:nth-child(1) { animation-delay: 0.1s; }
.card:nth-child(2) { animation-delay: 0.2s; }
.card:nth-child(3) { animation-delay: 0.3s; }
.card:nth-child(4) { animation-delay: 0.4s; }

/* Design responsive 2025 */
@media (max-width: 1200px) {
    .card-title { font-size: 2rem; }
    .carousel-item img { min-height: 400px; }
}

@media (max-width: 768px) {
    .card-title { font-size: 1.75rem; }
    .carousel-item img { min-height: 300px; }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
    }
    
    .carousel-control-prev { left: 10px; }
    .carousel-control-next { right: 10px; }
    
    .btn { padding: 0.7rem 1.5rem; }
}

@media (max-width: 576px) {
    .container { padding: 1rem; }
    .card-body { padding: 1.5rem !important; }
    .breadcrumb { padding: 0.75rem 1rem; }
}

/* Effets de survol pour les liens */
a:not(.btn) {
    transition: all 0.3s var(--transition-smooth);
}

a:not(.btn):hover {
    transform: translateY(-1px);
}

/* Scrollbar personnalisée */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: var(--gray-100);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-gradient);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--secondary-gradient);
}

/* Effet de particules flottantes */
.container::after {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 10% 20%, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
        radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
        radial-gradient(circle at 40% 40%, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 100px 100px, 150px 150px, 200px 200px;
    animation: floatingParticles 20s linear infinite;
    pointer-events: none;
    z-index: -1;
}

@keyframes floatingParticles {
    0% { transform: translateY(0) rotate(0deg); }
    100% { transform: translateY(-100vh) rotate(360deg); }
}
    </style>
    <div class="container py-5">
        <!-- Fil d'Ariane amélioré avec design épuré -->
        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb bg-transparent ps-0 border-bottom pb-3">
                <li class="breadcrumb-item"><a href="{{ route('accueil') }}" class="text-decoration-none text-muted"><i class="bi bi-house-door"></i> Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services.index') }}" class="text-decoration-none text-muted"><i class="bi bi-collection"></i> Services</a></li>
                <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">{{ Str::limit($service->titre, 30) }}</li>
            </ol>
        </nav>
        
        <!-- Carte principale du service avec design luxueux -->
        <div class="card border-0 shadow-lg mb-5 rounded-4 overflow-hidden">
            <div class="row g-0">
                <!-- Galerie d'images avec style amélioré -->
                <div class="col-lg-7">
                    @if($service->images->count() > 0)
                        <div id="serviceCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                @foreach($service->images as $key => $image)
                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }} h-100">
                                        <img src="{{ asset('storage/' . $image->chemin) }}" 
                                             class="d-block w-100 h-100 object-fit-cover" 
                                             alt="Image du service {{ $service->titre }}">
                                        <!-- Overlay pour effet luxueux -->
                                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-25 rounded-pill px-3 py-2 mb-4 mx-auto" style="width: fit-content; bottom: 20px;">
                                            <span class="text-white small">{{ $key + 1 }}/{{ $service->images->count() }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($service->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark bg-opacity-50 rounded-circle p-3" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon bg-dark bg-opacity-50 rounded-circle p-3" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <!-- Indicateurs stylisés -->
                                <div class="carousel-indicators position-absolute mb-3">
                                    @foreach($service->images as $key => $image)
                                        <button type="button" data-bs-target="#serviceCarousel" data-bs-slide-to="{{ $key }}" 
                                                class="{{ $key === 0 ? 'active' : '' }} rounded-pill" 
                                                style="width: 10px; height: 10px;"
                                                aria-current="{{ $key === 0 ? 'true' : 'false' }}" 
                                                aria-label="Slide {{ $key + 1 }}"></button>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @else
                        <div class="bg-light bg-opacity-10 d-flex align-items-center justify-content-center" style="height: 100%; min-height: 350px;">
                            <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                </div>
                
                <!-- Détails du service avec design luxueux -->
                <div class="col-lg-5">
                    <div class="card-body p-4 p-lg-5 h-100 d-flex flex-column">
                        <h1 class="card-title mb-4 fw-bold text-primary" style="font-family: 'Playfair Display', serif;">{{ $service->titre }}</h1>
                        
                        <div class="mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary fs-6 mb-2 me-2 rounded-pill px-3 py-2">{{ $service->categorie->nom }}</span>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary fs-6 mb-2 rounded-pill px-3 py-2">
                                <i class="bi bi-geo-alt me-1"></i>{{ $service->ville->nom }}
                            </span>
                        </div>
                        
                        <div class="mb-4 flex-grow-1">
                            <h5 class="fw-bold border-bottom border-light pb-3 text-dark">Description</h5>
                            <p class="card-text lead fs-6 text-muted">{{ $service->description }}</p>
                        </div>
                        
                        <!-- Section Prestataire avec design élégant -->
                        <div class="mt-auto">
                            <div class="d-flex align-items-center bg-light bg-opacity-50 p-3 rounded-3 border border-light">
                                <div class="flex-shrink-0">
                                    <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                        <i class="bi bi-building text-primary" style="font-size: 1.5rem;"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1 fw-bold text-dark">Prestataire</h6>
                                    <p class="mb-0 text-primary">{{ $service->prestataire->nom_entreprise }}</p>
                                </div>
                            </div>
                            
                            <!-- Boutons d'action avec design luxueux -->
                            <div class="d-grid gap-3 mt-4">
                                <a href="{{ $service->site_web }}" class="btn btn-primary btn-lg rounded-pill shadow-sm fw-bold py-3" target="_blank">
                                    <i class="bi bi-globe me-2"></i> Consulter le site
                                </a>
                                <button class="btn btn-outline-dark rounded-pill py-3 fw-medium">
                                    <i class="bi bi-envelope me-2"></i> Contacter le prestataire
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section supplémentaire pour les détails avec design luxueux -->
        <div class="row mb-5 g-4">
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-white border-0 pt-4 pb-0 px-4">
                        <h5 class="card-title fw-bold text-dark">
                            <i class="bi bi-info-circle text-primary me-2"></i>Informations complémentaires
                        </h5>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                                        <i class="bi bi-clock text-primary"></i>
                                    </span>
                                    <span>Disponibilité</span>
                                </span>
                                <span class="badge bg-success rounded-pill px-3 py-2">Disponible</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                                        <i class="bi bi-currency-exchange text-primary"></i>
                                    </span>
                                    <span>Tarif</span>
                                </span>
                                <span class="fw-bold">Sur demande</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-3">
                                <span class="d-flex align-items-center">
                                    <span class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                                        <i class="bi bi-star text-primary"></i>
                                    </span>
                                    <span>Note moyenne</span>
                                </span>
                                <span class="text-warning d-flex align-items-center fw-medium">
                                    <i class="bi bi-star-fill me-1"></i>
                                    <i class="bi bi-star-fill me-1"></i>
                                    <i class="bi bi-star-fill me-1"></i>
                                    <i class="bi bi-star-fill me-1"></i>
                                    <i class="bi bi-star-half me-2"></i>
                                    <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-2">4.5</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-white border-0 pt-4 pb-0 px-4">
                        <h5 class="card-title fw-bold text-dark">
                            <i class="bi bi-geo-alt text-primary me-2"></i>Localisation
                        </h5>
                    </div>
                    <div class="card-body px-4 pb-4">
                        <div class="position-relative rounded-3 overflow-hidden" style="height: 200px;">
                            <!-- Intégration de Google Maps ou autre service de cartes -->
                            <div class="d-flex align-items-center justify-content-center text-muted bg-light h-100">
                                <div class="text-center">
                                    <i class="bi bi-map fs-2 mb-3 text-primary"></i>
                                    <p class="mb-0">Carte de localisation</p>
                                </div>
                            </div>
                            <!-- Bannière sur la carte -->
                            <div class="position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-75 text-white py-2 px-3">
                                <p class="mb-0 small"><i class="bi bi-geo me-2"></i> {{ $service->ville->nom }}, Maroc</p>
                            </div>
                        </div>
                        <div class="mt-3 text-center">
                            <p class="mb-0 text-muted fst-italic"><i class="bi bi-info-circle me-1"></i> Adresse exacte fournie après réservation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section des avis clients (nouvelle section) -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
            <div class="card-header bg-white border-0 d-flex align-items-center justify-content-between p-4">
                <h5 class="card-title fw-bold text-dark mb-0">
                    <i class="bi bi-chat-left-quote text-primary me-2"></i>Avis des clients
                </h5>
                <button class="btn btn-sm btn-outline-primary rounded-pill px-3">Tous les avis</button>
            </div>
            <div class="card-body p-4">
                <div class="row g-4">
                    <!-- Avis client 1 -->
                    <div class="col-md-6">
                        <div class="p-3 border border-light rounded-3 h-100">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center me-3" 
                                     style="width: 40px; height: 40px; font-weight: bold;">SM</div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Sarah M.</h6>
                                    <div class="text-warning small">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-auto text-muted small">Il y a 2 jours</div>
                            </div>
                            <p class="mb-0 text-muted">Une expérience inoubliable! Le service était impeccable et dépassait toutes mes attentes. Je recommande vivement!</p>
                        </div>
                    </div>
                    <!-- Avis client 2 -->
                    <div class="col-md-6">
                        <div class="p-3 border border-light rounded-3 h-100">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle bg-primary bg-opacity-10 text-primary d-flex align-items-center justify-content-center me-3" 
                                     style="width: 40px; height: 40px; font-weight: bold;">JD</div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Jean D.</h6>
                                    <div class="text-warning small">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                                <div class="ms-auto text-muted small">Il y a 1 semaine</div>
                            </div>
                            <p class="mb-0 text-muted">Très bon service, personnel accueillant et professionnel. Je n'hésiterai pas à revenir lors de mon prochain séjour au Maroc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de retour avec design luxueux -->
        <div class="text-center mt-5">
            <a href="{{ route('services.index') }}" class="btn btn-outline-primary px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-arrow-left me-2"></i> Retour à la liste des services
            </a>
        </div>
    </div>

    @push('styles')
    <style>
        /* Police pour un look luxueux */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Animation pour un effet luxueux */
        .card {
            transition: all 0.3s ease;
            border-radius: 12px;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 .8rem 1.5rem rgba(0,0,0,.15) !important;
        }
        
        /* Stylisation du breadcrumb */
        .breadcrumb {
            font-size: 0.875rem;
        }
        
        .breadcrumb-item a {
            color: #6c757d;
            transition: color 0.3s ease;
        }
        
        .breadcrumb-item a:hover {
            color: var(--bs-primary);
        }
        
        /* Stylisation du carousel */
        .carousel-item img {
            object-fit: cover;
            min-height: 400px;
        }
        
        .carousel-control-prev:hover, .carousel-control-next:hover {
            opacity: 1;
        }
        
        /* Stylisation des badges */
        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
        }
        
        /* Stylisation des boutons */
        .btn {
            transition: all 0.3s ease;
            font-weight: 500;
            letter-spacing: 0.3px;
        }
        
        .btn-primary {
            background: linear-gradient(45deg, var(--bs-primary), #4361ee);
            border: none;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(66, 99, 235, 0.3);
        }
        
        .btn-outline-primary:hover, .btn-outline-dark:hover {
            transform: translateY(-2px);
        }
        
        /* Stylisation des étoiles */
        .text-warning .bi-star-fill, .text-warning .bi-star-half {
            font-size: 0.85rem;
        }
        
        /* Animation des icônes */
        .card-title .bi {
            transform: translateY(0);
            transition: transform 0.3s ease;
        }
        
        .card:hover .card-title .bi {
            transform: translateY(-3px);
        }
        
        /* Stylisation de la section avis */
        .rounded-circle {
            box-shadow: 0 0 0 5px rgba(var(--bs-primary-rgb), 0.05);
        }
        
        /* Stylisation des effets de survol */
        .list-group-item {
            transition: all 0.3s ease;
        }
        
        .list-group-item:hover {
            background-color: rgba(var(--bs-primary-rgb), 0.03);
        }
        
        /* Amélioration de la responsivité */
        @media (max-width: 768px) {
            .carousel-item img {
                min-height: 300px;
            }
        }
        
        /* Animation de chargement de page */
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Scripts pour la galerie et interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Ajout de classe pour animation d'entrée
            document.querySelector('.container').classList.add('fade-in');
            
            // Initialisation des tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            
            // Animation sur défilement
            const animateOnScroll = function() {
                const elements = document.querySelectorAll('.card');
                elements.forEach(element => {
                    const position = element.getBoundingClientRect();
                    // Si l'élément est visible
                    if(position.top < window.innerHeight && position.bottom >= 0) {
                        element.classList.add('fade-in');
                    }
                });
            };
            
            // Exécuter une fois au chargement
            animateOnScroll();
            
            // Ajouter un écouteur d'événement pour le défilement
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
    @endpush
</x-layout>