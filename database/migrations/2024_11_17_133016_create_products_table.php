<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->decimal('price', 8, 2);
                $table->unsignedBigInteger('category_id');
                $table->integer('quantity');
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }
    }
    
    
    

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
