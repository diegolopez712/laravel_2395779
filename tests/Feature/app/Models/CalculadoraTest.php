<?php

namespace Tests\Feature\app\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Calculadora; //Incluir el modelo Calculadora


//Pruebas unitarias con phpunit
class CalculadoraTest extends TestCase
{
    /** @test */
    //Caso de prueb 1: Sumar numero positivo menor + un número postivi mayor
    //Ejemplo: numeroMenor 1 y numeroMayor 2
    public function verificarSumaMenorMayorPositivos():void{
        $numero1 = 1;
        $numero2 = 2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->sumar($numero1, $numero2);
        $this->assertEquals(3, $resultado);//Valor esperado, Valor calculado
    }

    //Caso de prueba 2: Sumar 2 números negativos enteros:
    /** @test */
    public function verificarSumaEnterosNegativos():void{
        $numero1 = -1;
        $numero2 = -2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->sumar($numero1, $numero2);
        $this->assertEquals(-3, $resultado);//Valor esperado, Valor calculado
    }

    //Caso de prueba 3: Sumar 2 números negativos enteros:
    /** @test */
    public function verificarSumaFlotantesPositivos():void{
        $numero1 = 1.57;
        $numero2 = 2.31;
        $valorEsperado = $numero1 + $numero2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->sumar($numero1, $numero2);
        $this->assertEquals($valorEsperado, $resultado);//Valor esperado, Valor calculado
    }

    //Caso de prueba 4: Sumar 2 números negativos enteros:
    /** @test */
    public function verificarSumaEnteroNegativoPositivo():void{
        $numero1 = -7;
        $numero2 = 2;
        $valorEsperado = $numero1 + $numero2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->sumar($numero1, $numero2);
        $this->assertEquals($valorEsperado, $resultado);//Valor esperado, Valor calculado
    }

    //Caso de prueba 5: Sumar 2 números negativos enteros:
    /** @test */
    public function verificarSumaFlotantesNegativoPositivo():void{
        $numero1 = -7.39;
        $numero2 = 2.05;
        $valorEsperado = $numero1 + $numero2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->sumar($numero1, $numero2);
        $this->assertEquals($valorEsperado, $resultado);//Valor esperado, Valor calculado
    }


    //Caso de prueba 6: Dividir 2 números enteros negativos:
    /** @test */
    public function verificarDivisionEnterosNegativos():void{
        $numero1 = -9;
        $numero2 = -3;
        $valorEsperado = $numero1 / $numero2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->dividir($numero1, $numero2);
        $this->assertEquals($valorEsperado, $resultado);//Valor esperado, Valor calculado
    }

    //Caso de prueba 7: Dividir un numero entero entre cero:
    /** @test */
    public function verificarDivisionEnteroconCero():void{
        $numero1 = 7;
        $numero2 = 0;
        $valorEsperado = $numero1 / $numero2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->dividir($numero1, $numero2);
        $this->assertEquals($valorEsperado, $resultado);//Valor esperado, Valor calculado
    }

    //Caso de prueba 8: Dividir 2 números flotantes:
    /** @test */
    public function verificarDivisionNumerosFlotantes():void{
        $numero1 = 50.5;
        $numero2 = 21.9;
        $valorEsperado = $numero1 / $numero2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->dividir($numero1, $numero2);
        $this->assertEquals($valorEsperado, $resultado);//Valor esperado, Valor calculado
    }

    //Caso de prueba 9: Dividir 2 caracteres:
    /** @test */
    public function verificarDivisionCaracteres():void{
        $numero1 = "a";
        $numero2 = "b";
        $valorEsperado = $numero1 / $numero2;

        $calculadora = new Calculadora();//instanciar un objeto de la clase Calculadora
        $resultado = $calculadora->dividir($numero1, $numero2);
        $this->assertEquals($valorEsperado, $resultado);//Valor esperado, Valor calculado
    }
}


//Para ejecutar la prueba unitaria se ejeucta
//vendor/bin/phpunit --filter CalculadoraTest