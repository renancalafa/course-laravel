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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 30);
            $table->timestamps();
        });

        // products constraints
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unit');
            $table->foreign('id_unit')->references('id')->on('units');
        });
        //product_details constraint
        Schema::table('product_details', function (Blueprint $table) {
            $table->unsignedBigInteger('id_unit');
            $table->foreign('id_unit')->references('id')->on('units');
        });
    }

    /**
     * Reverse migrations.
     *
     * @return void
     */
    public function down()
    {
        //remove constraints
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_id_unit_foreign');
            $table->dropColumn('id_unit');
        });
        Schema::table('product_details', function (Blueprint $table) {
            $table->dropForeign('product_details_id_unit_foreign');
            $table->dropColumn('id_unit');
        });

        Schema::dropIfExists('units');
    }
};
