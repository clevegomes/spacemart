<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->decimal('weight', 5, 2);
            $table->decimal('price', 5, 2);
            $table->decimal('handling_price', 5, 2);
            $table->decimal('transportation_price', 5, 2);
            $table->integer('minimum_order');
            $table->text('description')->nullable();
            $table->string('brand')->nullable();
            $table->text('return_policy')->nullable();
            $table->text('packaging_type')->nullable();
            $table->string('model')->nullable();
            $table->string('grade')->nullable();
            $table->string('filename')->nullable();
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();
            $table->softDeletes();
            $table->timestamps();
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
