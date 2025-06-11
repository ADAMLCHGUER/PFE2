<x-layout>
    <x-slot:title>Connexion - Plateforme Tourisme Maroc</x-slot>
    
    <div class="login-container">
        <div class="left-section">
            <div class="brand-section">
                <div class="logo">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="TourismConnect Logo">
                    <h1>TourismConnect</h1>
                </div>
                
                <div class="tagline">
                    <h2>Building the Future...</h2>
                    <p>La page de connexion de TourismConnect allie simplicité, sécurité et design intuitif pour offrir une 
                       expérience utilisateur optimale. Elle permet aux touristes, prestataires de services et administrateurs 
                       d'accéder facilement à leurs comptes.</p>
                </div>
            </div>
        </div>
        
        <div class="right-section">
            <div class="login-card">
                <div class="login-header">
                    <h4>WELCOME BACK</h4>
                    <h2>Log In to your Account</h2>
                </div>
                
                <div class="login-form">
                    <form method="POST" action="{{ route('prestataire.connexion') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autofocus
                                placeholder="johnsmith@email.com"
                            >
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-input">
                                <input 
                                    type="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    id="password" 
                                    name="password" 
                                    required
                                    placeholder="••••••••••••"
                                >
                                <button type="button" class="toggle-password" aria-label="Afficher/masquer le mot de passe">
                                    <i class="bi bi-eye" aria-hidden="true"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-bottom">
                            <div class="remember-me">
                                <input 
                                    type="checkbox" 
                                    id="remember" 
                                    name="remember" 
                                    {{ old('remember') ? 'checked' : '' }}
                                >
                                <label for="remember">Remember me</label>
                            </div>
                            
                            <div class="forgot-password">
                                <a href="#" tabindex="0">Forgot Password?</a>
                            </div>
                        </div>
                        
                        <div class="login-button">
                            <button type="submit" class="btn btn-primary btn-block">
                                CONTINUE
                            </button>
                        </div>
                    </form>
                    
                    <div class="signup-link">
                        <p>New User? <a href="{{ route('prestataire.inscription') }}">SIGN UP HERE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        /* Styles pour la page de connexion */
        /* Override du body pour cette page spécifique */
        .login-page-body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
            background-image: url('{{ asset("storage/images/bg1.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        /* Fallback pour les appareils mobiles qui ne supportent pas background-attachment: fixed */
        @media (max-width: 768px) {
            .login-page-body {
                background-attachment: scroll;
            }
        }
        
        /* Override du body::before pour cette page spécifique */
        .login-page-body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
        
        html {
            height: auto;
        }
        
        /* Container principal de la page de connexion */
        .login-container {
            display: flex;
            min-height: calc(100vh - 140px); /* Ajustement pour laisser la place au footer */
            width: 100%;
            background-color: transparent;
            position: relative;
            z-index: 1;
            margin-bottom: 2rem;
        }
        
        /* Section gauche avec l'image de fond et le texte */
        .left-section {
            width: 50%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 2rem;
            color: white;
        }
        
        .brand-section {
            position: relative;
            z-index: 2;
            margin-top: 2rem;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            margin-left: 11rem;
        }
        
        .logo img {
            height: 200px;
            width: auto;
            margin-right: 1rem;
        }
        
        .logo h1 {
            font-size: 2rem;
            font-weight: 600;
            margin: 0;
            color: white;
            margin-left: -60px;
            margin-top: 20px;
        }
        
        .tagline {
            max-width: 60%;
            margin-left: 250px;   
            margin-top: 100px;
        }
        
        .tagline h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
        }
        
        .tagline p {
            font-size: 1rem;
            line-height: 1.6;
            opacity: 0.9;
        }
        
        /* Section droite avec le formulaire de connexion */
        .right-section {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        
        .login-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            padding: 2rem;
        }
        
        .login-header {
            text-align: left;
            margin-bottom: 2rem;
        }
        
        .login-header h4 {
            color: #666;
            font-size: 0.9rem;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }
        
        .login-header h2 {
            color: #333;
            font-size: 1.8rem;
            font-weight: 600;
            margin: 0;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }
        
        .form-control:focus {
            border-color: #2196F3;
            outline: none;
            box-shadow: 0 0 0 2px rgba(33, 150, 243, 0.1);
        }
        
        .form-control.is-invalid {
            border-color: #dc3545;
        }
        
        .invalid-feedback {
            color: #dc3545;
            font-size: 0.85rem;
            margin-top: 0.25rem;
            display: block;
        }
        
        .password-input {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 4px;
            transition: color 0.2s ease;
        }
        
        .toggle-password:hover {
            color: #2196F3;
        }
        
        .toggle-password:focus {
            outline: 2px solid #2196F3;
            outline-offset: 2px;
        }
        
        .form-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .remember-me input {
            margin-right: 0.5rem;
        }
        
        .remember-me label {
            cursor: pointer;
        }
        
        .forgot-password a {
            color: #666;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s ease;
        }
        
        .forgot-password a:hover,
        .forgot-password a:focus {
            color: #2196F3;
        }
        
        .login-button {
            margin-bottom: 1.5rem;
        }
        
        .btn-primary {
            background-color: #202020;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.8rem;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-primary:hover {
            background-color: #000;
        }
        
        .btn-primary:focus {
            outline: 2px solid #2196F3;
            outline-offset: 2px;
        }
        
        .btn-block {
            display: block;
            width: 100%;
        }
        
        .signup-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }
        
        .signup-link a {
            color: #2196F3;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .signup-link a:hover,
        .signup-link a:focus {
            text-decoration: underline;
        }
        
        /* Responsive design */
        @media (max-width: 1200px) {
            .logo {
                margin-left: 5rem;
            }
            
            .tagline {
                margin-left: 150px;
            }
        }
        
        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
            }
            
            .left-section,
            .right-section {
                width: 100%;
            }
            
            .left-section {
                padding-top: 3rem;
                padding-bottom: 2rem;
                align-items: center;
                text-align: center;
            }
            
            .logo {
                margin-left: 0;
                justify-content: center;
                flex-direction: column;
            }
            
            .logo h1 {
                margin-left: 0;
                margin-top: 1rem;
            }
            
            .tagline {
                max-width: 80%;
                margin-left: 0;
                margin-top: 2rem;
                text-align: center;
            }
            
            .login-card {
                margin: 0 auto 3rem;
                max-width: 90%;
            }
        }
        
        @media (max-width: 768px) {
            .login-container {
                padding: 2rem 1rem;
            }
            
            .left-section {
                padding: 2rem 1rem;
            }
            
            .logo img {
                height: 150px;
            }
            
            .tagline {
                max-width: 100%;
            }
            
            .tagline h2 {
                font-size: 2rem;
            }
            
            .right-section {
                padding: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .login-card {
                padding: 1.5rem;
            }
            
            .login-header h2 {
                font-size: 1.5rem;
            }
            
            .logo img {
                height: 120px;
            }
            
            .tagline h2 {
                font-size: 1.8rem;
            }
            
            .form-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            
            .forgot-password {
                margin-top: 0;
            }
        }
        
        @media (max-width: 480px) {
            .login-page-body {
                background-position: top center;
            }
            
            .login-container {
                padding: 1rem 0.5rem;
            }
            
            .left-section {
                min-height: auto;
                padding: 2rem 0.5rem;
            }
            
            .logo img {
                height: 100px;
            }
            
            .tagline h2 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .tagline p {
                font-size: 0.9rem;
            }
            
            .login-card {
                padding: 1.2rem;
            }
            
            .login-header {
                margin-bottom: 1.5rem;
            }
            
            .login-header h4 {
                font-size: 0.8rem;
            }
            
            .login-header h2 {
                font-size: 1.3rem;
            }
            
            .form-group label {
                font-size: 0.8rem;
            }
            
            .form-control {
                padding: 0.7rem;
                font-size: 0.9rem;
            }
        }
        
        /* Amélioration de l'accessibilité */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
        
        /* Amélioration du contraste pour l'accessibilité */
        @media (prefers-contrast: high) {
            .form-control {
                border-width: 2px;
            }
            
            .btn-primary {
                border: 2px solid #000;
            }
        }
    </style>
    
    <script>
        // Appliquer les styles spécifiques au body pour cette page
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('login-page-body');
            
            const togglePassword = document.querySelector('.toggle-password');
            const passwordInput = document.querySelector('#password');
            
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    // Change input type
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Change icon
                    const icon = this.querySelector('i');
                    if (icon) {
                        icon.classList.toggle('bi-eye');
                        icon.classList.toggle('bi-eye-slash');
                    }
                    
                    // Update aria-label for accessibility
                    const isVisible = type === 'text';
                    this.setAttribute('aria-label', isVisible ? 'Masquer le mot de passe' : 'Afficher le mot de passe');
                });
                
                // Keyboard accessibility
                togglePassword.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            }
            
            // Nettoyer les classes au déchargement de la page
            window.addEventListener('beforeunload', function() {
                document.body.classList.remove('login-page-body');
            });
            
            // Enhanced form validation
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const emailInput = document.getElementById('email');
                    const passwordInput = document.getElementById('password');
                    let isValid = true;
                    
                    // Basic client-side validation
                    if (emailInput && !emailInput.value.trim()) {
                        emailInput.classList.add('is-invalid');
                        isValid = false;
                    } else if (emailInput) {
                        emailInput.classList.remove('is-invalid');
                    }
                    
                    if (passwordInput && !passwordInput.value.trim()) {
                        passwordInput.classList.add('is-invalid');
                        isValid = false;
                    } else if (passwordInput) {
                        passwordInput.classList.remove('is-invalid');
                    }
                    
                    if (!isValid) {
                        e.preventDefault();
                        // Focus on first invalid field
                        const firstInvalid = form.querySelector('.is-invalid');
                        if (firstInvalid) {
                            firstInvalid.focus();
                        }
                    }
                });
            }
            
            // Remove invalid class on input
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    if (this.classList.contains('is-invalid') && this.value.trim()) {
                        this.classList.remove('is-invalid');
                    }
                });
            });
        });
    </script>
</x-layout>