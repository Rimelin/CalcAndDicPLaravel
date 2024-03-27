<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    public function operacion(Request $request) {
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $operacion = $request->input('operacion');
        switch($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'division':
                if($numero2 != 0){
                $resultado = $numero1 / $numero2;
                }
                else {
                    $resultado = "infinito, no es posible divir entre 0!";
                }
                break;  
            default:
                // Manejo de un caso inesperado
                $resultado = "Operación no válida";
                 break;
        }
    
        return view('calculadora', [
            'resultado' => $resultado,
            'operacion' => $operacion,
            'numero1' => $numero1,
            'numero2' => $numero2
        ]);
    }
}
