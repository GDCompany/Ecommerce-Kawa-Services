@extends('layouts.admin')

@section('content')
<div class="container pt-5 mt-4">
    <div class="page-header">
        <h3 class="fw-bold mb-3">{{ isset($category) ? 'Modifier' : 'Créer' }} une catégorie</h3>
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
            <div class="card-body">
                <form action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}" method="POST">
                    @csrf
                    @if(isset($category))
                        @method('PUT')
                    @endif

                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name ?? old('name') }}" required>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection