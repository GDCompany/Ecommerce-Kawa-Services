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
                    <h3 class="title">Se connecter</h3>
                </div>
                <form action="{{ route('login')}}" method="POST">
                    @csrf
                    <!-- Champ Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label fs-4">Adresse Email</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Champ Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label fs-4">Mot de Passe</label>
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
                            <label class="form-check-label" for="remember">Souviens-toi de moi</label>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-decoration-none" style="margin-left: auto;">Forgot Your Password?</a>
                        @endif
                        </div>
                    </div>

                    <!-- Bouton Login -->
                    <div class="d-grid mb-4">
                        <button type="submit" class="primary-btn order-submit btn-lg">Se connecter</button>
                    </div>

                    <!-- Lien Register sous le bouton Login -->
                    @if (Route::has('register'))
                        <div class="text-center mt-2">
                            <span>Vous n'avez pas de compte ?</span>
                            <a href="{{ route('register') }}" class="text-decoration-none custom-hover-red-500">Inscrivez-vous ic</a>
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

@endsection
