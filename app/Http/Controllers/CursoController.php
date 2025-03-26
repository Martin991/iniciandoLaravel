<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function defaultFunction()
    {
        return view('welcome', ['nombreEjemplo' => "YO SOY EL CONTROLLER"]);
    }
    
    public function segundaFuncion($nombreEjemplo = "prueba parametro controller")
    {
        return view('welcome', ['nombreEjemplo' => $nombreEjemplo]);
    }
    
    public function operacionesBasicasFunction($operacion, $x = 0, $y = 0)
    {
        switch ($operacion) {
            case 'suma':
                $rsOperacion = $x + $y;
                return view('welcome', ['rsOperacion' => "La suma de ".$x." + ".$y." es: ".$rsOperacion]);
                break;
            case 'resta':
                $rsOperacion = $x - $y;
                return view('welcome', ['rsOperacion' => "La resta de ".$x." - ".$y." es: ".$rsOperacion]);
                break;
            case 'prod':
                $rsOperacion = $x * $y;
                return view('welcome', ['rsOperacion' => "La multiplicacion de ".$x." * ".$y." es: ".$rsOperacion]);
                break;
            case 'div':
                $rsOperacion = $y != 0 ? $x / $y : "No se puede dividir por 0";
                return view('welcome', ['rsOperacion' => "La division de ".$x." / ".$y." es: ".$rsOperacion]);
                break;
            default:
                return view('welcome', ['rsOperacion' => "Operacion no valida"]);
                break;
        }
    }
}
