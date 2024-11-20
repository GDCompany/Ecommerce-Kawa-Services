@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-3">Login</h2>
        <p class="text-center text-muted mb-4">Please enter your credentials to access your account.</p>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Champ Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Address Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
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
            
            <!-- Remember Me et Forgot Password côte à côte -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Your Password?</a>
                @endif
            </div>
            
            <!-- Bouton de connexion -->
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
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
</div>


@endsection
