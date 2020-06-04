<?php

namespace Tests\Feature;

use App\Http\Controllers\VendedoresController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VendedoresControllerTest extends TestCase
{
    private $vendedores;

    public function __construct()
    {
        parent::__construct();
        $this->vendedores = new VendedoresController;
    }

    public function testCheckVendedor(){
        $this->assertTrue($this->vendedores->checkVendedor(1));
        $this->assertTrue($this->vendedores->checkVendedor(2));
    }

    public function testGetVendedor(){
        $this->assertEquals('Marcos', $this->vendedores->getVendedor(1));
    }

    public function testIndex(){
        $this->assertJson($this->vendedores->getJSON());
    }

    // Exercícios
    public function testCheckFalseVendedor(){
        $this->assertFalse($this->vendedores->checkVendedor(100));
    }

    public function testIfString()
    {
        $this->assertIsString($this->vendedores->welcomeMessage() );
    }

    public function testIfNum()
    {
        $this->assertIsNumeric($this->vendedores->getAnoAtual() );
    }
}
