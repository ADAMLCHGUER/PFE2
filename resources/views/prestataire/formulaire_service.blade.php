<x-layout>
    <x-slot:title>{{ isset($service) ? 'Modifier mon service' : 'Créer mon service' }} - Plateforme Tourisme Maroc</x-slot>
    
    <!-- Styles CSS personnalisés -->
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --success-color: #059669;
            --warning-color: #d97706;
            --danger-color: #dc2626;
            --light-bg: #f8fafc;
            --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --card-shadow-hover: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .main-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            margin: 2rem auto;
            max-width: 1200px;
        }

        .page-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-hover));
            color: white;
            padding: 2rem;
            border-radius: var(--border-radius) var(--border-radius) 0 0;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .page-header h1 {
            position: relative;
            z-index: 1;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .page-header .subtitle {
            position: relative;
            z-index: 1;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .btn-back {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            font-weight: 500;
        }

        .btn-back:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: rgba(255, 255, 255, 0.5);
            color: white;
            transform: translateY(-2px);
        }

        .info-alert {
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            border: none;
            border-radius: var(--border-radius);
            color: white;
            padding: 1.5rem;
            margin: 2rem;
            position: relative;
            overflow: hidden;
        }

        .info-alert::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
        }

        .section-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            margin: 2rem;
            overflow: hidden;
            transition: var(--transition);
        }

        .section-card:hover {
            box-shadow: var(--card-shadow-hover);
        }

        .section-header {
            background: linear-gradient(135deg, var(--light-bg), #e2e8f0);
            padding: 1.5rem 2rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .section-header h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .form-control, .form-select {
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: var(--transition);
            font-size: 1rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            outline: none;
        }

        .form-control.is-invalid, .form-select.is-invalid {
            border-color: var(--danger-color);
        }

        .invalid-feedback {
            color: var(--danger-color);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-hover));
            border: none;
            border-radius: 8px;
            padding: 0.875rem 2rem;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.4);
        }

        .horaire-row {
            background: var(--light-bg);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1rem;
            transition: var(--transition);
        }

        .horaire-row:hover {
            background: #f1f5f9;
        }

        .jour-label {
            font-weight: 600;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-check-input {
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #d1d5db;
            border-radius: 4px;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .input-group-text {
            background: var(--light-bg);
            border: 2px solid #e5e7eb;
            color: #6b7280;
            font-weight: 500;
        }

        .image-card {
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--card-shadow);
        }

        .image-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--card-shadow-hover);
        }

        .image-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .badge-success {
            background: linear-gradient(135deg, var(--success-color), #047857);
            border-radius: 20px;
            padding: 0.5rem 1rem;
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 6px;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-outline-primary:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-1px);
        }

        .btn-outline-danger {
            border: 2px solid var(--danger-color);
            color: var(--danger-color);
            border-radius: 6px;
            transition: var(--transition);
        }

        .btn-outline-danger:hover {
            background: var(--danger-color);
            color: white;
            transform: translateY(-1px);
        }

        .alert-warning {
            background: linear-gradient(135deg, #fbbf24, var(--warning-color));
            border: none;
            border-radius: var(--border-radius);
            color: white;
        }

        .text-muted {
            color: #6b7280 !important;
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .main-container {
                margin: 1rem;
                border-radius: 8px;
            }
            
            .page-header h1 {
                font-size: 1.875rem;
            }
            
            .section-body {
                padding: 1rem;
            }
        }
    </style>

    <div class="main-container">
        <!-- En-tête de la page -->
        <div class="page-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1>{{ isset($service) ? 'Modifier mon service' : 'Créer mon service' }}</h1>
                    <p class="subtitle mb-0">Gérez votre offre touristique sur la plateforme</p>
                </div>
                <a href="{{ route('prestataire.tableau') }}" class="btn-back">
                    <i class="bi bi-arrow-left me-2"></i> Retour au tableau de bord
                </a>
            </div>
        </div>
        
        <!-- Alerte d'information -->
        <div class="info-alert">
            <h5><i class="bi bi-info-circle me-2"></i> Information importante</h5>
            <p class="mb-0">
                En tant que prestataire, vous pouvez créer un seul service touristique. Prenez le temps de bien remplir toutes les informations
                pour mettre en valeur votre offre et attirer plus de clients.
            </p>
        </div>
        
        <!-- Formulaire principal -->
        <div class="section-card">
            <form method="POST" action="{{ isset($service) ? route('prestataire.service.update') : route('prestataire.service.store') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($service))
                    @method('PUT')
                @endif
                
                <!-- Section Informations générales -->
                <div class="section-header">
                    <h4><i class="bi bi-info-circle-fill"></i> Informations générales</h4>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="titre" class="form-label">
                                    <i class="bi bi-card-heading text-primary"></i>
                                    Titre du service *
                                </label>
                                <input type="text" class="form-control @error('titre') is-invalid @enderror" 
                                       id="titre" name="titre" 
                                       value="{{ old('titre', isset($service) ? $service->titre : '') }}" 
                                       required placeholder="Ex: Excursion dans l'Atlas">
                                @error('titre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categorie_id" class="form-label">
                                    <i class="bi bi-tags-fill text-primary"></i>
                                    Catégorie *
                                </label>
                                <select class="form-select @error('categorie_id') is-invalid @enderror" 
                                        id="categorie_id" name="categorie_id" required>
                                    <option value="">Sélectionner une catégorie</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}" 
                                                {{ old('categorie_id', isset($service) ? $service->categorie_id : '') == $categorie->id ? 'selected' : '' }}>
                                            {{ $categorie->nom }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('categorie_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ville_id" class="form-label">
                                    <i class="bi bi-geo-alt-fill text-primary"></i>
                                    Ville *
                                </label>
                                <select class="form-select @error('ville_id') is-invalid @enderror" 
                                        id="ville_id" name="ville_id" required>
                                    <option value="">Sélectionner une ville</option>
                                    @foreach($villes as $ville)
                                        <option value="{{ $ville->id }}" 
                                                {{ old('ville_id', isset($service) ? $service->ville_id : '') == $ville->id ? 'selected' : '' }}>
                                            {{ $ville->nom }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('ville_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="adresse" class="form-label">
                                    <i class="bi bi-house-fill text-primary"></i>
                                    Adresse complète *
                                </label>
                                <input type="text" class="form-control @error('adresse') is-invalid @enderror" 
                                       id="adresse" name="adresse" 
                                       value="{{ old('adresse', isset($service) ? $service->adresse : '') }}" 
                                       required placeholder="Adresse complète de votre service">
                                @error('adresse')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description" class="form-label">
                            <i class="bi bi-file-text-fill text-primary"></i>
                            Description détaillée *
                        </label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="5" required
                                  placeholder="Décrivez en détail votre service touristique...">{{ old('description', isset($service) ? $service->description : '') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="prestations" class="form-label">
                            <i class="bi bi-list-check text-primary"></i>
                            Services et prestations offerts *
                        </label>
                        <textarea class="form-control @error('prestations') is-invalid @enderror" 
                                  id="prestations" name="prestations" rows="3" required
                                  placeholder="Ex: Transport, Guide professionnel, Repas inclus...">{{ old('prestations', isset($service) ? $service->prestations : '') }}</textarea>
                        <small class="text-muted">Listez ici les différents services que vous proposez.</small>
                        @error('prestations')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <!-- Section Contact -->
                <div class="section-header">
                    <h4><i class="bi bi-telephone-fill"></i> Coordonnées de contact</h4>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telephone" class="form-label">
                                    <i class="bi bi-phone-fill text-primary"></i>
                                    Téléphone *
                                </label>
                                <input type="text" class="form-control @error('telephone') is-invalid @enderror" 
                                       id="telephone" name="telephone" 
                                       value="{{ old('telephone', isset($service) ? $service->telephone : '') }}" 
                                       required placeholder="+212 6XX XXX XXX">
                                @error('telephone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label">
                                    <i class="bi bi-envelope-fill text-primary"></i>
                                    Email *
                                </label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" 
                                       value="{{ old('email', isset($service) ? $service->email : '') }}" 
                                       required placeholder="contact@example.com">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_web" class="form-label">
                                    <i class="bi bi-globe text-primary"></i>
                                    Site web (optionnel)
                                </label>
                                <input type="url" class="form-control @error('site_web') is-invalid @enderror" 
                                       id="site_web" name="site_web" 
                                       value="{{ old('site_web', isset($service) ? $service->site_web : '') }}"
                                       placeholder="https://www.example.com">
                                @error('site_web')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="coordonnees" class="form-label">
                                    <i class="bi bi-pin-map-fill text-primary"></i>
                                    Coordonnées GPS (optionnel)
                                </label>
                                <input type="text" class="form-control @error('coordonnees') is-invalid @enderror" 
                                       id="coordonnees" name="coordonnees" 
                                       value="{{ old('coordonnees', isset($service) ? $service->coordonnees : '') }}" 
                                       placeholder="Ex: 34.0522, -118.2437">
                                <small class="text-muted">Format: latitude, longitude</small>
                                @error('coordonnees')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Section Horaires -->
                <div class="section-header">
                    <h4><i class="bi bi-clock-fill"></i> Horaires d'ouverture</h4>
                </div>
                <div class="section-body">
                    @php
                        $jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
                        $horaires = isset($service) && $service->horaires ? $service->horaires : [];
                    @endphp
                    
                    @foreach($jours as $jour)
                        <div class="horaire-row">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <label class="jour-label">
                                        <input type="checkbox" class="form-check-input jour-check" 
                                               name="horaires[{{ $jour }}][ouvert]" value="1" 
                                               {{ isset($horaires[$jour]['ouvert']) && $horaires[$jour]['ouvert'] ? 'checked' : '' }}>
                                        <i class="bi bi-calendar-day"></i>
                                        {{ ucfirst($jour) }}
                                    </label>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-clock"></i> De</span>
                                        <input type="time" class="form-control" 
                                               name="horaires[{{ $jour }}][ouverture]" 
                                               value="{{ $horaires[$jour]['ouverture'] ?? '09:00' }}" 
                                               {{ isset($horaires[$jour]['ouvert']) && $horaires[$jour]['ouvert'] ? '' : 'disabled' }}>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-clock-history"></i> À</span>
                                        <input type="time" class="form-control" 
                                               name="horaires[{{ $jour }}][fermeture]" 
                                               value="{{ $horaires[$jour]['fermeture'] ?? '18:00' }}" 
                                               {{ isset($horaires[$jour]['ouvert']) && $horaires[$jour]['ouvert'] ? '' : 'disabled' }}>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Bouton de soumission -->
                <div class="section-body">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-save me-2"></i>
                            {{ isset($service) ? 'Mettre à jour le service' : 'Créer le service' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Section Images (si service existe) -->
        @if(isset($service) && $service->id)
            <div class="section-card">
                <div class="section-header">
                    <h4><i class="bi bi-images"></i> Images du service</h4>
                </div>
                <div class="section-body">
                    <form method="POST" action="{{ route('prestataire.service.image.store') }}" 
                          enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="image" class="form-label">
                                        <i class="bi bi-cloud-upload text-primary"></i>
                                        Ajouter une nouvelle image
                                    </label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                           id="image" name="image" accept="image/*" required>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-upload me-2"></i> Télécharger l'image
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    <div class="row">
                        @forelse($service->images ?? [] as $image)
                            <div class="col-md-3 mb-4">
                                <div class="image-card">
                                    <img src="{{ asset('storage/' . $image->chemin) }}" alt="Image du service">
                                    <div class="card-body p-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            @if($image->principale)
                                                <span class="badge badge-success">
                                                    <i class="bi bi-star-fill me-1"></i>Image principale
                                                </span>
                                            @else
                                                <form method="POST" action="{{ route('prestataire.service.image.principale', $image->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-star me-1"></i>Définir comme principale
                                                    </button>
                                                </form>
                                            @endif
                                            
                                            <form method="POST" action="{{ route('prestataire.service.image.destroy', $image->id) }}" 
                                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette image?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-warning">
                                    <i class="bi bi-exclamation-triangle me-2"></i> 
                                    Aucune image n'a été ajoutée pour ce service. Veuillez ajouter au moins une image pour améliorer l'attractivité de votre offre.
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        @else
            <!-- Message pour nouveau service -->
            <div class="section-card">
                <div class="section-body text-center py-5">
                    <i class="bi bi-images text-muted" style="font-size: 3rem;"></i>
                    <h5 class="mt-3 text-muted">Images du service</h5>
                    <p class="text-muted">
                        Une fois votre service créé, vous pourrez ajouter des images pour le mettre en valeur.
                    </p>
                </div>
            </div>
        @endif
    </div>
    
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Script pour activer/désactiver les champs horaires
            document.querySelectorAll('.jour-check').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    const row = this.closest('.horaire-row');
                    const timeInputs = row.querySelectorAll('input[type="time"]');
                    
                    timeInputs.forEach(function(input) {
                        input.disabled = !checkbox.checked;
                        if (checkbox.checked) {
                            input.style.opacity = '1';
                        } else {
                            input.style.opacity = '0.5';
                        }
                    });
                });
                
                // Initialiser l'état au chargement
                checkbox.dispatchEvent(new Event('change'));
            });

            // Animation de focus sur les champs
            document.querySelectorAll('.form-control, .form-select').forEach(function(field) {
                field.addEventListener('focus', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.boxShadow = '0 8px 20px rgba(37, 99, 235, 0.15)';
                });
                
                field.addEventListener('blur', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
    @endpush
</x-layout>