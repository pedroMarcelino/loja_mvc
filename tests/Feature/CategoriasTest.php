<?php

namespace Tests\Feature;

use App\Categorias;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoriasTest extends TestCase
{
    use DatabaseTransactions;

    public function testCategorias()
    {
       $categoria = Categorias::create([
            'name' => 'Categ Teste',
            'description' => 'teste',
       ]);

       $this->assertDatabaseHas('categorias', ['name' => 'Categ Teste']);
    }
}
