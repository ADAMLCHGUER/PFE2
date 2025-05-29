<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Plateforme Tourisme Maroc' }}</title>
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Bootstrap CSS et Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    @stack('styles')
    
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            color: var(--dark-color);
        }
        
        /* Style personnalisé pour la navbar - Style transparent */
        .navbar {
            background: transparent !important;
            box-shadow: none !important;
            padding: 1rem 0 !important;
            border-bottom: none;
            position: absolute;
            width: 100%;
            z-index: 1030;
            transition: background-color 0.3s ease;
        }

        /* Effet de fond au défilement */
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
        }

        /* Couleur du texte et des icônes */
        .navbar-dark .navbar-nav .nav-link,
        .navbar-dark .navbar-brand {
            color: white !important;
            font-weight: 500;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        .navbar-dark .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.3);
        }

        /* Style du logo */
        .lg {
            width: 50px;
            height: 50px;
            margin-right: 15px;
            filter: brightness(1.1) contrast(1.1);
        }

        /* Style de la marque */
        .navbar-brand {
            font-weight: 600 !important;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
        }

        /* Style des liens de navigation */
        .nav-link {
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.8px;
            padding: 0.5rem 1rem !important;
            transition: color 0.2s ease, transform 0.2s ease;
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: white;
            transform: translateX(-50%);
            transition: width 0.3s ease;
        }

        .nav-link:hover:after, .nav-link.active:after {
            width: 60%;
        }

        .nav-link:hover, .nav-link.active {
            color: white !important;
            background-color: transparent !important;
            transform: none;
        }

        /* Style des boutons dans la navbar */
        .navbar .btn-outline-light {
            border-width: 2px;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            padding: 0.5rem 1.2rem;
        }

        .navbar .btn-outline-light:hover {
            background-color: white !important;
            color: #333 !important;
        }

        .navbar .btn-primary {
            background-color: #0e0d0e !important; 
            border-color: #090909 !important;
            color: white !important;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            font-weight: 500;
            padding: 0.5rem 1.2rem;
            box-shadow: 0 2px 10px rgba(14, 13, 14, 0.3);
        }

        .navbar .btn-primary:hover {
            background-color: #d01528 !important;
            border-color: #d01528 !important;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(208, 21, 40, 0.4);
        }

        /* Ajustements pour la navbar collapsée */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: rgba(0, 0, 0, 0.8);
                padding: 1rem;
                border-radius: 8px;
                margin-top: 0.5rem;
            }
            
            .navbar-nav {
                padding-top: 0.5rem;
            }
            
            .nav-link:after {
                display: none;
            }
        }

        /* Style pour le dropdown */
        .dropdown-menu {
            background-color: rgba(0, 0, 0, 0.8);
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        .dropdown-item {
            color: white;
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #e81932;
        }

        /* Ajustements responsives */
        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.2rem !important;
                padding-left: 1.2rem !important;
            }
            
            .navbar .container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        /* Style pour les icônes dans la navbar */
        .navbar .bi {
            font-size: 1rem;
        }

        /* Style pour gérer le changement de couleur au défilement */
        .navbar.scrolled .navbar-dark .navbar-nav .nav-link,
        .navbar.scrolled .navbar-dark .navbar-brand {
            color: #333 !important;
            text-shadow: none;
        }

        .navbar.scrolled .nav-link:after {
            background-color: #e81932;
        }

        .navbar.scrolled .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }

        .navbar.scrolled .navbar-dark .navbar-toggler {
            border-color: rgba(0, 0, 0, 0.2);
        }
        
        main {
            flex: 1;
            padding-top: 70px;
        }
        
        .alert {
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        
        .btn-outline-primary {
            color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        /* Style pour intégrer une vidéo en arrière-plan */
        .hero-section {
            position: relative;
            padding: 5rem 0;
            color: white;
            margin-bottom: 3rem;
            overflow: hidden;
        }
        
        /* Style pour la vidéo d'arrière-plan */
        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .video-background video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
            object-fit: cover;
        }
        
        /* Overlay pour assurer la lisibilité du texte sur la vidéo */
        .video-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        /* Pour les appareils qui ne prennent pas en charge l'autoplay ou la vidéo */
        .video-fallback {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/images/morocco-hero.jpg') no-repeat center center;
            background-size: cover;
            z-index: -2;
        }
        
        /* Container avec vidéo en arrière-plan */
        .container-video {
            position: relative;
            width: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .container-video .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        /* Footer moderne avec image d'arrière-plan */
        .modern-footer {
            position: relative;
            padding: 4rem 0 2rem;
            color: white;
            overflow: hidden;
            margin-top: 0;
            /* Image d'arrière-plan avec fallback */
            background: linear-gradient(
                135deg,
                rgba(0, 0, 0, 0.85) 0%,
                rgba(0, 0, 0, 0.7) 50%,
                rgba(0, 0, 0, 0.85) 100%
            ), url('storage/images/bg1.jpeg') ;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        /* Fallback pour les navigateurs qui ne supportent pas background-attachment: fixed */
        @media (max-width: 768px) {
            .modern-footer {
                background-attachment: scroll;
            }
        }
        
        /* Brand section */
        .footer-brand {
            padding-right: 2rem;
        }
        
        .brand-logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .footer-logo {
            width: 60px;
            height: 60px;
            filter: brightness(1.2) contrast(1.1);
        }
        
        .brand-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            color: white;
        }
        
        .brand-description {
            font-size: 1rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
        }
        
        /* Réseaux sociaux */
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .social-link:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Sections du footer */
        .footer-section {
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            color: white;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, #ffd700, #ffeb3b);
        }
        
        /* Liens du footer */
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
        }
        
        .footer-links a:hover {
            color: #ffd700;
            transform: translateX(5px);
        }
        
        .footer-links a::before {
            content: '';
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 2px;
            background: #ffd700;
            transition: width 0.3s ease;
        }
        
        .footer-links a:hover::before {
            width: 8px;
        }
        
        /* Informations de contact */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .contact-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: #ffd700;
            font-size: 1.1rem;
            flex-shrink: 0;
            backdrop-filter: blur(10px);
        }
        
        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }
        
        .contact-details span,
        .contact-details a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }
        
        .contact-details a:hover {
            color: #ffd700;
        }
        
        /* Ligne de séparation */
        .footer-divider {
            height: 1px;
            background: linear-gradient(
                90deg,
                transparent 0%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 100%
            );
            margin: 2rem 0;
        }
        
        /* Bottom du footer */
        .footer-bottom {
            padding-top: 1rem;
        }
        
        .copyright {
            color: rgba(255, 255, 255, 0.8);
            margin: 0;
            font-size: 0.9rem;
        }
        
        .legal-links {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .legal-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .legal-links a:hover {
            color: #ffd700;
        }
        
        .separator {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.8rem;
        }
        
        /* Back to top button */
        .back-to-top {
            width: 50px;
            height: 50px;
            display: none !important;
            z-index: 1040;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        
        .back-to-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .modern-footer {
                padding: 3rem 0 1.5rem;
            }
            
            .footer-brand {
                padding-right: 0;
                margin-bottom: 2rem;
            }
            
            .brand-logo-container {
                justify-content: center;
                text-align: center;
            }
            
            .brand-description {
                text-align: center;
            }
            
            .social-links {
                justify-content: center;
            }
            
            .footer-section {
                text-align: center;
                margin-bottom: 2rem;
            }
            
            .section-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .contact-info {
                align-items: center;
            }
            
            .contact-item {
                justify-content: center;
                text-align: center;
            }
            
            .legal-links {
                justify-content: center;
                margin-top: 1rem;
            }
            
            .copyright {
                text-align: center;
            }
        }
        
        @media (max-width: 576px) {
            .brand-logo-container {
                flex-direction: column;
                gap: 10px;
            }
            
            .social-links {
                gap: 10px;
            }
            
            .social-link {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .legal-links {
                flex-direction: column;
                gap: 5px;
            }
            
            .separator {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('accueil') }}">
                    <img src="{{ asset('storage/images/logo.png') }}" class="lg" alt="Logo Tourisme Maroc"> Tourisme Maroc
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('accueil') ? 'active' : '' }}" href="{{ route('accueil') }}">
                                <i class="bi bi-house-door me-1"></i> Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services.index') }}">
                                <i class="bi bi-gear me-1"></i> Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#destinations">
                                <i class="bi bi-map me-1"></i> Destinations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experiences">
                                <i class="bi bi-star me-1"></i> Expériences
                            </a>
                        </li>
                    </ul>
                    
                    <ul class="navbar-nav ms-auto">
                        @if(Session::has('prestataire_id'))
                            <!-- Utilisateur connecté -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle me-1"></i>
                                    {{ Session::get('prestataire_nom') }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ route('prestataire.tableau') }}"><i class="bi bi-speedometer2 me-2"></i> Tableau de bord</a></li>
                                    <li><a class="dropdown-item" href="{{ route('prestataire.service.edit') }}"><i class="bi bi-shop me-2"></i> Mon service</a></li>
                                    <li><a class="dropdown-item" href="{{ route('prestataire.statistiques') }}"><i class="bi bi-graph-up me-2"></i> Statistiques</a></li>
                                    <li><a class="dropdown-item" href="{{ route('prestataire.rapports.index') }}"><i class="bi bi-file-text me-2"></i> Rapports</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="{{ route('prestataire.deconnexion') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i> Déconnexion</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <!-- Utilisateur non connecté -->
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-light me-2 {{ request()->routeIs('prestataire.connexion') ? 'active' : '' }}" href="{{ route('prestataire.connexion') }}">
                                    <i class="bi bi-box-arrow-in-right me-1"></i> Connexion
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary {{ request()->routeIs('prestataire.inscription') ? 'active' : '' }}" href="{{ route('prestataire.inscription') }}">
                                    <i class="bi bi-person-plus me-1"></i> Inscription
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @if(session('success'))
            <div class="container mt-4 animate__animated animate__fadeInDown">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="container mt-4 animate__animated animate__fadeInDown">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="container mt-4 animate__animated animate__fadeInDown">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-octagon-fill me-2"></i>
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        {{ $slot }}
    </main>

    <!-- Footer moderne avec image d'arrière-plan -->
    <footer class="modern-footer">
        <div class="container position-relative">
            <!-- Contenu principal du footer -->
            <div class="row g-4 mb-5">
                <!-- Section principale avec logo -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <div class="brand-logo-container mb-4">
                            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="footer-logo">
                            <h4 class="brand-title">Tourisme Maroc</h4>
                        </div>
                        <p class="brand-description">
                            Découvrez les merveilles du Maroc à travers nos services touristiques exceptionnels et nos expériences authentiques. Votre aventure marocaine commence ici.
                        </p>
                        
                        <!-- Réseaux sociaux -->
                        <div class="social-links">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="YouTube">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation rapide -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h5 class="section-title">Navigation</h5>
                        <ul class="footer-links">
                            <li><a href="{{ route('accueil') }}">Accueil</a></li>
                            <li><a href="{{ route('services.index') }}">Services</a></li>
                            <li><a href="#destinations">Destinations</a></li>
                            <li><a href="#experiences">Expériences</a></li>
                            <li><a href="{{ route('prestataire.inscription') }}">Devenir prestataire</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Liens utiles -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-section">
                        <h5 class="section-title">Liens utiles</h5>
                        <ul class="footer-links">
                            <li><a href="{{ route('prestataire.connexion') }}">Connexion</a></li>
                            <li><a href="#">À propos</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Booking</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Informations de contact -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">
                        <h5 class="section-title">Contact</h5>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="contact-details">
                                    <span>123 Avenue Mohammed V</span>
                                    <span>Marrakech, Maroc</span>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="contact-details">
                                    <a href="tel:+212123456789">+212 123 456 789</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div class="contact-details">
                                    <a href="mailto:contact@tourisme-maroc.com">contact@tourisme-maroc.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Ligne de séparation -->
            <div class="footer-divider"></div>
            
            <!-- Copyright et liens légaux -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright">
                            &copy; {{ date('Y') }} Plateforme Tourisme Maroc. Tous droits réservés.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="legal-links">
                            <a href="#">Politique de confidentialité</a>
                            <span class="separator">•</span>
                            <a href="#">Conditions d'utilisation</a>
                            <span class="separator">•</span>
                            <a href="#">Mentions légales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary btn-lg back-to-top position-fixed bottom-0 end-0 m-4 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; display: none !important;" role="button" aria-label="Retour en haut">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Back to top button
        window.addEventListener('scroll', function() {
            var backToTopButton = document.querySelector('.back-to-top');
            if (backToTopButton) {
                if (window.pageYOffset > 300) {
                    backToTopButton.style.display = 'flex';
                } else {
                    backToTopButton.style.display = 'none';
                }
            }
        });
        
        var backToTopBtn = document.querySelector('.back-to-top');
        if (backToTopBtn) {
            backToTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        }
        
        // Animation for alerts
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    if (alert && alert.classList) {
                        alert.classList.add('animate__fadeOut');
                        setTimeout(() => {
                            if (alert && alert.parentNode) {
                                alert.remove();
                            }
                        }, 1000);
                    }
                }, 5000);
            });
        });
        
        // Script pour gérer le changement de style de la navbar au défilement
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');
            
            // Fonction pour vérifier la position de défilement et ajouter/supprimer la classe
            function checkScroll() {
                if (navbar) {
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                }
            }
            
            // Vérifie au chargement de la page
            checkScroll();
            
            // Ajoute l'événement scroll
            window.addEventListener('scroll', checkScroll);
        });
    </script>
    
    @stack('scripts')
    
</body>
</html>