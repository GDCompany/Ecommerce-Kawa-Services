<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
// use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot()
    {
       // $categories = \App\Models\Category::all();
        $categories = Category::all();
        view()->share('categories', $categories);

        // $products = Product::all();
        // view()->share('products', $products);
        
    }
    
}
