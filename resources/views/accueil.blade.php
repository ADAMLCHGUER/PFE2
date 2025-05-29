<x-layout>
    <x-slot:title>Accueil - Plateforme Tourisme Maroc</x-slot>
    
    <!-- Bannière principale avec vidéo de fond style Turkish Airlines -->
    <section class="hero-banner overflow-hidden position-relative mb-5">
        <!-- Vidéo d'arrière-plan -->
        <video autoplay muted loop playsinline class="video-background">
            <source src="{{ asset('storage/images/morocco.mp4') }}" type="video/mp4">
        </video>
        
        <!-- Espace explicite entre la navbar et le contenu principal -->
        <div class="navbar-spacer"></div>
        
        <div class="container position-relative z-index-1">
            <div class="row align-items-center min-vh-60 py-5">
                <div class="col-lg-10 col-xl-8 mx-auto text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-4 fw-bold text-white mb-4">Découvrez l'excellence touristique au Maroc</h1>
                    <p class="lead text-white mb-4 opacity-75">Des expériences authentiques et des services premium pour un séjour mémorable.</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="{{ route('services.index') }}" class="btn btn-light btn-lg px-4 py-3 rounded-pill fw-bold shadow">
                            <i class="bi bi-search me-2"></i> Explorer les services
                        </a>
                        <a href="#destinations" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill fw-bold">
                            <i class="bi bi-geo-alt me-2"></i> Nos destinations
                        </a>
                    </div>
                </div>
                <!-- La colonne droite avec l'image a été supprimée -->
            </div>
        </div>
        
        <!-- Overlay pour assurer la lisibilité du texte -->
        <div class="position-absolute bottom-0 start-0 w-100 h-50" style="background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, transparent 100%);"></div>
        
        <!-- Formes décoratives -->
        <div class="position-absolute top-0 end-0 w-50 h-100" style="background: radial-gradient(circle at 70% 30%, rgba(255,255,255,0.1) 0%, transparent 70%);"></div>
    </section>

    <style>
        /* Style pour créer l'espacement explicite après la navbar */
        .navbar-spacer {
            height: 120px; /* Hauteur de l'espace entre la navbar et le contenu */
            width: 100%;
            display: block;
        }
        
        .hero-banner {
            border-radius: 0;
            overflow: hidden;
            position: relative;
            margin-top: -70px; /* Conservé tel quel pour remonter la section sous la navbar */
            height: 100vh;
        }
        
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }
        
        .min-vh-60 {
            min-height: 60vh;
        }
        
        .z-index-1 {
            z-index: 1;
        }
        
        .wow {
            visibility: hidden;
        }
        
        /* Overlay léger pour assurer la lisibilité du texte sur la vidéo */
        .hero-banner::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }
        
        /* Styles pour le texte */
        .hero-banner .display-4 {
            font-size: 3.2rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        /* Style pour les cercles autour des icônes */
        .icon-circle {
            transition: all 0.3s ease;
            z-index: 2;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        /* Style pour les images des catégories */
        .category-image-container {
            height: 180px;
            overflow: hidden;
        }
        
        .category-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card:hover .category-image {
            transform: scale(1.1);
        }
        
        /* Style pour le placeholder des catégories */
        .category-placeholder {
            height: 180px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-direction: column;
        }
        
        /* Ajout d'une vague décorative entre les sections */
        .bg-light {
            position: relative;
        }
        
        .bg-light::before {
            content: '';
            position: absolute;
            top: -70px;
            left: 0;
            width: 100%;
            height: 70px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 100'%3E%3Cpath fill='%23f8f9fa' fill-opacity='1' d='M0,64L80,53.3C160,43,320,21,480,21.3C640,21,800,43,960,48C1120,53,1280,43,1360,37.3L1440,32L1440,100L1360,100C1280,100,1120,100,960,100C800,100,640,100,480,100C320,100,160,100,80,100L0,100Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        /* Styles pour la section destinations 3D */
        .destinations-3d-container {
            position: relative;
            height: 600px;
            perspective: 1200px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 50px 0;
        }
        
        .destinations-slider {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transform-style: preserve-3d;
        }
        
        .destination-card-3d {
            position: absolute;
            width: 400px;
            height: 600px;
            border-radius: 5px;
            overflow: hidden;
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: pointer;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
        }
        
        .destination-inner {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            border-radius: 5px;
        }
        
        .destination-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .destination-bg-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .destination-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
            z-index: 1;
        }
        
        .destination-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 50px;
            color: white;
            z-index: 2;
            text-align: center;
            transform: translateY(0);
            transition: transform 0.6s ease;
        }
        
        .destination-location {
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 15px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }
        
        .destination-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 25px;
            letter-spacing: 3px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
            line-height: 1.2;
            color: #ffffff;
        }
        
        .destination-divider {
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, #fff 0%, transparent 100%);
            margin: 25px auto;
        }
        
        .destination-description {
            font-size: 1.2rem;
            opacity: 0.9;
            line-height: 1.7;
            margin-bottom: 30px;
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .destination-link {
            display: inline-flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.3rem;
            padding: 18px 35px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50px;
            transition: all 0.3s ease;
            backdrop-filter: blur(15px);
            background: rgba(255,255,255,0.1);
        }
        
        .destination-link:hover {
            color: white;
            border-color: rgba(255,255,255,0.8);
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }
        
        /* Positionnement des cartes */
        .destination-card-3d:nth-child(1) { transform: translateX(-500px) translateZ(-250px) rotateY(35deg) scale(0.8); opacity: 0.6; }
        .destination-card-3d:nth-child(2) { transform: translateX(-250px) translateZ(-125px) rotateY(20deg) scale(0.9); opacity: 0.8; }
        .destination-card-3d:nth-child(3) { transform: translateX(0) translateZ(0) rotateY(0deg) scale(1); opacity: 1; }
        .destination-card-3d:nth-child(4) { transform: translateX(250px) translateZ(-125px) rotateY(-20deg) scale(0.9); opacity: 0.8; }
        .destination-card-3d:nth-child(5) { transform: translateX(500px) translateZ(-250px) rotateY(-35deg) scale(0.8); opacity: 0.6; }
        
        /* Carte active (au centre) */
        .destination-card-3d.active {
            transform: translateX(0) translateZ(0) rotateY(0deg) scale(1) !important;
            opacity: 1 !important;
            z-index: 10;
        }
        
        .destination-card-3d.active .destination-bg {
            transform: scale(1.05);
        }
        
        /* Boutons de navigation */
        .nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 70px;
            height: 70px;
            border: none;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            color: white;
            font-size: 1.8rem;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(15px);
            border: 2px solid rgba(255,255,255,0.2);
            z-index: 20;
        }
        
        .nav-btn:hover {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.4);
            transform: translateY(-50%) scale(1.1);
        }
        
        .nav-prev {
            left: 30px;
        }
        
        .nav-next {
            right: 30px;
        }
        
        @media (max-width: 768px) {
            .hero-banner {
                height: 100vh;
            }
            
            .hero-banner .display-4 {
                font-size: 2.5rem;
            }
            
            .category-image-container {
                height: 150px;
            }
            
            .category-placeholder {
                height: 150px;
            }
            
            /* Responsive pour les destinations 3D */
            .destinations-3d-container {
                height: 550px;
                perspective: 1000px;
                margin: 30px 0;
            }
            
            .destination-card-3d {
                width: 350px;
                height: 480px;
                border-radius: 0px;
            }
            
            .destination-inner {
                border-radius: 0px;
            }
            
            .destination-card-3d:nth-child(1) { transform: translateX(-350px) translateZ(-175px) rotateY(30deg) scale(0.7); }
            .destination-card-3d:nth-child(2) { transform: translateX(-175px) translateZ(-90px) rotateY(15deg) scale(0.85); }
            .destination-card-3d:nth-child(3) { transform: translateX(0) translateZ(0) rotateY(0deg) scale(1); }
            .destination-card-3d:nth-child(4) { transform: translateX(175px) translateZ(-90px) rotateY(-15deg) scale(0.85); }
            .destination-card-3d:nth-child(5) { transform: translateX(350px) translateZ(-175px) rotateY(-30deg) scale(0.7); }
            
            .destination-title {
                font-size: 2.2rem;
                letter-spacing: 2px;
                color: #ffffff;
            }
            
            .destination-content {
                padding: 30px;
            }
            
            .destination-description {
                font-size: 1.1rem;
                margin-bottom: 25px;
                max-width: 280px;
            }
            
            .destination-link {
                font-size: 1.2rem;
                padding: 15px 28px;
            }
            
            .nav-btn {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .nav-prev {
                left: 20px;
            }
            
            .nav-next {
                right: 20px;
            }
        }
    </style>

    <!-- Script pour les animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
        
        // Assurer que la navbar-spacer ait la bonne taille
        document.addEventListener('DOMContentLoaded', function() {
            // Si vous avez besoin d'ajuster dynamiquement l'espace
            const navbarHeight = 80; // Hauteur approximative de votre navbar
            const extraSpace = 40; // Espace supplémentaire souhaité
            const spacer = document.querySelector('.navbar-spacer');
            if (spacer) {
                spacer.style.height = (navbarHeight + extraSpace) + 'px';
            }
        });
        
        // Navigation pour les destinations 3D
        let currentDestinationIndex = 2; // Index de la carte active (au centre)
        
        function navigateDestinations(direction) {
            const cards = document.querySelectorAll('.destination-card-3d');
            const totalCards = cards.length;
            
            // Supprimer la classe active de toutes les cartes
            cards.forEach(card => card.classList.remove('active'));
            
            // Calculer le nouvel index
            currentDestinationIndex += direction;
            
            // Gérer le bouclage
            if (currentDestinationIndex >= totalCards) {
                currentDestinationIndex = 0;
            } else if (currentDestinationIndex < 0) {
                currentDestinationIndex = totalCards - 1;
            }
            
            // Repositionner toutes les cartes
            cards.forEach((card, index) => {
                const relativeIndex = index - currentDestinationIndex;
                let transform = '';
                let opacity = 0.6;
                let zIndex = 1;
                
                if (relativeIndex === 0) {
                    // Carte active (au centre)
                    transform = 'translateX(0) translateZ(0) rotateY(0deg) scale(1)';
                    opacity = 1;
                    zIndex = 10;
                    card.classList.add('active');
                } else if (relativeIndex === -1) {
                    // Carte à gauche
                    transform = 'translateX(-250px) translateZ(-125px) rotateY(20deg) scale(0.9)';
                    opacity = 0.8;
                } else if (relativeIndex === 1) {
                    // Carte à droite
                    transform = 'translateX(250px) translateZ(-125px) rotateY(-20deg) scale(0.9)';
                    opacity = 0.8;
                } else if (relativeIndex === -2) {
                    // Carte très à gauche
                    transform = 'translateX(-500px) translateZ(-250px) rotateY(35deg) scale(0.8)';
                    opacity = 0.6;
                } else if (relativeIndex === 2) {
                    // Carte très à droite
                    transform = 'translateX(500px) translateZ(-250px) rotateY(-35deg) scale(0.8)';
                    opacity = 0.6;
                } else {
                    // Cartes hors vue
                    if (relativeIndex < 0) {
                        transform = 'translateX(-750px) translateZ(-375px) rotateY(45deg) scale(0.6)';
                    } else {
                        transform = 'translateX(750px) translateZ(-375px) rotateY(-45deg) scale(0.6)';
                    }
                    opacity = 0;
                }
                
                card.style.transform = transform;
                card.style.opacity = opacity;
                card.style.zIndex = zIndex;
            });
        }
        
        // Navigation automatique (optionnel)
        let autoSlideInterval;
        
        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                navigateDestinations(1);
            }, 5000);
        }
        
        function stopAutoSlide() {
            clearInterval(autoSlideInterval);
        }
        
        // Démarrer le slide automatique
        startAutoSlide();
        
        // Arrêter le slide automatique au survol
        document.querySelector('.destinations-3d-container').addEventListener('mouseenter', stopAutoSlide);
        document.querySelector('.destinations-3d-container').addEventListener('mouseleave', startAutoSlide);
        
        // Navigation au clic sur les cartes
        document.querySelectorAll('.destination-card-3d').forEach((card, index) => {
            card.addEventListener('click', () => {
                if (index !== currentDestinationIndex) {
                    const direction = index > currentDestinationIndex ? 1 : -1;
                    const steps = Math.abs(index - currentDestinationIndex);
                    
                    for (let i = 0; i < steps; i++) {
                        setTimeout(() => {
                            navigateDestinations(direction);
                        }, i * 200);
                    }
                }
            });
        });
        
        // Support tactile pour mobile
        let startX = 0;
        let endX = 0;
        
        document.querySelector('.destinations-slider').addEventListener('touchstart', e => {
            startX = e.changedTouches[0].screenX;
        });
        
        document.querySelector('.destinations-slider').addEventListener('touchend', e => {
            endX = e.changedTouches[0].screenX;
            const diffX = startX - endX;
            
            if (Math.abs(diffX) > 50) {
                if (diffX > 0) {
                    navigateDestinations(1); // Swipe left -> next
                } else {
                    navigateDestinations(-1); // Swipe right -> prev
                }
            }
        });
    </script>
    
    <!-- Catégories populaires - Solution 1 avec mapping des images -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Catégories populaires</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($categories as $categorie)
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 bg-white rounded-4 shadow-sm h-100 text-center overflow-hidden">
                            <!-- Image au-dessus de la carte avec mapping -->
                            <div class="category-image-container position-relative">
                                @php
                                    // Mapping des noms de catégories aux fichiers d'images
                                    $imageMap = [
                                        'activité' => 'activite.jpg',
                                        'artisanat' => 'artisanat.jpg',
                                        'bien-être' => 'bien-etre.jpg',
                                        'excursion' => 'excursion.jpg',
                                        'guides' => 'guides.jpg',
                                        'hébergement' => 'Hébérgement.webp',                                       
                                        'restauration' => 'Restauration.jpg',                                      
                                        'transport' => 'transport.webp',
                                    ];
                                    
                                    // Chercher l'image correspondante
                                    $categorySlug = Str::slug($categorie->nom);
                                    $categoryName = strtolower(trim($categorie->nom));
                                    
                                    $imageName = null;
                                    
                                    // Vérifier d'abord le nom exact
                                    if (isset($imageMap[$categoryName])) {
                                        $imageName = $imageMap[$categoryName];
                                    } 
                                    // Puis vérifier le slug
                                    elseif (isset($imageMap[$categorySlug])) {
                                        $imageName = $imageMap[$categorySlug];
                                    }
                                    // Chercher une correspondance partielle
                                    else {
                                        foreach ($imageMap as $key => $value) {
                                            if (str_contains($categoryName, $key) || str_contains($key, $categoryName)) {
                                                $imageName = $value;
                                                break;
                                            }
                                        }
                                    }
                                    
                                    $imagePath = $imageName ? 'images/categories/' . $imageName : null;
                                @endphp
                                
                                @if($imagePath && file_exists(public_path('storage/' . $imagePath)))
                                    <img src="{{ asset('storage/' . $imagePath) }}" 
                                         class="card-img-top category-image" 
                                         alt="{{ $categorie->nom }}"
                                         loading="lazy">
                                @else
                                    <!-- Placeholder avec gradient et icône -->
                                    <div class="category-placeholder">
                                        <div class="text-center text-white">
                                            <i class="bi bi-{{ $categorie->icone ?? 'tag' }} mb-2" style="font-size: 2.5rem;"></i>
                                            <p class="mb-0 fw-bold">{{ $categorie->nom }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            
                            <div class="card-body p-4 position-relative">
                                <!-- Cercle avec icône positionné à cheval sur l'image et le corps -->
                                <div class="icon-circle bg-white text-primary rounded-circle mx-auto position-absolute top-0 start-50 translate-middle" 
                                     style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; border: 5px solid #f8f9fa;">
                                    <i class="bi bi-{{ $categorie->icone ?? 'tag' }} fs-2"></i>
                                </div>
                                
                                <!-- Titre et description décalés vers le bas pour laisser de la place à l'icône -->
                                <div class="pt-4">
                                    <h5 class="card-title fw-bold mt-3">{{ $categorie->nom }}</h5>
                                    <p class="card-text text-muted">{{ Str::limit($categorie->description, 60) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- Villes populaires avec effet 3D -->
    <div class="container-fluid mb-5 py-5" id="destinations" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%); overflow: hidden;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-white mb-4">Découvrez les destinations</h2>
                <p class="lead text-white opacity-75">Explorez les plus belles villes du Maroc</p>
            </div>
            
            <!-- Conteneur 3D avec perspective -->
            <div class="destinations-3d-container">
                <div class="destinations-slider">
                    @foreach($villesPopulaires as $index => $ville)
                        <div class="destination-card-3d {{ $index === 2 ? 'active' : '' }}" data-index="{{ $index }}">
                            <div class="destination-inner">
                                @if($ville->image && file_exists(public_path('storage/' . $ville->image)))
                                    <img src="{{ asset('storage/' . $ville->image) }}" 
                                         alt="{{ $ville->nom }}" 
                                         class="destination-bg"
                                         loading="lazy">
                                @else
                                    <div class="destination-bg-placeholder"></div>
                                @endif
                                
                                <!-- Overlay gradient -->
                                <div class="destination-overlay"></div>
                                
                                <!-- Contenu -->
                                <div class="destination-content">
                                    <div class="destination-location">{{ $ville->region ?? 'Maroc' }}</div>
                                    <h3 class="destination-title">{{ strtoupper($ville->nom) }}</h3>
                                    <div class="destination-divider"></div>
                                    <p class="destination-description">{{ Str::limit($ville->description, 80) }}</p>
                                    <a href="{{ route('services.index', ['ville' => $ville->slug]) }}" class="destination-link">
                                        Découvrir <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Navigation -->
                <button class="nav-btn nav-prev" onclick="navigateDestinations(-1)">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="nav-btn nav-next" onclick="navigateDestinations(1)">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Services populaires avec effets modernes -->
    <div class="container-fluid py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); position: relative; overflow: hidden;">
        <!-- Formes décoratives d'arrière-plan -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="opacity: 0.1;">
            <div class="position-absolute" style="top: 10%; left: -5%; width: 300px; height: 300px; background: linear-gradient(45deg, #007bff, #6610f2); border-radius: 50%; filter: blur(100px);"></div>
            <div class="position-absolute" style="bottom: 10%; right: -5%; width: 400px; height: 400px; background: linear-gradient(45deg, #28a745, #20c997); border-radius: 50%; filter: blur(120px);"></div>
        </div>
        
        <div class="container position-relative">
            <div class="text-center mb-5">
                <div class="d-inline-block position-relative">
                    <h2 class="display-5 fw-bold text-gradient mb-3 position-relative">
                        Services populaires
                        <div class="gradient-underline"></div>
                    </h2>
                </div>
                <p class="lead text-muted mb-4">Découvrez nos services les plus appréciés pour une expérience inoubliable</p>
            </div>
            
            <div class="services-grid">
                @foreach($servicesPopulaires as $index => $service)
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <div class="service-card-inner">
                            <!-- Badge premium -->
                            <div class="service-badge">
                                <i class="bi bi-star-fill"></i>
                                Populaire
                            </div>
                            
                            <!-- Image container avec effets -->
                            <div class="service-image-container">
                                @if($service->images && $service->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $service->images->first()->chemin) }}" 
                                         class="service-image" 
                                         alt="{{ $service->titre }}"
                                         loading="lazy">
                                @else
                                    <div class="service-placeholder">
                                        <div class="placeholder-content">
                                            <i class="bi bi-image"></i>
                                            <span>{{ $service->titre }}</span>
                                        </div>
                                    </div>
                                @endif
                                
                                <!-- Overlay avec gradient -->
                                <div class="service-overlay"></div>
                                
                                <!-- Bouton d'action flottant -->
                                <div class="service-action-btn">
                                    <a href="{{ route('services.show', $service->slug) }}" class="action-link">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Contenu de la carte -->
                            <div class="service-content">
                                <div class="service-category">
                                    <i class="bi bi-tag"></i>
                                    Service Premium
                                </div>
                                
                                <h5 class="service-title">{{ $service->titre }}</h5>
                                
                                <p class="service-description">{{ Str::limit($service->description, 120) }}</p>
                                
                                <!-- Métadonnées du service -->
                                <div class="service-meta">
                                    <div class="meta-item">
                                        <i class="bi bi-geo-alt"></i>
                                        <span>Maroc</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="bi bi-clock"></i>
                                        <span>Disponible</span>
                                    </div>
                                </div>
                                
                                <!-- Bouton principal -->
                                <a href="{{ route('services.show', $service->slug) }}" class="service-btn">
                                    Découvrir le service
                                    <i class="bi bi-chevron-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Bouton voir plus avec effet -->
            <div class="text-center mt-5">
                <a href="{{ route('services.index') }}" class="btn-voir-plus">
                    <span>Voir tous nos services</span>
                    <div class="btn-voir-plus-bg"></div>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    
    <style>
        /* Styles pour les services populaires modernes */
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .gradient-underline {
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            border-radius: 2px;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin: 0 auto;
            max-width: 1200px;
        }
        
        .service-card-modern {
            position: relative;
            height: 100%;
        }
        
        .service-card-inner {
            position: relative;
            height: 100%;
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .service-card-modern:hover .service-card-inner {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
        }
        
        .service-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #ffd700 0%, #ffb347 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 10;
            display: flex;
            align-items: center;
            gap: 5px;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }
        
        .service-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        
        .service-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .service-card-modern:hover .service-image {
            transform: scale(1.1);
        }
        
        .service-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .placeholder-content {
            text-align: center;
            color: white;
        }
        
        .placeholder-content i {
            font-size: 3rem;
            margin-bottom: 10px;
            display: block;
        }
        
        .service-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .service-card-modern:hover .service-overlay {
            opacity: 1;
        }
        
        .service-action-btn {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%) scale(0);
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .service-card-modern:hover .service-action-btn {
            transform: translateY(-50%) scale(1);
        }
        
        .action-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            border-radius: 50%;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .action-link:hover {
            background: white;
            color: #667eea;
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 30px;
        }
        
        .service-category {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #667eea;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .service-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        
        .service-description {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .service-meta {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .meta-item i {
            color: #667eea;
        }
        
        .service-btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .service-btn:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
        
        .service-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s;
        }
        
        .service-btn:hover::before {
            left: 100%;
        }
        
        .btn-voir-plus {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 15px;
            padding: 18px 40px;
            background: transparent;
            border: 2px solid #667eea;
            color: #667eea;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-voir-plus-bg {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: left 0.4s ease;
            z-index: -1;
        }
        
        .btn-voir-plus:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
        }
        
        .btn-voir-plus:hover .btn-voir-plus-bg {
            left: 0;
        }
        
        /* Animation d'apparition */
        [data-aos="fade-up"] {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        [data-aos="fade-up"].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .service-content {
                padding: 20px;
            }
            
            .service-title {
                font-size: 1.2rem;
            }
            
            .btn-voir-plus {
                padding: 15px 30px;
                font-size: 1rem;
            }
        }
    </style>
    
    <!-- Script AOS pour les animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script>
        // Initialiser AOS pour les animations au scroll
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    </script>
    
    <!-- Call to action pour les prestataires avec design moderne -->
    <div class="container-fluid py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
        <!-- Éléments décoratifs d'arrière-plan -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <div class="position-absolute" style="top: -10%; left: -10%; width: 400px; height: 400px; background: rgba(255,255,255,0.1); border-radius: 50%; filter: blur(100px);"></div>
            <div class="position-absolute" style="bottom: -10%; right: -10%; width: 300px; height: 300px; background: rgba(255,255,255,0.05); border-radius: 50%; filter: blur(80px);"></div>
            <div class="position-absolute" style="top: 50%; left: 80%; width: 200px; height: 200px; background: rgba(255,255,255,0.08); border-radius: 50%; filter: blur(60px);"></div>
        </div>
        
        <div class="container position-relative">
            <div class="row align-items-center">
                <!-- Contenu textuel -->
                <div class="col-lg-7 col-md-8 mb-4 mb-md-0">
                    <div class="cta-content">
                        <!-- Badge premium -->
                        <div class="cta-badge mb-4">
                            <i class="bi bi-crown-fill me-2"></i>
                            Rejoignez notre réseau premium
                        </div>
                        
                        <!-- Titre principal -->
                        <h2 class="cta-title mb-4">
                            Vous êtes prestataire de<br>
                            <span class="text-accent">services touristiques ?</span>
                        </h2>
                        
                        <!-- Description -->
                        <p class="cta-description mb-4">
                            Rejoignez notre plateforme pour mettre en valeur vos services et attirer plus de clients. 
                            Bénéficiez d'une visibilité maximale et développez votre activité.
                        </p>
                        
                        <!-- Avantages en liste -->
                        <div class="cta-benefits">
                            <div class="benefit-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Visibilité garantie auprès de milliers de visiteurs</span>
                            </div>
                            <div class="benefit-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Gestion simplifiée de vos réservations</span>
                            </div>
                            <div class="benefit-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Support client dédié 7j/7</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bouton d'action et éléments visuels -->
                <div class="col-lg-5 col-md-4 text-center">
                    <div class="cta-action-container">
                        <!-- Icône décorative -->
                        <div class="cta-icon-container mb-4">
                            <div class="cta-icon-bg"></div>
                            <i class="bi bi-briefcase cta-icon"></i>
                        </div>
                        
                        <!-- Bouton principal -->
                        <a href="{{ route('prestataire.inscription') }}" class="cta-button">
                            <span class="btn-content">
                                <i class="bi bi-person-plus me-2"></i>
                                Devenir prestataire
                            </span>
                            <div class="btn-shine"></div>
                        </a>
                        
                        <!-- Informations supplémentaires -->
                        <div class="cta-info mt-4">
                            <div class="info-stats">
                                <div class="stat-item">
                                    <span class="stat-number">500+</span>
                                    <span class="stat-label">Prestataires</span>
                                </div>
                                <div class="stat-divider"></div>
                                <div class="stat-item">
                                    <span class="stat-number">98%</span>
                                    <span class="stat-label">Satisfaction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        /* Styles pour le Call to Action moderne */
        .cta-badge {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            color: white;
            font-size: 0.9rem;
            font-weight: 600;
            backdrop-filter: blur(10px);
            animation: fadeInUp 0.6s ease-out;
        }
        
        .cta-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: white;
            line-height: 1.2;
            animation: fadeInUp 0.6s ease-out 0.2s both;
        }
        
        .text-accent {
            background: linear-gradient(45deg, #ffd700, #ffeb3b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .cta-description {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            animation: fadeInUp 0.6s ease-out 0.4s both;
        }
        
        .cta-benefits {
            display: flex;
            flex-direction: column;
            gap: 12px;
            animation: fadeInUp 0.6s ease-out 0.6s both;
        }
        
        .benefit-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            font-weight: 500;
        }
        
        .benefit-item i {
            color: #4ade80;
            font-size: 1.1rem;
        }
        
        .cta-action-container {
            animation: fadeInUp 0.6s ease-out 0.8s both;
        }
        
        .cta-icon-container {
            position: relative;
            display: inline-block;
        }
        
        .cta-icon-bg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        
        .cta-icon {
            position: relative;
            font-size: 3rem;
            color: white;
            z-index: 2;
        }
        
        .cta-button {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 18px 40px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            color: #667eea;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .btn-content {
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }
        
        .btn-shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.6s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            color: #667eea;
        }
        
        .cta-button:hover .btn-shine {
            left: 100%;
        }
        
        .cta-info {
            color: rgba(255, 255, 255, 0.9);
        }
        
        .info-stats {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            display: block;
            font-size: 1.8rem;
            font-weight: 800;
            color: #ffd700;
        }
        
        .stat-label {
            display: block;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 4px;
        }
        
        .stat-divider {
            width: 1px;
            height: 40px;
            background: rgba(255, 255, 255, 0.3);
        }
        
        /* Animations */
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
        
        @keyframes pulse {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.7;
            }
            50% {
                transform: translate(-50%, -50%) scale(1.1);
                opacity: 0.9;
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .cta-title {
                font-size: 2.2rem;
            }
            
            .cta-description {
                font-size: 1.1rem;
            }
            
            .cta-button {
                padding: 15px 30px;
                font-size: 1rem;
            }
            
            .cta-benefits {
                margin-bottom: 30px;
            }
            
            .benefit-item {
                font-size: 0.95rem;
            }
            
            .info-stats {
                flex-direction: column;
                gap: 15px;
            }
            
            .stat-divider {
                width: 40px;
                height: 1px;
            }
        }
    </style>

    <!-- Script pour améliorer les performances -->
    <script>
        // Lazy loading pour les images (pour les navigateurs qui ne supportent pas loading="lazy")
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                        }
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Animation au survol des cartes
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</x-layout>