<?php

namespace App\Http\Controllers;

use App\Models\Ponente;
use Illuminate\Http\Request;
use App\Http\Requests\PonenteRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PonenteCollection;
use App\Traits\ImageHandler;

class PonenteController extends Controller
{
    use ImageHandler;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PonenteCollection(Ponente::orderBy('nombre', 'ASC')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PonenteRequest $request)
    {
        $datos = $request->validated();
        $imagen = $request->imagen->store('img', "public");
        $datos['imagen'] = Storage::url($imagen);

        $ponente = Ponente::create([
            'nombre' => $datos['nombre'],
            'apellido' => $datos['apellido'],
            'ciudad' => $datos['ciudad'],
            'pais' => $datos['pais'],
            'imagen' => $datos['imagen'],
            'redes' => $datos['redes'] ?? null,
            'areas' => $datos['areas'] ?? null,
        ]);


        // return response()->json([
        //     'message' => 'Ponente creado correctamente',
        //     'ponente' => $ponente
        // ], 201);

        return [
            "type" => "success",
            "ponente" => $ponente,
            'message' => 'Ponente creado correctamente',
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
