@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gestion des utilisateurs</h1>
        
        <!-- Vérifier si des utilisateurs sont disponibles -->
        @if($users->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach($user->roles as $role)
                                    <span class="badge badge-info">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                @if(!$user->hasRole('admin'))
                                    <!-- Formulaire pour assigner le rôle admin -->
                                    <form action="{{ route('admin.assignRole', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Assigner le rôle admin</button>
                                    </form>
                                @else
                                    <!-- Afficher un message si l'utilisateur a déjà le rôle admin -->
                                    <span class="text-success">Rôle admin déjà attribué</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun utilisateur trouvé.</p>
        @endif
    </div>
@endsection
