<x-layout>
    <x-slot:title>Services touristiques - Plateforme Tourisme Maroc</x-slot>
    <style>
        /* ====== CSS ULTRA-MODERNE 2025 - LISTING SERVICES TOURISTIQUES ====== */

/* Variables CSS futuristes */
:root {
    /* Gradients 2025 */
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    --info-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
    --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    
    /* Couleurs tendance 2025 */
    --electric-blue: #0066ff;
    --neon-pink: #ff0080;
    --cyber-mint: #00ffa1;
    --plasma-purple: #8000ff;
    --digital-orange: #ff6b35;
    
    /* Nuances neutres modernes */
    --dark-950: #030712;
    --dark-900: #111827;
    --dark-800: #1f2937;
    --dark-700: #374151;
    --gray-600: #4b5563;
    --gray-500: #6b7280;
    --gray-400: #9ca3af;
    --gray-300: #d1d5db;
    --gray-200: #e5e7eb;
    --gray-100: #f3f4f6;
    --gray-50: #f9fafb;
    
    /* Effets et ombres futuristes */
    --shadow-glow: 0 0 50px rgba(102, 126, 234, 0.3);
    --shadow-float: 0 25px 80px rgba(0, 0, 0, 0.12);
    --shadow-intense: 0 35px 100px rgba(0, 0, 0, 0.15);
    --shadow-neon: 0 0 30px rgba(255, 0, 128, 0.4);
    --shadow-card: 0 8px 40px rgba(0, 0, 0, 0.08);
    
    /* Rayons et espacements */
    --radius-xs: 8px;
    --radius-sm: 12px;
    --radius-md: 16px;
    --radius-lg: 20px;
    --radius-xl: 24px;
    --radius-2xl: 32px;
    --radius-3xl: 48px;
    
    /* Animations et transitions */
    --transition-smooth: cubic-bezier(0.4, 0, 0.2, 1);
    --transition-bounce: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    --transition-elastic: cubic-bezier(0.175, 0.885, 0.32, 1.275);
    --duration-fast: 0.2s;
    --duration-normal: 0.3s;
    --duration-slow: 0.5s;
}

/* Reset et base */
* {
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    line-height: 1.6;
    color: var(--dark-800);
    position: relative;
    overflow-x: hidden;
}

/* Arrière-plan animé */
body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        radial-gradient(circle at 25% 25%, rgba(102, 126, 234, 0.15) 0%, transparent 70%),
        radial-gradient(circle at 75% 75%, rgba(118, 75, 162, 0.15) 0%, transparent 70%),
        radial-gradient(circle at 50% 10%, rgba(255, 0, 128, 0.1) 0%, transparent 70%);
    animation: backgroundPulse 15s ease-in-out infinite;
    pointer-events: none;
    z-index: -1;
}

@keyframes backgroundPulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.8; transform: scale(1.1); }
}

/* Container */
.container {
    max-width: 1400px;
    position: relative;
    z-index: 1;
}

/* Header section moderne */
.row.mb-4 {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-2xl);
    padding: 3rem 2rem;
    margin-bottom: 3rem !important;
    box-shadow: var(--shadow-float);
    animation: slideInDown 0.8s var(--transition-elastic);
    position: relative;
    overflow: hidden;
}

.row.mb-4::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--primary-gradient);
}

.row.mb-4 h1 {
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
    font-size: 3rem;
    line-height: 1.2;
    margin-bottom: 1rem;
    animation: textGlow 3s ease-in-out infinite alternate;
}

@keyframes textGlow {
    from { filter: brightness(1); }
    to { filter: brightness(1.3); }
}

.lead {
    color: var(--gray-600);
    font-size: 1.25rem;
    font-weight: 400;
    margin-bottom: 0;
}

/* Sidebar filtres futuriste */
.col-md-3 .card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-card);
    transition: all var(--duration-normal) var(--transition-smooth);
    animation: slideInLeft 0.8s var(--transition-elastic) 0.2s both;
    overflow: hidden;
}

.col-md-3 .card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-float);
}

.card-header.bg-primary {
    background: var(--primary-gradient) !important;
    border-radius: var(--radius-2xl) var(--radius-2xl) 0 0 !important;
    border: none !important;
    padding: 1.5rem 2rem;
    position: relative;
}

