<x-layout>
    <x-slot:title>Statistiques - Plateforme Tourisme Maroc</x-slot>
    <style>
        /* Variables CSS modernes */
:root {
    --primary-color: #2563eb;
    --primary-light: #dbeafe;
    --secondary-color: #64748b;
    --success-color: #10b981;
    --warning-color: #f59e0b;
    --danger-color: #ef4444;
    --dark-color: #1e293b;
    --light-color: #f8fafc;
    --border-color: #e2e8f0;
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-success: linear-gradient(135deg, #a7f3d0 0%, #10b981 100%);
    --gradient-warning: linear-gradient(135deg, #fde68a 0%, #f59e0b 100%);
}

/* Arrière-plan moderne */
body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    line-height: 1.6;
}

/* Container principal */
.container {
    max-width: 1200px;
}

/* Header moderne */
.container > .d-flex.justify-content-between.align-items-center.mb-4 {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem !important;
    box-shadow: var(--shadow-xl);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.container h1 {
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
    font-size: 2.5rem;
    margin-bottom: 0;
}

/* Bouton moderne */
.btn-outline-primary {
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: var(--primary-color);
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    font-weight: 500;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.btn-outline-primary:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
    color: var(--primary-color);
    border-color: rgba(255, 255, 255, 0.3);
}

/* Cartes modernes */
.card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(15px);
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: var(--shadow-xl);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
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
    background: var(--gradient-primary);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl), 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.card:hover::before {
    opacity: 1;
}

/* Card headers */
.card-header {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.4) 100%);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    padding: 1.5rem 2rem;
    border-radius: 24px 24px 0 0 !important;
}

.card-header h5 {
    font-weight: 700;
    color: var(--dark-color);
    margin-bottom: 0;
}

/* Card body */
.card-body {
    padding: 2rem;
}

/* Titres des cartes */
.card-title {
    color: var(--secondary-color);
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
}

/* Grands nombres de statistiques */
.display-4 {
    font-size: 3rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: 0.5rem;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Alternance de couleurs pour les cartes */
.row .col-md-6:nth-child(2) .display-4 {
    background: var(--gradient-success);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Descriptions */
.text-muted {
    color: var(--secondary-color) !important;
    font-size: 0.875rem;
    font-weight: 500;
}

/* Tableau moderne */
.table {
    background: transparent;
    border-collapse: separate;
    border-spacing: 0;
}

.table thead th {
    background: rgba(37, 99, 235, 0.1);
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem 1.5rem;
    border: none;
    position: relative;
}

.table thead th:first-child {
    border-radius: 12px 0 0 12px;
}

.table thead th:last-child {
    border-radius: 0 12px 12px 0;
}

.table tbody td {
    padding: 1rem 1.5rem;
    border: none;
    border-bottom: 1px solid rgba(226, 232, 240, 0.5);
    vertical-align: middle;
}

.table tbody tr:hover {
    background: rgba(37, 99, 235, 0.05);
}

/* Progress bar moderne */
.progress {
    height: 8px;
    background: rgba(226, 232, 240, 0.3);
    border-radius: 50px;
    overflow: hidden;
    position: relative;
}

.progress-bar {
    background: var(--gradient-primary);
    border-radius: 50px;
    transition: width 0.6s ease;
    position: relative;
    overflow: hidden;
    font-size: 0.75rem;
    font-weight: 600;
}

.progress-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: linear-gradient(45deg, transparent 40%, rgba(255, 255, 255, 0.3) 50%, transparent 60%);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* Alertes modernes */
.alert {
    background: rgba(59, 130, 246, 0.1);
    border: 1px solid rgba(59, 130, 246, 0.2);
    border-radius: 16px;
    padding: 1.5rem;
    color: var(--primary-color);
    font-weight: 500;
}

.alert-info {
    background: rgba(59, 130, 246, 0.1);
    border-color: rgba(59, 130, 246, 0.2);
    color: var(--primary-color);
}

/* Animations d'entrée */
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

.card {
    animation: fadeInUp 0.6s ease-out forwards;
}

.row .col-md-6:nth-child(1) .card { animation-delay: 0.1s; }
.row .col-md-6:nth-child(2) .card { animation-delay: 0.2s; }
.card.mb-4 { animation-delay: 0.3s; }
.card:last-child { animation-delay: 0.4s; }

/* Amélioration du canvas pour le graphique */
#visitesChart {
    border-radius: 12px;
}

/* Responsive design */
@media (max-width: 768px) {
    .container > .d-flex.justify-content-between.align-items-center.mb-4 {
        padding: 1.5rem;
        margin-bottom: 1.5rem !important;
        flex-direction: column;
        align-items: stretch !important;
        text-align: center;
    }

    .container h1 {
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .card {
        margin-bottom: 1rem;
    }

    .card-body {
        padding: 1.5rem;
    }

    .display-4 {
        font-size: 2.5rem;
    }

    .btn-outline-primary {
        margin-top: 1rem;
        align-self: center;
        width: fit-content;
    }
}

/* Amélioration des espacements */
.mb-4 {
    margin-bottom: 2rem !important;
}

.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}
    </style>
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Statistiques de votre service</h1>
            <a href="{{ route('prestataire.tableau') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left me-2"></i> Retour au tableau de bord
            </a>
        </div>
        
        <!-- Cartes de résumé -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Visites totales</h5>
                        <p class="display-4">{{ $totalVisites }}</p>
                        <p class="text-muted mb-0">Nombre total de visites sur votre page</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Visiteurs uniques</h5>
                        <p class="display-4">{{ $visitesUniques }}</p>
                        <p class="text-muted mb-0">Basé sur les adresses IP uniques</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Graphique des visites mensuelles -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Visites par mois (12 derniers mois)</h5>
            </div>
            <div class="card-body">
                @if(count($mois) > 0)
                    <canvas id="visitesChart" height="300"></canvas>
                @else
                    <div class="alert alert-info mb-0">
                        Pas assez de données pour afficher le graphique. Les statistiques seront disponibles dès que vous aurez reçu des visites.
                    </div>
                @endif
            </div>
        </div>
        
        <!-- Sources de trafic -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Sources de trafic</h5>
            </div>
            <div class="card-body">
                @if($sources->count() > 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Source</th>
                                    <th>Visites</th>
                                    <th>Pourcentage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sources as $source)
                                    <tr>
                                        <td>{{ $source['source'] }}</td>
                                        <td>{{ $source['count'] }}</td>
                                        <td>
                                            @php
                                                $percentage = $totalVisites > 0 ? round(($source['count'] / $totalVisites) * 100, 1) : 0;
                                            @endphp
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $percentage }}%;" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $percentage }}%</div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="alert alert-info mb-0">
                        Aucune donnée sur les sources de trafic n'est disponible pour le moment.
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(count($mois) > 0)
                const ctx = document.getElementById('visitesChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: @json($mois),
                        datasets: [{
                            label: 'Nombre de visites',
                            data: @json($compteurs),
                            backgroundColor: 'rgba(13, 110, 253, 0.2)',
                            borderColor: 'rgba(13, 110, 253, 1)',
                            borderWidth: 2,
                            tension: 0.2,
                            pointBackgroundColor: 'rgba(13, 110, 253, 1)',
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    precision: 0
                                }
                            }
                        },
                        plugins: {
                            tooltip: {
                                mode: 'index',
                                intersect: false,
                            },
                            legend: {
                                position: 'top',
                            }
                        }
                    }
                });
            @endif
        });
    </script>
    @endpush
</x-layout>