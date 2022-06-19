<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculadora{
//Las funciones en los lenguajes de programación siempre retornan un valor
//Los procedimientos no retornan valor.
    public function sumar($numero1, $numero2){
        $suma = $numero1 + $numero2;
        return $suma;//Funciones
    }

    public function restar($numero1, $numero2){
        $resta = $numero1 - $numero2;
        return $resta;
    }

    public function multiplicar($numero1, $numero2){
        $multiplicacion = $numero1 * $numero2;
        return $multiplicacion;
    }

    public function dividir($numero1, $numero2){
        $division = $numero1 / $numero2;
        return $division;
    }
}
