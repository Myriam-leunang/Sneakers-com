<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ mix  ('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mt-5">Admin Dashboard</h1>
        <p>Bienvenue dans l'espace administrateur, {{ auth()->user()->name }}.</p>

        <div class="mt-5">
            <!-- Exemple de gestion : Liste des utilisateurs -->
            <h2 class="text-xl font-bold">Liste des utilisateurs</h2>
            <table class="table-auto w-full mt-3 border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Nom</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Rôle</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $user->roles->pluck('name')->join(', ') }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <form method="POST" action="{{ route('admin.assignRole', $user->id) }}">
                                    @csrf
                                    <select name="role" class="border rounded px-2 py-1">
                                        <option value=" "</option>
                                        <option value="admin" @if($user->hasRole('admin')) selected @endif>Admin</option>
                                        <option value="user" @if($user->hasRole('user')) selected @endif>Utilisateur</option>
                                    </select>
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Assigner</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
