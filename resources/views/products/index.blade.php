@extends('layouts.admin')

@section('content')
<div class="container pt-5 mt-4">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Tous les produits</h3>
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
                        <h4 class="card-title">Tous les produits</h4>
                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-plus"></i>
                            Ajouter un produit
                        </a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#0</th>
                                    <th>Nom</th>
                                    <th>Image</th>
                                    <th>Prix</th>
                                    <th>Catégorie</th>
                                    <th>Quantité</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            @if($product->image)
                                                <img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 50px; height: auto;">
                                            @else
                                                <span>Aucune image</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->price }} f</td>
                                        <td>{{ $product->category->name ?? 'Aucune catégorie' }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning" title="Modifier">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
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
                </div>
            </div>
        </div>
    </div>
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
