@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3"></div>

            <!-- Réinitialisation du mot de passe -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Réinitialiser le Mot de Passe</h3>
                </div>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf <!-- Protection CSRF -->
                    
                    <!-- Champ Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label fs-4">Adresse Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Bouton Envoyer le lien de réinitialisation -->
                    <div class="d-grid mb-4">
                        <button type="submit" class="primary-btn order-submit btn-lg">Envoyer le lien de réinitialisation</button>
                    </div>

                    <div class="text-center mt-2">
                        <span>Vous vous souvenez de votre mot de passe ?</span>
                        <a href="{{ route('login') }}" class="text-decoration-none custom-hover-red-500">Connectez-vous ici</a>
                    </div>
                </form>
            </div>
            <!-- /Réinitialisation du mot de passe -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<style>
    .text-decoration-none {
    text-decoration: none; /* Pas de soulignement pour les liens */
}

.text-decoration-none:hover {
    text-decoration: underline; /* Soulignement au survol */
}

.primary-btn {
    width: 100%; /* Le bouton occupe toute la largeur */
    padding: 12px; /* Espacement intérieur */
    font-size: 1.1rem; /* Taille de la police du bouton */
    border-radius: 5px; /* Coins arrondis */
}

.form-control {
    height: 55px; /* Hauteur des champs d'entrée */
    font-size: 1.1rem; /* Taille de la police des champs d'entrée */
    padding: 10px; /* Espacement intérieur */
    border-radius: 5px; /* Coins arrondis */
}

.form-control:focus {
    border-color: #007bff; /* Couleur de la bordure au focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Ombre légère au focus */
}

.invalid-feedback {
    font-size: 0.9rem; /* Taille de police des messages d'erreur */
    color: #e74c3c; /* Couleur rouge pour les erreurs */
}
</style> --}}
@endsection
