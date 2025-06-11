<x-layout>
    <x-slot:title>À Propos de Nous - Plateforme Tourisme Maroc</x-slot>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #c41e3a;
            --secondary-color: #006233;
            --accent-color: #ff9f00;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 0;
            margin-top: -180px;
            overflow: hidden;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="0,0 1000,80 1000,100 0,100"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
        }

        .hero-content p.lead {
            text-align: justify;
            text-align-last: center;
        }

        .text-justify {
            text-align: justify;
            text-align-last: center;
        }

        .mission-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .mission-card:hover {
            transform: translateY(-5px);
        }

        .mission-card p {
            text-align: justify;
        }

        .mission-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 2rem;
        }

        .stats-section {
            background: var(--secondary-color);
            color: white;
            padding: 60px 0;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: var(--accent-color);
            display: block;
        }

        .team-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
        }

        .team-card p.small {
            text-align: justify;
        }

        .team-avatar {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            color: white;
            font-size: 3rem;
            font-weight: bold;
        }

        .values-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .value-item {
            text-align: center;
            padding: 30px 20px;
        }

        .value-item p {
            text-align: justify;
            text-align-last: center;
        }

        .value-icon {
            width: 70px;
            height: 70px;
            background: var(--accent-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.5rem;
        }

        .cta-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .cta-section p.lead {
            text-align: justify;
            text-align-last: center;
        }

        .btn-custom {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background: #e68900;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255,159,0,0.4);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            position: relative;
        }

        .section-title::after {
            content: '';
            width: 60px;
            height: 4px;
            background: var(--accent-color);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .text-primary-custom {
            color: var(--primary-color) !important;
        }

        .bg-light-custom {
            background-color: #f8f9fa !important;
        }

        .lead.text-muted {
            text-align: justify;
            text-align-last: center;
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center hero-content">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">À Propos de Notre Plateforme</h1>
                    <p class="lead mb-4">
                        Nous connectons les voyageurs avec l'authenticité du Maroc à travers une plateforme 
                        innovante dédiée aux services touristiques locaux.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <span class="badge bg-light text-dark px-3 py-2 fs-6">Innovation</span>
                        <span class="badge bg-light text-dark px-3 py-2 fs-6">Authenticité</span>
                        <span class="badge bg-light text-dark px-3 py-2 fs-6">Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title text-center">Notre Mission</h2>
                    <p class="lead text-muted">
                        Promouvoir le tourisme authentique au Maroc en créant des ponts entre 
                        les visiteurs du monde entier et les prestataires de services locaux.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="bi bi-compass"></i>
                        </div>
                        <h4 class="text-center mb-3">Découverte Authentique</h4>
                        <p class="text-center text-muted">
                            Nous facilitons la découverte de services touristiques authentiques 
                            qui reflètent la richesse culturelle et patrimoniale du Maroc.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4 class="text-center mb-3">Soutien Local</h4>
                        <p class="text-center text-muted">
                            Nous accompagnons les prestataires locaux dans leur développement 
                            digital tout en préservant l'authenticité de leurs services.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mission-card">
                        <div class="mission-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="text-center mb-3">Qualité Garantie</h4>
                        <p class="text-center text-muted">
                            Notre système de validation rigoureux assure la qualité et 
                            la fiabilité de tous les services proposés sur notre plateforme.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <p class="mb-0">Services Référencés</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <p class="mb-0">Prestataires Validés</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">15</span>
                        <p class="mb-0">Villes Couvertes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">95%</span>
                        <p class="mb-0">Satisfaction Client</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Nos Valeurs</h2>
                    <p class="lead text-muted">
                        Les principes qui guident notre action quotidienne pour promouvoir 
                        un tourisme responsable et authentique au Maroc.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h5 class="mb-3">Authenticité</h5>
                        <p class="text-muted">
                            Préserver et promouvoir l'authenticité des services touristiques marocains.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-tree"></i>
                        </div>
                        <h5 class="mb-3">Durabilité</h5>
                        <p class="text-muted">
                            Encourager un tourisme durable respectueux de l'environnement et des communautés.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-star"></i>
                        </div>
                        <h5 class="mb-3">Excellence</h5>
                        <p class="text-muted">
                            Viser l'excellence dans chaque aspect de notre plateforme et nos services.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h5 class="mb-3">Innovation</h5>
                        <p class="text-muted">
                            Utiliser la technologie pour créer des solutions innovantes pour le tourisme.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title">Notre Équipe</h2>
                    <p class="lead text-muted">
                        Une équipe passionnée et dédiée au développement du tourisme digital au Maroc.
                    </p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card p-4 text-center">
                        <div class="team-avatar mb-3">
                            H
                        </div>
                        <h5 class="mb-2">Hamza ELOUAD</h5>
                        <p class="text-primary-custom fw-semibold mb-2">Développeur Full-Stack</p>
                        <p class="text-muted small">
                            Spécialisé en Laravel et React, passionné par les solutions web innovantes 
                            pour le secteur touristique.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card p-4 text-center">
                        <div class="team-avatar mb-3">
                            A
                        </div>
                        <h5 class="mb-2">ADAM AIT EL CHGUER</h5>
                        <p class="text-primary-custom fw-semibold mb-2">Développeur Full-Stack</p>
                        <p class="text-muted small">
                            Expert en développement web moderne, contribue activement à l'architecture 
                            et aux fonctionnalités avancées de la plateforme.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card p-4 text-center">
                        <div class="team-avatar mb-3">
                            M
                        </div>
                        <h5 class="mb-2">M. Lachhab Youssef</h5>
                        <p class="text-primary-custom fw-semibold mb-2">Encadrant Technique</p>
                        <p class="text-muted small">
                            Expert en développement web et mentor technique, guide et supervise 
                            l'évolution de la plateforme.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold mb-4">Rejoignez-nous dans cette aventure</h2>
                    <p class="lead mb-4">
                        Que vous soyez un visiteur en quête d'authenticité ou un prestataire 
                        souhaitant partager votre passion, notre plateforme vous attend.
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="{{ route('services.index') }}" class="btn btn-custom btn-lg">
                            <i class="bi bi-compass me-2"></i>
                            Découvrir les Services
                        </a>
                        <a href="{{ route('prestataire.inscription') }}" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-person-plus me-2"></i>
                            Devenir Prestataire
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation des statistiques au scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        const finalValue = parseInt(stat.textContent);
                        animateNumber(stat, 0, finalValue, 2000);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }

        function animateNumber(element, start, end, duration) {
            const startTime = performance.now();
            const isPercentage = element.textContent.includes('%');
            const isPlus = element.textContent.includes('+');
            
            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                const current = Math.floor(progress * (end - start) + start);
                let displayValue = current.toString();
                
                if (isPlus && current > 0) displayValue += '+';
                if (isPercentage) displayValue += '%';
                
                element.textContent = displayValue;
                
                if (progress < 1) {
                    requestAnimationFrame(update);
                }
            }
            
            requestAnimationFrame(update);
        }

        // Animation des cartes au hover
        document.querySelectorAll('.mission-card, .team-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</x-layout>