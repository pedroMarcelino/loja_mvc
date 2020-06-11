<?php

namespace Tests\Feature;

use App\Products;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductsTest extends TestCase
{
    use DatabaseTransactions;

    public function testProduct()
    {
        $prod = Products::create([
            'name' => 'Prod Teste',
            'description' => 'Desc 1',
            'price' => '50.00'
        ]);

        $this->assertDatabaseHas('products', ['name' => 'Prod Teste']);
    }
}
