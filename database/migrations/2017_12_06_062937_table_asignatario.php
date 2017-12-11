<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAsignatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apell_pat');
            $table->string('apell_mat');
            $table->string('dir_organismo');
            $table->string('subdireccion');
            $table->string('gerencia');
            $table->string('departamento');
            $table->integer('ext');
            $table->integer('cve_sub');
            $table->integer('cve_gerencia');
            $table->integer('cve_centro_trabajo');
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
        Schema::dropIfExists('asignatario');
    }
}
