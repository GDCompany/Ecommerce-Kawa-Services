<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Méthode pour créer un administrateur
    public function createAdmin(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        // Création de l'utilisateur avec le rôle 'admin'
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'admin',
        ]);

        // Redirection après création
        return redirect()->route('AllUser')->with('success', 'Administrateur créé avec succès.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.alluser.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'required|string|max:20',
            'password' => 'nullable|string|min:8', // Le mot de passe est optionnel
        ]);

        // Trouver l'utilisateur par son ID
        $user = User::findOrFail($id);

        // Mettre à jour les informations de l'utilisateur
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => $validatedData['password'] ? Hash::make($validatedData['password']) : $user->password,
        ]);

        // Redirection après mise à jour
        return redirect()->route('AllUser')->with('success', 'Utilisateur mis à jour avec succès.');
    }


}
