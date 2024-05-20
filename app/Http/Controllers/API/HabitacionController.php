<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habitaciones = Habitacion::all();
        return response()->json($habitaciones);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $habitacion = Habitacion::create($request->all());
        return response()->json($habitacion, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $habitacion = Habitacion::findOrFail($id);
        return response()->json($habitacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $habitacion = Habitacion::findOrFail($id);
        $habitacion->update($request->all());
        return response()->json($habitacion, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $habitacion = Habitacion::findOrFail($id);
        $habitacion->delete();
        return response()->json(null, 204);
    }
}
