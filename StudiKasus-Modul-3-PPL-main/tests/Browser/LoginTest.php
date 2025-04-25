<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url: '/')
                    ->clickLink('Log in')
                    ->assertPathIs('/login')
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->visit('/dashboard')
                    ->assertSee('Dashboard');
        });
    }
}
