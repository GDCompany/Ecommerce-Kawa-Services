@extends('layouts.app')

@section('content')

    	<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="{{ route('index')}}">Home</a></li>
							<li class="active">S'inscrire</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>


{{-- <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-3">Register</h2>
        <p class="text-center text-muted mb-4">Create your account to get started.</p>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Champ Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                       value="{{ old('name') }}" required autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
            
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <!-- Champ Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                       required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ Confirm Password -->
            <div class="mb-3">
                <label for="password-confirm" class="form-label">Confirm Password</label>
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control" 
                       required>
            </div>

            <!-- Bouton de soumission -->
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            
            <!-- Lien vers la page Login sous le bouton Register -->
            @if (Route::has('login'))
                <div class="text-center mt-2">
                    <span>Already have an account?</span>
                    <a href="{{ route('login') }}" class="text-decoration-none custom-hover-red-500">Login here</a>
                </div>
            @endif
        </form>
    </div>
</div> --}}

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3"></div>

            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">S'inscrire</h3>
                </div>
                <form action="" method="POST">
                    <!-- Champ Nom -->
                    <div class="mb-4">
                        <label for="name" class="form-label fs-4">Nom</label>
                        <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Champ Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label fs-4">Adresse Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Champ Téléphone -->
                    <div class="mb-4">
                        <label for="phone" class="form-label fs-4">Téléphone</label>
                        <input type="text" id="phone" name="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror"
                            value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Champ Mot de Passe -->
                    <div class="mb-4">
                        <label for="password" class="form-label fs-4">Mot de Passe</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
                            required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Confirmation du Mot de Passe -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label fs-4">Confirmer le Mot de Passe</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" 
                            required>
                    </div>

                    <!-- Bouton S'inscrire -->
                    <div class="d-grid mb-4">
                        <button type="submit" class="primary-btn order-submit btn-lg mb-4">S'inscrire</button>
                    </div>

                    <!-- Lien Login sous le bouton S'inscrire -->
                    <div class="text-center mt-2">
                        <span>Vous avez déjà un compte?</span>
                        <a href="{{ route('login') }}" class="text-decoration-none custom-hover-red-500 mt-4">Connectez-vous ici</a>
                    </div>
                </form>
            </div>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<style>
    /* Ajoutez ceci à votre fichier CSS */
.text-decoration-none {
    text-decoration: none; /* Pas de soulignement pour les liens */
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

/* Styles pour les champs d'entrée au focus */
.form-control:focus {
    border-color: #007bff; /* Couleur de la bordure au focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Ombre légère au focus */
}

.invalid-feedback {
    font-size: 0.9rem; /* Taille de police des messages d'erreur */
    color: #e74c3c; /* Couleur rouge pour les erreurs */
}
</style>
@endsection
