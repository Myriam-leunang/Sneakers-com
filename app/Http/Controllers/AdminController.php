<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
    
        // Vérifier si l'utilisateur a le rôle 'admin'
        if (!$user->hasRole('admin')) {
            // Si l'utilisateur n'a pas le rôle admin, rediriger ou afficher un message
            return redirect()->route('dashboard')->with('error', 'Accès refusé. Vous devez être administrateur.');
        }
    
        $users = User::with('roles')->get();
        return view('admindashbord', compact('users'));
    }

    public function assignRole(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Vérifie si l'utilisateur a le rôle 'admin' avant d'effectuer des actions
    if (!auth()->user()->hasRole('admin')) {
        return redirect()->route('dashboard')->with('error', 'Vous n\'avez pas les droits pour attribuer des rôles.');
    }

    // Assigner le rôle 'admin' à l'utilisateur
    $user->assignRole('admin');

    return redirect()->route('admin.users')->with('success', 'Rôle admin assigné à l\'utilisateur avec succès.');
}


// Afficher tous les utilisateurs dans la gestion des utilisateurs
public function manageUsers()
{
    // Récupérer tous les utilisateurs avec leurs rôles
    $users = User::with('roles')->get();
    
    // Retourner la vue et passer la liste des utilisateurs
    return view('admin.manage-users', compact('users'));
}

public function secondAdminPage()
{
    return view('secondadmin'); // la page statistique
}

}
