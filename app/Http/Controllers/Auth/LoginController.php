<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Où rediriger les utilisateurs après leur connexion.
     *
     * @var string
     */
    // protected $redirectTo = '/index';

    /**
     * L'utilisateur a été authentifié.
     *
     * @param \Illuminate\Http\Request  $request
     * @param \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        // Vérifier si l'utilisateur est un admin ou un utilisateur
        if ($user->role == 'admin') {
            return redirect()->route('dashboard');
        }
        session()->flash('success', "Bienvenue, {$user->name} ! Vous êtes maintenant connecté.");
        return redirect()->route('index');
    }

    /**
     * Créer une nouvelle instance du contrôleur.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
