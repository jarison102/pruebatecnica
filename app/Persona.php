<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Telefono
 * @property $Correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Inscripcione[] $inscripciones
 * @property Materia[] $materias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    protected $table = 'persona'; // Aquí especificas el nombre de la tabla

    static $rules = [
        'Nombre' => 'required',
        'Apellido' => 'required',
        'Telefono' => 'required',
        'Correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre', 'Apellido', 'Telefono', 'Correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripciones()
    {
        return $this->hasMany('App\Inscripcione', 'personaid', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materias()
    {
        return $this->hasMany('App\Materia', 'personaid', 'id');
    }
    public function persona()
    {
        return $this->belongsTo('App\Persona', 'personaid');
    }
}
