<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlluserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.alluser', compact('users'));
    }
    
}
