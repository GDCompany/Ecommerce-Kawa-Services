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
                            <h3 class="title">S'inscrire</h3>
                        </div>
                        <form action="{{ route('register')}}" method="POST">
                            @csrf
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

@endsection