.card-header h5 {
    font-weight: 700;
    font-size: 1.25rem;
    margin-bottom: 0;
    color: white;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.card-body {
    padding: 2rem;
}

/* Form elements futuristes */
.form-label {
    font-weight: 600;
    color: var(--dark-700);
    margin-bottom: 0.75rem;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.form-select,
.form-control {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: var(--radius-md);
    padding: 0.875rem 1rem;
    font-weight: 500;
    transition: all var(--duration-normal) var(--transition-smooth);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.form-select:focus,
.form-control:focus {
    background: rgba(255, 255, 255, 0.95);
    border-color: var(--electric-blue);
    box-shadow: 0 0 0 4px rgba(0, 102, 255, 0.1), 0 4px 20px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}

/* Boutons modernes */
.btn {
    font-weight: 600;
    padding: 0.875rem 1.5rem;
    border-radius: var(--radius-lg);
    border: none;
    transition: all var(--duration-normal) var(--transition-smooth);
    position: relative;
    overflow: hidden;
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
    box-shadow: 0 4px 20px rgba(102, 126, 234, 0.3);
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(102, 126, 234, 0.4);
    color: white;
}

.btn-outline-secondary {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border: 2px solid var(--gray-300);
    color: var(--gray-600);
}

.btn-outline-secondary:hover {
    background: var(--gray-600);
    border-color: var(--gray-600);
    color: white;
    transform: translateY(-3px);
}

/* Alerte moderne */
.alert {
    background: rgba(75, 192, 192, 0.1);
    border: 1px solid rgba(75, 192, 192, 0.2);
    border-radius: var(--radius-lg);
    padding: 1.5rem;
    color: var(--info-gradient);
    backdrop-filter: blur(10px);
    animation: fadeInUp 0.6s var(--transition-smooth);
}

.alert-info {
    background: rgba(59, 130, 246, 0.1);
    border-color: rgba(59, 130, 246, 0.2);
    color: var(--electric-blue);
}

/* Cartes de services révolutionnaires */
.col-md-6 .card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    border-radius: var(--radius-2xl);
    transition: all var(--duration-slow) var(--transition-smooth);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.8s var(--transition-elastic);
}

.col-md-6 .card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--secondary-gradient);
    opacity: 0;
    transition: opacity var(--duration-normal) ease;
}

.hover-shadow:hover {
    transform: translateY(-12px) !important;
    box-shadow: var(--shadow-intense) !important;
    transition: all var(--duration-slow) var(--transition-smooth) !important;
}

.hover-shadow:hover::before {
    opacity: 1;
}

/* Images avec effets */
.card-img-top {
    border-radius: var(--radius-2xl) var(--radius-2xl) 0 0;
    transition: all var(--duration-slow) var(--transition-smooth);
    object-fit: cover;
    height: 250px;
}

.hover-shadow:hover .card-img-top {
    transform: scale(1.05);
}

/* Badge position et style */
.position-absolute.top-0.end-0 {
    top: 1rem !important;
    right: 1rem !important;
}

.badge.bg-primary {
    background: var(--primary-gradient) !important;
    color: white;
    font-weight: 600;
    padding: 0.6rem 1.2rem;
    border-radius: var(--radius-lg);
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    transition: all var(--duration-normal) var(--transition-bounce);
}

.card:hover .badge {
    transform: scale(1.1) rotate(-2deg) !important;
    box-shadow: 0 6px 25px rgba(102, 126, 234, 0.4);
}

/* Placeholder image moderne */
.bg-light {
    background: linear-gradient(135deg, var(--gray-100), var(--gray-200)) !important;
    position: relative;
}

.bg-light::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent 40%, rgba(255, 255, 255, 0.3) 50%, transparent 60%);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* Card body et contenu */
.card-body {
    padding: 2rem;
    display: flex;
    flex-direction: column;
}

.card-title {
    font-weight: 700;
    font-size: 1.25rem;
    color: var(--dark-800);
    margin-bottom: 1rem;
    line-height: 1.3;
}

.card-text {
    color: var(--gray-600);
    line-height: 1.6;
    flex-grow: 1;
}

/* Métadonnées service */
.d-flex.justify-content-between {
    background: rgba(0, 0, 0, 0.02);
    padding: 1rem;
    border-radius: var(--radius-md);
    margin: 1rem 0;
}

.text-muted.small {
    font-weight: 500;
    color: var(--gray-500) !important;
}

/* Bouton détails */
.btn-outline-primary {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border: 2px solid var(--electric-blue);
    color: var(--electric-blue);
    font-weight: 600;
    margin-top: auto;
}

.btn-outline-primary:hover {
    background: var(--electric-blue);
    border-color: var(--electric-blue);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 102, 255, 0.3);
}

/* Pagination futuriste */
.pagination {
    justify-content: center;
    gap: 0.5rem;
}

.page-link {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: var(--electric-blue);
    padding: 0.75rem 1rem;
    border-radius: var(--radius-md);
    font-weight: 600;
    transition: all var(--duration-normal) var(--transition-smooth);
}

.page-link:hover {
    background: var(--electric-blue);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 102, 255, 0.3);
}

.page-item.active .page-link {
    background: var(--primary-gradient);
    border-color: transparent;
    color: white;
    box-shadow: 0 4px 20px rgba(102, 126, 234, 0.4);
}

/* Animations d'entrée échelonnées */
.col-md-6:nth-child(1) .card { animation-delay: 0.1s; }
.col-md-6:nth-child(2) .card { animation-delay: 0.2s; }
.col-md-6:nth-child(3) .card { animation-delay: 0.3s; }
.col-md-6:nth-child(4) .card { animation-delay: 0.4s; }
.col-md-6:nth-child(5) .card { animation-delay: 0.5s; }
.col-md-6:nth-child(6) .card { animation-delay: 0.6s; }

/* Animations keyframes */
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

/* Responsive design 2025 */
@media (max-width: 1200px) {
    .row.mb-4 h1 { font-size: 2.5rem; }
    .card-img-top { height: 220px; }
}

