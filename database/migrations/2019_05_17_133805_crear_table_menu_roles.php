<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableMenuRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_roles', function (Blueprint $table) {
            
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol', 'fk_menurol_rol')->references('id')->on('roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_menu');
            $table->foreign('id_menu', 'fk_menurol_menu')->references('id')->on('menus')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('menu_roles');
    }
}
