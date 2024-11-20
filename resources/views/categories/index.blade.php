
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
                            <th>#</th>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
