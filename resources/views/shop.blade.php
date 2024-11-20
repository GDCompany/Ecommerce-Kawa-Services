@extends('layouts.app')

@section('content')
<body>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Shoping</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class=""><a data-toggle="tab">Laptops</a></li>
                                <li><a data-toggle="tab">Smartphones</a></li>
                                <li><a data-toggle="tab">Cameras</a></li>
                                <li><a data-toggle="tab">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products grid -->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($products as $product)
                        <!-- product -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="product">
                                <div class="product-img" style="width: 100%; height: 200px; overflow: hidden;">
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: contain;">
                                    <div class="product-label">
                                        @if($product->sale) <span class="sale">-{{ $product->sale }}%</span> @endif
                                        @if($product->is_new) <span class="new">NEW</span> @endif
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{ $product->category->name ?? 'Aucune catégorie' }}</p>
                                    <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                                    <h4 class="product-price">${{ number_format($product->price, 2) }}
                                        @if($product->old_price)
                                        <del class="product-old-price">${{ number_format($product->old_price, 2) }}</del>
                                        @endif
                                    </h4>
                                    <div class="product-rating">
                                        @for($i = 0; $i < 5; $i++)
                                            <i class="fa fa-star{{ $i < $product->rating ? ' checked' : '' }}"></i>
                                        @endfor
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Quick view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        @endforeach
                    </div>
                </div>
                <!-- /Products grid -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
</body>
@endsection