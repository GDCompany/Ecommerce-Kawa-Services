@extends('layouts.app')

@section('content')
<body>
    	<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="{{ route('index')}}">Home</a></li>
							<li class="active">shop</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

        		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

                                @foreach ($categories as $category)
                                <div class="input-checkbox">
                                    <input type="checkbox" id="category-{{ $category->id }}" name="categories[]" value="{{ $category->id }}">
                                    <label for="category-{{ $category->id }}">
                                        <span></span>
                                        {{ $category->name }}
                                        {{-- <small>({{ $category->products_count }})</small> --}}
                                    </label>
                                </div>
                                @endforeach
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">10</option>
										<option value="1">20</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

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

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</body>
@endsection