<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableJefe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jefe_asig', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('Nombre');
            $table->string('apell_pat');
            $table->string('apell_mat');
            $table->integer('ficha');
            $table->integer('ext');
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
        Schema::dropIfExists('jefe_asig');
    }
}
