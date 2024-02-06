<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $personaid
 * @property $Nombre_materia
 * @property $created_at
 * @property $updated_at
 *
 * @property Inscripcione[] $inscripciones
 * @property Persona $persona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'personaid' => 'required',
		'Nombre_materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['personaid','Nombre_materia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripciones()
    {
        return $this->hasMany('App\Inscripcione', 'materiaid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Persona', 'id', 'personaid');
    }
    

}
