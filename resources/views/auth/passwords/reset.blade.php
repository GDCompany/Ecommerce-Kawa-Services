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
							<li class="active">Réinitialiser le mot de passe</li>
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
                            <h3 class="title">Réinitialiser</h3>
                        </div>
                        <form method="POST" action="{{ route('password.update') }}">
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
                            
                            <!-- Champ Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label fs-4">Confirmer le mot de passe</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                    required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Bouton Login -->
                            <div class="d-grid mb-4">
                                <button type="submit" class="primary-btn order-submit btn-lg">Réinitialiser</button>
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
