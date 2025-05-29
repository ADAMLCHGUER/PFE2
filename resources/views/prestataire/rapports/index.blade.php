<x-layout>
    <x-slot:title>Rapports - Plateforme Tourisme Maroc</x-slot>
    <style> 
        /* Variables CSS pour la page Rapports */
:root {
    --primary-color: #2563eb;
    --primary-light: #dbeafe;
    --secondary-color: #64748b;
    --success-color: #10b981;
    --warning-color: #f59e0b;
    --info-color: #06b6d4;
    --dark-color: #1e293b;
    --light-color: #f8fafc;
    --border-color: #e2e8f0;
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --gradient-info: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
    --gradient-success: linear-gradient(135deg, #a7f3d0 0%, #10b981 100%);
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
    animation: fadeInDown 0.6s ease-out;
}

.container h1 {
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 800;
    font-size: 2.5rem;
    margin-bottom: 0;
    position: relative;
}

.container h1::after {
    content: '📊';
    position: absolute;
    right: -50px;
    top: 0;
    font-size: 2rem;
    animation: bounce 2s infinite;
}

/* Bouton retour moderne */
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

/* Carte principale moderne */
.card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(15px);
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: var(--shadow-xl);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.6s ease-out 0.2s both;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient-info);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card:hover::before {
    opacity: 1;
}

.card-body {
    padding: 2rem;
}

/* Tableau moderne */
.table {
    background: transparent;
    border-collapse: separate;
    border-spacing: 0;
    margin-bottom: 0;
}

.table thead th {
    background: rgba(6, 182, 212, 0.1);
    color: var(--info-color);
    font-weight: 600;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1.25rem 1.5rem;
    border: none;
    position: relative;
    white-space: nowrap;
}

.table thead th:first-child {
    border-radius: 12px 0 0 12px;
}

.table thead th:last-child {
    border-radius: 0 12px 12px 0;
}

.table tbody td {
    padding: 1.25rem 1.5rem;
    border: none;
    border-bottom: 1px solid rgba(226, 232, 240, 0.3);
    vertical-align: middle;
    transition: all 0.3s ease;
}

.table tbody tr {
    transition: all 0.3s ease;
}

.table tbody tr:hover {
    background: rgba(6, 182, 212, 0.05);
    transform: translateX(4px);
}

.table tbody tr:hover td {
    color: var(--dark-color);
}

/* Colonnes spécifiques */
.table tbody td:nth-child(1) {
    font-weight: 600;
    color: var(--info-color);
    font-family: 'Monaco', 'Menlo', monospace;
}

.table tbody td:nth-child(2) {
    font-weight: 500;
    color: var(--dark-color);
}

.table tbody td:nth-child(3) {
    color: var(--secondary-color);
    font-size: 0.875rem;
}

/* Boutons d'action modernes */
.btn-sm {
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-weight: 500;
    font-size: 0.8rem;
    transition: all 0.3s ease;
    border: none;
    position: relative;
    overflow: hidden;
}

.btn-primary {
    background: var(--gradient-info);
    color: white;
    box-shadow: var(--shadow-sm);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
    color: white;
}

.btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-primary:hover::before {
    left: 100%;
}

/* Pagination moderne */
.mt-4 {
    margin-top: 2rem !important;
}

.pagination {
    justify-content: center;
}

.page-link {
    border: none;
    padding: 0.75rem 1rem;
    margin: 0 0.25rem;
    border-radius: 12px;
    color: var(--info-color);
    background: rgba(6, 182, 212, 0.1);
    transition: all 0.3s ease;
    font-weight: 500;
}

.page-link:hover {
    background: var(--gradient-info);
    color: white;
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.page-item.active .page-link {
    background: var(--gradient-info);
    color: white;
    box-shadow: var(--shadow-md);
}

/* Alerte moderne */
.alert {
    background: rgba(6, 182, 212, 0.1);
    border: 1px solid rgba(6, 182, 212, 0.2);
    border-radius: 16px;
    padding: 1.5rem;
    color: var(--info-color);
    font-weight: 500;
    position: relative;
    overflow: hidden;
}

.alert::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: var(--gradient-info);
}

.alert-info {
    background: rgba(6, 182, 212, 0.1);
    border-color: rgba(6, 182, 212, 0.2);
    color: var(--info-color);
}

.alert i {
    font-size: 1.2rem;
    margin-right: 0.5rem;
}

/* Animations */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
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

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Table responsive moderne */
.table-responsive {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
}

.table-responsive::-webkit-scrollbar {
    height: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: rgba(226, 232, 240, 0.3);
    border-radius: 4px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background: var(--gradient-info);
    border-radius: 4px;
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background: var(--info-color);
}

/* Effets de chargement */
.table tbody tr {
    opacity: 0;
    animation: slideInLeft 0.6s ease-out forwards;
}

.table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.table tbody tr:nth-child(5) { animation-delay: 0.5s; }

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
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

    .container h1::after {
        right: -35px;
        font-size: 1.5rem;
    }

    .btn-outline-primary {
        margin-top: 1rem;
        align-self: center;
        width: fit-content;
    }

    .card-body {
        padding: 1rem;
    }

    .table thead th,
    .table tbody td {
        padding: 0.75rem;
        font-size: 0.875rem;
    }

    .table thead th:nth-child(1) {
        width: 15%;
    }

    .table thead th:nth-child(4) {
        width: 25%;
    }
}

/* États vides améliorés */
.alert.alert-info {
    text-align: center;
    padding: 3rem 2rem;
    background: rgba(6, 182, 212, 0.1);
    position: relative;
}

.alert.alert-info::after {
    content: '📋';
    display: block;
    font-size: 3rem;
    margin-bottom: 1rem;
    opacity: 0.7;
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
            <h1>Rapports</h1>
            <a href="{{ route('prestataire.tableau') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left me-2"></i> Retour au tableau de bord
            </a>
        </div>
        
        <div class="card">
            <div class="card-body">
                @if($rapports->count() > 0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rapports as $rapport)
                                    <tr>
                                        <td>{{ $rapport->id }}</td>
                                        <td>{{ $rapport->titre }}</td>
                                        <td>{{ $rapport->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <a href="{{ route('prestataire.rapports.show', $rapport->id) }}" class="btn btn-sm btn-primary">
                                                <i class="bi bi-eye"></i> Voir
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        {{ $rapports->links() }}
                    </div>
                @else
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle me-2"></i> Aucun rapport n'est disponible pour le moment.
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>