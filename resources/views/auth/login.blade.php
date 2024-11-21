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
							<li class="active">Se connecter</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3"></div>

            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Login</h3>
                </div>
                <form action="" method="POST">
                    <!-- Champ Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label fs-4">Address Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Champ Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label fs-4">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
                            required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me et Forgot Password côte à côte -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-decoration-none" style="margin-left: auto;">Forgot Your Password?</a>
                        @endif
                        </div>
                    </div>

                    <!-- Bouton Login -->
                    <div class="d-grid mb-4">
                        <button type="submit" class="primary-btn order-submit btn-lg">Login</button>
                    </div>

                    <!-- Lien Register sous le bouton Login -->
                    @if (Route::has('register'))
                        <div class="text-center mt-2">
                            <span>Don't have an account?</span>
                            <a href="{{ route('register') }}" class="text-decoration-none custom-hover-red-500">Register here</a>
                        </div>
                    @endif
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
    font-size: 2%; /* Taille de la police des champs d'entrée */
    padding: 10px; /* Espacement intérieur */
    border-radius: 5px; /* Coins arrondis */
}

/* Styles pour les champs d'entrée au focus */
.form-control:focus {
    border-color: #007bff; /* Couleur de la bordure au focus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Ombre légère au focus */
}

.form-check {
    display: flex; /* Utiliser flex pour aligner les éléments */
    align-items: center; /* Alignement vertical */
}

.form-check .form-check-input {
    margin-right: 10px; /* Espacement à droite de la case à cocher */
}
        </style>

@endsection
