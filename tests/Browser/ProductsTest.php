<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductsTest extends DuskTestCase
{
    public function testProduct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/produtos/adicionar')
                    ->assertSee('Novo produto');
        });
    }
}
