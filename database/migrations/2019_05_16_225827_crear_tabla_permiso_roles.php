<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisoRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_roles', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol','fk_permisorol_rol')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('id_permiso')->unsigned();
            $table->foreign('id_permiso','fk_permisorol_permiso')->references('id')->on('permisos')->onDelete('restrict')->onUpdate('restrict');
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_roles');
    }
}
