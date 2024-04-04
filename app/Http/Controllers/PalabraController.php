<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Palabra;
use App\Models\Sinonimo;
use App\Http\Requests\StorePalabraRequest;
use App\Http\Requests\UpdatePalabraRequest;

class PalabraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sinonimo');
    }

    public function buscarSinonimos(Request $request) {
        // Validar el campo de entrada de la palabra
        $request->validate([
            'palabra' => 'required|string',
        ]);
        $sinonimos="";
        // Obtener la palabra ingresada por el usuario
        $input = $request->input('palabra');
    
        // Definir la variable $mensaje
        $mensaje = 'La palabra no se encontró en la base de datos.';
    
        // Consultar la palabra por su nombre
        $palabra = Palabra::where('nombre', $input)->first();
    
        // Verificar si se encontró la palabra
        if ($palabra) {
            // Obtener los sinónimos asociados a la palabra
            $sinonimos = $palabra->sinonimos->pluck('nombre')->toArray();
    
            // Devolver los sinónimos al usuario
            if (!empty($sinonimos)) {
                return view('sinonimo', ['palabra' => $palabra, 'sinonimos' => $sinonimos]);
            } else {
                return view('sinonimo', ['palabra' => $palabra, 'mensaje' => $mensaje]);
            }
        }
    
        // La palabra no se encontró en la base de datos o no tiene sinónimos
        return view('sinonimo', ['mensaje' => $mensaje, 'palabra' => $input]);
    }
    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePalabraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Palabra $palabra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Palabra $palabra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePalabraRequest $request, Palabra $palabra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Palabra $palabra)
    {
        //
    }
}
