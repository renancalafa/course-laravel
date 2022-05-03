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
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->string('society', 50);
            $table->timestamps();
        });

        Schema::create('products_societies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_society');
            $table->decimal('price', 8, 2);
            $table->integer('min_stock');
            $table->integer('max_stock');
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_society')->references('id')->on('societies');
        });

        //removing product specific columns
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['price_sell', 'min_stock', 'max_stock']);
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('product_details', function (Blueprint $table) {
        //     $table->dropForeign('products_societies_id_product_foreign');
        //     $table->dropColumn('id_product');
        //     $table->dropForeign('products_societies_id_society_foreign');
        //     $table->dropColumn('id_society');
        // });

        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price_sell', 8, 2)->default(0.01);
            $table->integer('min_stock')->default(1);
            $table->integer('max_stock')->default(1);
        });

        
        Schema::dropIfExists('products_societies');
        Schema::dropIfExists('societies');
    }
};
