@extends('layouts.admin')

@section('content')
<div class="container pt-5 mt-4">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Tous les utilisateurs</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('dashboard') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Tous les utilisateurs</h4>
                        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                            <i class="fa fa-plus"></i>
                            Ajouter un utilisateur
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal HTML -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header border-0">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">Créer</span>
                                        <span class="fw-light"> un administrateur</span>
                                    </h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="small">Remplissez tous les champs pour créer un administrateur</p>
                                    <form action="{{ route('admin.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label for="name">Nom complet</label>
                                                    <input id="name" type="text" name="name" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label for="email">Email</label>
                                                    <input id="email" type="email" name="email" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label for="phone">Téléphone</label>
                                                    <input id="phone" type="text" name="phone" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label for="password">Mot de passe</label>
                                                    <input id="password" type="password" name="password" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="role" value="admin">
                                        <div class="modal-footer border-0">
                                            <button type="submit" class="btn btn-primary">Créer</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Liste des utilisateurs --}}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Rôle</th>
                                    <th>Téléphone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning" title="Modifier">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{#" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="Supprimer">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Optionnel : Ajoutez des scripts JavaScript pour le modal
    $('#addRowModal').on('shown.bs.modal', function () {
        $('#name').focus();
    });
</script>
@endsection