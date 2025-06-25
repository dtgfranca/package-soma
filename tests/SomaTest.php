<?php

namespace Dtgfranca\PackageSoma\Tests;

use Dtgfranca\PackageSoma\Calculadora;
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
   public function testSoma(): void
   {
       $calculador = new Calculadora();
       $resultado = $calculador->soma(2, 3);
       $this->assertEquals(5, $resultado);
   }
    public function testSomaComCasaDecimal(): void
    {
        $calculador = new Calculadora();
        $resultado = $calculador->soma(2.3, 3.3);
        $this->assertEquals(5.6, $resultado);
    }
}