@extends('layouts.admin')

@section('content')
<div class="container mx-auto mt-5 pt-5">
    <h2 class="text-2xl font-semibold mb-6">Modifier l'utilisateur</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST" class="space-y-4 max-w-lg mx-auto">
        @csrf
        @method('PUT')

        <!-- Affichage du rôle -->
        <div class="form-group">
            <label for="role" class="block text-sm font-medium text-gray-700">Rôle</label>
            <input type="text" id="role" name="role" class="form-control w-full p-9 border border-gray-300 rounded-md bg-gray-100 cursor-not-allowed" value="{{ $user->role }}" readonly>
        </div>

        <!-- Champ Nom -->
        <div class="form-group">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" id="name" name="name" class="form-control w-full p-2 border border-gray-300 rounded-md" value="{{ old('name', $user->name) }}" required>
        </div>

        <!-- Champ Email -->
        <div class="form-group">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="form-control w-full p-2 border border-gray-300 rounded-md" value="{{ old('email', $user->email) }}" required>
        </div>

        <!-- Champ Téléphone -->
        <div class="form-group">
            <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
            <input type="text" id="phone" name="phone" class="form-control w-full p-2 border border-gray-300 rounded-md" value="{{ old('phone', $user->phone) }}" required>
        </div>

        <!-- Champ Mot de passe -->
        <div class="form-group">
            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input type="password" id="password" name="password" class="form-control w-full p-2 border border-gray-300 rounded-md" placeholder="Laisser vide si inchangé">
        </div>

        <!-- Bouton de soumission -->
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary w-full py-2 px-4 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition duration-200">Mettre à jour</button>
        </div>
    </form>
</div>
@endsection
