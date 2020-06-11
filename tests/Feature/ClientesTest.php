<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Client;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientesTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreate()
    {
        $cliente = Client::create([
            'name' => 'Gui Tee',
            'email' => 'email@email.com',
            'address' => 'Teste'
        ]);

        $this->assertDatabaseHas('clients', ['name' => 'Gui Tee']);
    }
}
