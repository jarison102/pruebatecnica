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
               //
               Schema::create('inscripciones', function (Blueprint $table) {
                $table->engine = "InnoDB"; // Establece el motor de almacenamiento de la tabla en InnoDB.
                $table->bigIncrements('id'); // Crea una columna de clave primaria autoincremental de tipo BIGINT.
                $table->bigInteger('personaid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de categoría.
                $table->bigInteger('materiaid')->unsigned(); // Crea una columna de tipo BIGINT sin signo para la clave externa de categoría.
                $table->timestamps(); // Crea automáticamente columnas de registro de fecha y hora para la creación y actualización.
                // Crea una restricción de clave externa que relaciona la columna 'categoria_id' en la tabla 'libros'
                // con la columna 'id' en la tabla 'categorias' y establece la acción de eliminación en cascada.
    /*
                        $table->foreign('personaid'): Esto define una clave foránea en la columna personaid de la tabla actual.
                        ->references('id'): Esto especifica que la clave foránea personaid hace referencia a la columna id.
                        ->on('persona'): Esto especifica que la columna id a la que se hace referencia está en la tabla persona.
                        ->onDelete("cascade"): Esto especifica que cuando se elimine un registro en la tabla persona, también se deben eliminar todos los registros en la tabla actual que tengan el mismo personaid.
    */
                $table->foreign('personaid')->references('id')->on('persona')->onDelete("cascade");
                $table->foreign('materiaid')->references('id')->on('materias')->onDelete("cascade");
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
