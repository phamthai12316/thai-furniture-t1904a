<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id'); // PK + unsigned  big integer + auto increment
            $table->string('product_name',191)->unique();// unique là index: k quá 191 kí tự -> lỗi
            $table->string('product_desc')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('gallery')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->decimal('price',12,4); // tien viet la 16,0
            $table->unsignedInteger('quantity')->default(1);
            $table->timestamps();
            // khóa ngoại
            $table->foreign('category_id') -> references('id')->on('category');
            $table->foreign('brand_id') -> references('id')->on('brand');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
