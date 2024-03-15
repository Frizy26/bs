<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->string('comment');
            $table->decimal('price', 8, 2);
            $table->year('year');
            $table->timestamps();
            $table->unsignedBigInteger('type_category_id');
            $table->unsignedBigInteger('favourite_id');

            $table->foreign('type_category_id')->references('id')->on('type_categories');
            $table->foreign('favourite_id')->references('id')->on('favourites');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
