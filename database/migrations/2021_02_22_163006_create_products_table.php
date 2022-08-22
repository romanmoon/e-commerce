<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('category_id');
            $table->string('name');
            $table->decimal('price',8,2)->default(0.00);
            $table->string('description')->nullable();
            $table->text('for_whom');
            $table->integer('stock');
            $table->integer('nview');
            $table->integer('nbuy');

            $table->text('product_image')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
