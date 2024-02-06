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
                Schema::create('Persona', function (Blueprint $table) {
                    $table->engine="InnoDB";
                    $table->bigIncrements('id');
                    //$table->bigInteger('materiasid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de categoría.
                    $table->string('Nombre');
                    $table->string('Apellido');
                    $table->string('Telefono');
                    $table->string('Correo');
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
        //
    }
};
