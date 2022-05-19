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
        //
        Schema::table('suppliers', function (Blueprint $table) {
            $table->string('uf', 2)->after('name');
            $table->string('email',150)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     * php artisan migrate:rollback --step=x
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suppliers', function (Blueprint $table) {
            $table->dropColumn(['uf', 'email']);
        });
    }
};
