<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoriesTest extends DuskTestCase
{
    public function testCategories()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/categorias/adicionar')
                    ->assertSee('Nova categoria');
        });
    }
}
