<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsarioRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_roles', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol','fk_usuariorol_rol')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario','fk_usuariorol_usuario')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('estado');
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
        Schema::dropIfExists('usuario_roles');
    }
}