@media (max-width: 992px) {
    .col-md-3 { order: 2; }
    .col-md-9 { order: 1; }
    .row.mb-4 { padding: 2rem 1.5rem; }
    .row.mb-4 h1 { font-size: 2.25rem; }
}

@media (max-width: 768px) {
    .container { padding: 1rem; }
    .row.mb-4 { padding: 1.5rem 1rem; }
    .row.mb-4 h1 { font-size: 2rem; }
    .card-body { padding: 1.5rem; }
    .card-img-top { height: 200px; }
    .btn { padding: 0.75rem 1.25rem; }
}

@media (max-width: 576px) {
    .row.mb-4 h1 { font-size: 1.75rem; }
    .lead { font-size: 1.1rem; }
    .card-img-top { height: 180px; }
}

/* Effets de particules flottantes */
.container::after {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
        radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
        radial-gradient(circle at 40% 40%, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 150px 150px, 200px 200px, 100px 100px;
    animation: floatingParticles 25s linear infinite;
    pointer-events: none;
    z-index: -1;
}

@keyframes floatingParticles {
    0% { transform: translateY(0) rotate(0deg); opacity: 1; }
    100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
}

/* Scrollbar personnalisée */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
}

::-webkit-scrollbar-thumb {
    background: var(--primary-gradient);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: var(--secondary-gradient);
}

/* Loading states pour les images */
.card-img-top[src=""] {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}
    </style>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-md-8">
                <h1 class="mb-3">Découvrez nos services touristiques</h1>
                <p class="lead">Explorez une sélection de services de qualité pour rendre votre expérience au Maroc inoubliable.</p>
            </div>
        </div>
        
        <div class="row">
            <!-- Filtres -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Filtres</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('services.index') }}" method="GET">
                            <div class="mb-3">
                                <label class="form-label">Catégorie</label>
                                <select name="categorie" class="form-select">
                                    <option value="">Toutes les catégories</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->slug }}" {{ request('categorie') == $categorie->slug ? 'selected' : '' }}>
                                            {{ $categorie->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ville</label>
                                <select name="ville" class="form-select">
                                    <option value="">Toutes les villes</option>
                                    @foreach($villes as $ville)
                                        <option value="{{ $ville->slug }}" {{ request('ville') == $ville->slug ? 'selected' : '' }}>
                                            {{ $ville->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Recherche</label>
                                <input type="text" name="q" class="form-control" placeholder="Mots-clés..." value="{{ request('q') }}">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-search me-2"></i> Filtrer
                                </button>
                                <a href="{{ route('services.index') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-x-circle me-2"></i> Réinitialiser
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Liste des services -->
            <div class="col-md-9">
                @if($services->isEmpty())
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle me-2"></i> Aucun service ne correspond à votre recherche.
                    </div>
                @else
                    <div class="mb-3">
                        <p class="text-muted">{{ $services->total() }} résultat(s) trouvé(s)</p>
                    </div>
                    
                    <div class="row">
                        @foreach($services as $service)
                            <div class="col-md-6 mb-4">
                                <div class="card h-100 shadow-sm hover-shadow border-0">
                                    <div class="position-relative">
                                        @if($service->images && $service->images->isNotEmpty())
                                            @php 
                                                $imagePrincipale = $service->images->where('principale', true)->first();
                                                if (!$imagePrincipale) {
                                                    $imagePrincipale = $service->images->first();
                                                }
                                            @endphp
                                            <img src="{{ asset('storage/' . $imagePrincipale->chemin) }}" 
                                                 class="card-img-top" 
                                                 alt="{{ $service->titre }}"
                                                 style="height: 200px; object-fit: cover;">
                                        @else
                                            <div class="bg-light text-center py-5">
                                                <i class="bi bi-image text-secondary" style="font-size: 3rem;"></i>
                                            </div>
                                        @endif
                                        
                                        <div class="position-absolute top-0 end-0 p-2">
                                            <span class="badge bg-primary rounded-pill px-3 py-2 shadow-sm">
                                                {{ $service->categorie->nom }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $service->titre }}</h5>
                                        <p class="card-text text-muted mb-3">{{ Str::limit($service->description, 100) }}</p>
                                        
                                        <div class="d-flex justify-content-between mt-auto">
                                            <div>
                                                <i class="bi bi-geo-alt text-secondary me-1"></i>
                                                <span class="text-muted small">{{ $service->ville->nom }}</span>
                                            </div>
                                            <div>
                                                <i class="bi bi-building text-secondary me-1"></i>
                                                <span class="text-muted small">{{ $service->prestataire->nom_entreprise }}</span>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="d-grid">
                                            <a href="{{ route('services.show', $service->slug) }}"
                                               class="btn btn-outline-primary">
                                                <i class="bi bi-eye me-2"></i> Voir les détails
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                        {{ $services->withQueryString()->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <style>
        .hover-shadow:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
            transition: all 0.3s ease;
        }
        
        .badge {
            transition: all 0.3s ease;
        }
        
        .card:hover .badge {
            transform: scale(1.05);
        }
    </style>
</x-layout>