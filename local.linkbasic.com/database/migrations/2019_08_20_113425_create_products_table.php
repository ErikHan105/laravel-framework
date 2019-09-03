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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('model');
            $table->integer('category');
            $table->string('html_name');
            $table->string('page_title');
            $table->string('search_keyword');
            $table->text('page_desc');
            $table->text('list_img');
            $table->text('detail_img');
            $table->text('introduction');
            $table->text('product_desc');
            $table->longText('technical');
            $table->longText('order_info');
            $table->integer('featured_num');
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
