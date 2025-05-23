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
                    ->clickLink('Log in')// menekan link dengan teks 'Log in'
                    ->assertPathIs('/login')// memastikan bahwa URL saat ini adalah '/login'
                    ->type('email', 'cinta@gmail.com')// mengisi input dengan name="email" dengan 'cinta@gmail.com'
                    ->type('password', 'password') // mengisi input dengan name="password" dengan 'password'
                    ->press('LOG IN') // menekan tombol login yang berlabel 'LOG IN'
                    ->visit('/dashboard')// setelah login, langsung mengunjungi halaman dashboard
                    ->assertSee('Dashboard');// memastikan teks 'Dashboard' terlihat di halaman
        });
    }
}
