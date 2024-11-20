@extends('layouts.admin')

@section('content')
    <div class="container pt-5 mt-4">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Produits</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="{{ route('dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <h1>Modifier un produit</h1>

            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                </div>

                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                </div>

                <div class="form-group">
                    <label for="category">Catégorie</label>
                    <select id="category" name="category" class="form-control" required>
                        <option value="" disabled>Choisir une catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                @if ($category->id == $product->category_id) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantité</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
                </div>

                <div class="form-group">
                    <label for="image">Image du produit</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    
                    @if($product->image)
                        <div class="mt-2">
                            <label>Image actuelle :</label>
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: auto;">
                        </div>
                    @else
                        <span>Aucune image actuelle</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-warning">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection
