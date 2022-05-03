<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->float('legth', 8, 2);
            $table->float('width', 8, 2);
            $table->float('height', 8, 2);
            $table->unsignedBigInteger('id_product');
            $table->timestamps();

            //constraint
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->unique('id_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
};
