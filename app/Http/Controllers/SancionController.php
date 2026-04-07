<?php

namespace App\Http\Controllers;

use App\Models\Multa;
use App\Models\Sancion;
use App\Models\User;
use Illuminate\Http\Request;

class SancionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sanciones = Sancion::with(['alumno', 'vigilante', 'multa'])->get();

        return view('sanciones.index',compact('sanciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   

        $alumnos = User::where('rol', 'alumno')->get();
        $vigilantes = User::where('rol', 'vigilante')->get();
        $multas = Multa::all();

        return view('sanciones.create', compact('alumnos', 'vigilantes', 'multas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sancion::create($request->only('alumno_id', 'vigilante_id', 'multa_id', 'descripcion'));

        return redirect()->back()->with('success', 'Sanción creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sancion = Sancion::findOrFail($id);

        return view('sanciones.show', compact('sancion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $sancion = Sancion::findOrFail($id);
        $alumnos = User::where('rol', 'alumno')->get();
        $vigilantes = User::where('rol', 'vigilante')->get();
        $multas = Multa::all();      

        return view('sanciones.edit', compact('sancion', 'alumnos', 'vigilantes', 'multas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sancion = Sancion::findOrFail($id);

        $sancion->update($request->only('alumno_id', 'vigilante_id', 'multa_id', 'descripcion'));

        return redirect()->back()->with('success', 'Sanción actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sancion = Sancion::findOrFail($id);

        $sancion->delete();

        return redirect()->back()->with('success', 'Sanción eliminada exitosamente.');
    }
}
