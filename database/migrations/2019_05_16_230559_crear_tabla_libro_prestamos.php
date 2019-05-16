<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibroPrestamos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_prestamos', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario','fk_libroprestamo_usuario')->references('id')->on('usuarios')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_libro');
            $table->foreign('id_libro','fk_libroprestamo_libro')->references('id')->on('libros')->onDelete('restrict')->onUpdate('restrict');
            $table->date('fecha_prestamo');
            $table->string('prestado_a',100);
            $table->boolean('estado');
            $table->date('fecha_devolucion')->nullable();
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
        Schema::dropIfExists('libro_prestamos');
    }
}
