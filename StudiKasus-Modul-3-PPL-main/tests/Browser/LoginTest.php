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
            $browser->visit(url: '/')// mengunjungi halaman utama aplikasi
                    ->clickLink('Log in')// mengklik tautan dengan teks 'Log in'
                    ->assertPathIs('/login')// memastikan berada di halaman '/login'
                    ->type('email', 'user@gmail.com')// mengisi input email dengan 'user@gmail.com'
                    ->type('password', 'password')// mengisi input password dengan 'password'
                    ->press('LOG IN')// menekan tombol login yang berlabel 'LOG IN'
                    ->visit('/dashboard')// mengunjungi halaman dashboard setelah login
                    ->assertSee('Dashboard');// memastikan teks 'Dashboard' muncul di halaman
        });
    }
}
