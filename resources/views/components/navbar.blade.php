<nav>
<!-- HEADER -->

<!-- TOP HEADER -->
<div id="top-header">
    <div class="container">
        <ul class="header-links pull-left">
            <li><a href="{{ route('index') }}"><i class="fa fa-phone"></i> +229 53002565</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> germaindandji03@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> 12345 Cotonou</a></li>
        </ul>
        <ul class="header-links pull-right">
            @auth
                <!-- Dropdown for My Account -->
                <li class="relative">
                    <a href="#" id="account-btn" class="flex items-center">
                        <i class="fa fa-user-o"></i>
                        <span class="ml-2">{{ auth()->user()->name }}</span> <!-- Nom de l'utilisateur -->
                    </a>
                    <!-- Dropdown Menu -->
                    <ul id="account-menu" 
                        class="absolute right-0 mt-2 w-40 bg-white text-black shadow-lg rounded-lg hidden">
                        <!-- Profil -->
                        <li class="border-b">
                            <a href="#" 
                               class="block px-4 py-4 text-lg font-bold hover:bg-gray-100">
                                Profil
                            </a>
                        </li>
                        
                        <!-- Déconnexion -->
                        <li class="border-t">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" 
                                        class="block px-4 py-4 text-lg font-bold hover:bg-gray-100 w-full text-left">
                                    Se déconnecter
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <!-- Lien pour se connecter ou s'inscrire -->
                <li>
                    <a href="{{ route('login') }}" class="flex items-center">
                        <i class="fa fa-user-o"></i>
                        <span class="ml-2">Se connecter</span>
                    </a>
                </li>
            @endauth
        </ul>
        
    </div>
</div>
<!-- /TOP HEADER -->


    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="{{ route('index')}}" class="logo">
                            <img src="{{ asset('frontend/img/logo.png')}}" alt="">   
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select" name="category_id">
                                <option value="0">All Categories</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <input class="input" placeholder="Search here ...">
                            <button type="submit" class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->



                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Your Wishlist</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Your Cart</span>
                                <div class="qty">{{ Cart::count() }}</div>
                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    @foreach (Cart::content() as $item)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                {{-- <img src="{{ asset($item->model->image) }}" alt="{{ $item->name }}"> --}}
                                                {{-- <img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 50px; height: auto;"> --}}
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">{{ $item->name }}</a></h3>
                                                <h4 class="product-price"><span class="qty">{{ $item->qty }}x</span>${{ $item->price }}</h4>
                                            </div>
                                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="delete"><i class="fa fa-close"></i></button>
                                            </form>                                            
                                        </div>
                                    @endforeach
                                </div>
                                @if (Cart::count() > 0)
                                    <div class="cart-summary">
                                        <small>{{ Cart::count() }} Item(s) selected</small>
                                        <h5>SUBTOTAL: ${{ Cart::subtotal() }}</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="{{ route('cart')}}">View Cart</a>
                                        <a href="{{ route('checkout')}}">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                @else
                                    <p>Your cart is empty.</p>
                                @endif
                            </div>
                        </div>
                        
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
        <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{ route('index')}}">Home</a></li>
                    <li><a href="{{ route('shop')}}">Shop</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Smartphones</a></li>
                    <li><a href="#">Cameras</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
        </nav>
    <!-- /NAVIGATION -->
    </nav>


    {{-- modal pour le login --}}

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const accountBtn = document.getElementById('account-btn');
            const accountMenu = document.getElementById('account-menu');

            accountBtn.addEventListener('click', function (e) {
                e.preventDefault();
                accountMenu.classList.toggle('hidden'); // Toggle visibility of the menu
            });

            // Optional: Close menu if clicking outside
            document.addEventListener('click', function (e) {
                if (!accountBtn.contains(e.target) && !accountMenu.contains(e.target)) {
                    accountMenu.classList.add('hidden');
                }
            });
        });
    </script>

    <style>
    #account-menu {
        z-index: 50;
    }
</style>

