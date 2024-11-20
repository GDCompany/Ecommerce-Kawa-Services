
@extends('layouts.admin')

@section('content')
    <div class="container pt-5 mt-4">
        <div class="container">
            <div class="page-inner">
              <div class="page-header">
                <h3 class="fw-bold mb-3">All Categories</h3>
                <ul class="breadcrumbs mb-3">
                  <li class="nav-home">
                    <a href="{{ route('dashboard')}}">
                      <i class="icon-home"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">All Catégories </h4>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal"
                      >
                        <i class="fa fa-plus"></i>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Créer une catégorie</a>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                <h1></h1>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>#0</th>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">
                                  <i class="fa fa-times"></i>
                              </button>
                          </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<!-- Modal de Confirmation de Suppression -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmation de Suppression</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              Êtes-vous sûr de vouloir supprimer cet élément ? Cette action est irréversible.
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
              <form id="deleteForm" method="POST" action="" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Supprimer</button>
              </form>
          </div>
      </div>
  </div>
</div>


@endsection
