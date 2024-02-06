<?php

namespace App\Http\Controllers;

use App\Materia;
use App\Persona;
use Illuminate\Http\Request;

/**
 * Class MateriaController
 * @package App\Http\Controllers
 */
class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::paginate();

        return view('materia.index', compact('materias'))
            ->with('i', (request()->input('page', 1) - 1) * $materias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = new Materia();
        $Nombre_materia = Materia::pluck('Nombre_materia', 'id'); // Obtén todas las materias
        $personas = Persona::pluck('Nombre', 'id'); // Obtén todas las personas
        return view('materia.create', compact('materia', 'Nombre_materia', 'personas')); // Pasa las materias y las personas a la vista
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materia::$rules);

        $materia = Materia::create($request->all());

        return redirect()->route('materias.index')
            ->with('success', 'Materia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia = Materia::find($id);

        return view('materia.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::find($id);
        $Nombre_materia = Materia::pluck('Nombre_materia', 'id'); // Obtén todas las materias
        $personas = Persona::pluck('Nombre', 'id'); // Obtén todas las personas
        return view('materia.edit', compact('materia', 'Nombre_materia', 'personas')); // Pasa las materias y las personas a la vista
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        request()->validate(Materia::$rules);

        $materia->update($request->all());

        return redirect()->route('materias.index')
            ->with('success', 'Materia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materia = Materia::find($id)->delete();

        return redirect()->route('materias.index')
            ->with('success', 'Materia deleted successfully');
    }
}
