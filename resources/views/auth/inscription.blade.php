<x-layout>
    <x-slot:title>Inscription - Plateforme Tourisme Maroc</x-slot>
    
    <style>
        .inscription-section {
            min-height: 100vh;
            background-image: url('{{ asset("storage/images/bg1.jpeg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;   
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: -4.4rem;
            padding: 10rem 5rem;
        }
        
        .inscription-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(2px);
            z-index: 1;
        }
        
        .inscription-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 750px;
        }
        
        .inscription-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .card-header-custom {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .card-header-custom h4 {
            color: #333;
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-size: 1.75rem;
        }
        
        .card-header-custom p {
            color: #666;
            margin: 0;
            font-size: 1rem;
        }
        
        .progress-custom {
            height: 6px;
            background-color: rgba(233, 236, 239, 0.6);
            border-radius: 10px;
            margin-bottom: 2rem;
            overflow: hidden;
        }
        
        .progress-bar-custom {
            background: linear-gradient(90deg, #ff6b35, #ff8f65);
            height: 100%;
            border-radius: 10px;
            width: 33%;
            transition: width 0.4s ease;
            box-shadow: 0 2px 10px rgba(255, 107, 53, 0.3);
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        
        .form-control, .form-select {
            border: 2px solid rgba(233, 236, 239, 0.8);
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #ff6b35;
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 53, 0.15);
            background: rgba(255, 255, 255, 0.98);
        }
        
        .form-control::placeholder {
            color: #999;
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, #ff6b35, #ff8f65);
            border: none;
            border-radius: 12px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 107, 53, 0.4);
            background: linear-gradient(135deg, #e55a2b, #ff6b35);
        }
        
        .btn-primary-custom:active {
            transform: translateY(-1px);
        }
        
        .form-check-input {
            border: 2px solid #ddd;
            border-radius: 4px;
        }
        
        .form-check-input:checked {
            background-color: #ff6b35;
            border-color: #ff6b35;
        }
        
        .form-check-input:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 53, 0.15);
        }
        
        .text-link {
            color: #ff6b35;
            text-decoration: none;
            font-weight: 500;
        }
        
        .text-link:hover {
            color: #e55a2b;
            text-decoration: underline;
        }
        
        .signup-link {
            color: #ff6b35;
            font-weight: 600;
            text-decoration: none;
        }
        
        .signup-link:hover {
            color: #e55a2b;
            text-decoration: underline;
        }
        
        .form-text {
            font-size: 0.85rem;
            color: #666;
            margin-top: 0.25rem;
        }
        
        .invalid-feedback {
            display: block;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875rem;
            color: #dc3545;
        }
        
        .form-control.is-invalid {
            border-color: #dc3545;
        }
        
        /* Animation pour l'apparition */
        .inscription-card {
            animation: slideInUp 0.6s ease-out;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .inscription-section {
                padding: 6rem 0.5rem;
                min-height: auto;
                background-attachment: scroll;
            }
            
            .inscription-card {
                padding: 2rem 1.5rem;
                border-radius: 15px;
            }
            
            .card-header-custom h4 {
                font-size: 1.5rem;
            }
            
            .btn-primary-custom {
                padding: 0.875rem 1.5rem;
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .inscription-card {
                padding: 1.5rem 1rem;
            }
        }
    </style>

    <div class="inscription-section">
        <div class="inscription-container">
            <div class="inscription-card">
                <div class="card-header-custom">
                    <h4>Inscription prestataire</h4>
                    <p>Créez votre compte professionnel</p>
                </div>
                
                <div class="progress-custom">
                    <div class="progress-bar-custom"></div>
                </div>
                
                <form method="POST" action="{{ route('prestataire.inscription') }}" id="inscriptionForm">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom complet *</label>
                        <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" 
                            name="name" 
                            value="{{ old('name') }}" 
                            required 
                            autofocus
                            placeholder="Entrez votre nom complet"
                        >
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required
                            placeholder="votre@email.com"
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe *</label>
                        <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            required
                            placeholder="Minimum 8 caractères"
                        >
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Minimum 8 caractères</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmation du mot de passe *</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            required
                            placeholder="Confirmez votre mot de passe"
                        >
                    </div>
                    
                    <div class="mb-3">
                        <label for="nom_entreprise" class="form-label">Nom de l'entreprise *</label>
                        <input 
                            type="text" 
                            class="form-control @error('nom_entreprise') is-invalid @enderror" 
                            id="nom_entreprise" 
                            name="nom_entreprise" 
                            value="{{ old('nom_entreprise') }}" 
                            required
                            placeholder="Nom de votre entreprise"
                        >
                        @error('nom_entreprise')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone *</label>
                        <input 
                            type="tel" 
                            class="form-control @error('telephone') is-invalid @enderror" 
                            id="telephone" 
                            name="telephone" 
                            value="{{ old('telephone') }}" 
                            required
                            placeholder="+212 6XX XXX XXX"
                        >
                        @error('telephone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="adresse" class="form-label">Adresse complète *</label>
                        <textarea 
                            class="form-control @error('adresse') is-invalid @enderror" 
                            id="adresse" 
                            name="adresse" 
                            rows="3" 
                            required
                            placeholder="Adresse complète de votre entreprise"
                        >{{ old('adresse') }}</textarea>
                        @error('adresse')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-check mb-4">
                        <input 
                            class="form-check-input @error('terms') is-invalid @enderror" 
                            type="checkbox" 
                            id="terms" 
                            name="terms" 
                            required
                        >
                        <label class="form-check-label" for="terms">
                            J'accepte les <a href="#" class="text-link" target="_blank">conditions d'utilisation</a> et la <a href="#" class="text-link" target="_blank">politique de confidentialité</a>
                        </label>
                        @error('terms')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn-primary-custom">
                        <i class="bi bi-person-plus me-2"></i> S'inscrire
                    </button>
                    
                    <div class="mt-3 text-center">
                        <small class="text-muted">
                            Vous avez déjà un compte ? <a href="{{ route('prestataire.connexion') }}" class="signup-link">Connectez-vous</a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- JavaScript pour la barre de progression et validation --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation de la barre de progression
            const form = document.getElementById('inscriptionForm');
            if (form) {
                form.addEventListener('input', function() {
                    const inputs = this.querySelectorAll('input[required], textarea[required]');
                    const checkbox = this.querySelector('input[type="checkbox"]');
                    let filledInputs = 0;
                    
                    inputs.forEach(input => {
                        if (input.value.trim() !== '') filledInputs++;
                    });
                    
                    if (checkbox && checkbox.checked) filledInputs++;
                    
                    const totalFields = inputs.length + (checkbox ? 1 : 0);
                    const progress = Math.min((filledInputs / totalFields) * 100, 100);
                    const progressBar = document.querySelector('.progress-bar-custom');
                    if (progressBar) {
                        progressBar.style.width = progress + '%';
                    }
                });
                
                // Validation côté client
                form.addEventListener('submit', function(e) {
                    const password = document.getElementById('password');
                    const confirmPassword = document.getElementById('password_confirmation');
                    
                    if (password && confirmPassword) {
                        if (password.value !== confirmPassword.value) {
                            e.preventDefault();
                            alert('Les mots de passe ne correspondent pas');
                            confirmPassword.focus();
                            return false;
                        }
                        
                        if (password.value.length < 8) {
                            e.preventDefault();
                            alert('Le mot de passe doit contenir au moins 8 caractères');
                            password.focus();
                            return false;
                        }
                    }
                });
            }
        });
    </script>
</x-layout>