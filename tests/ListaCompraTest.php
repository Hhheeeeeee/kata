<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;

//use ListaCompraTest;
//namespace Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{

    //private StringCalculator $calculator;
    private ListaCompra $listaCompra;
    protected function setUp(): void
    {
        parent::setUp();
        $this->listaCompra = new ListaCompra();
    }
    /**
     * @test
     */
    public function givenAñadirInstructionWithOneItemReturnsItemAndItsQuantity()
    {
        self::assertEquals("pan x1", $this->listaCompra->manageListaCompra("añadir pan"));
    }

    /**
     * @test
     */
    public function givenAñadirInstructionWithExistingItemReturnsItemAndItsNewQuantity()
    {
        self::assertEquals("pan x3", $this->listaCompra->manageListaCompra("añadir Pan 2"));
    }

    /**
     * @test
     */
    public function givenAñadirIntructionWithTwodifferentItemsReturnsItemsAndTheirQuantity()
    {

    }


    /*
    Añadir productos
    ● Instrucción: añadir <nombre> [cantidad]
    ● Si no se indica cantidad, se asume 1.
    ● Si el producto ya existe en la lista, se suma la nueva cantidad a la anterior.
    ● Ejemplos:
    ○ añadir pan → "pan x1"
    ○ añadir Pan 2 → "pan x3"
    */
}
