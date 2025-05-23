<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')// menekan link dengan teks 'Register'
                    ->assertPathIs('/register')// memastikan bahwa URL saat ini adalah '/register'
                    ->type('name', 'cinta')// mengisi input dengan name="nname" dengan nilai "cinta
                    ->type('email', 'cinta@gmail.com')// mengisi input dengan name="email" dengan 'cinta@gmail.com'
                    ->type('password', 'password') // mengisi input dengan name="password" dengan 'password'
                    ->type('password_confirmation', 'password')// mengisi input konfirmasi password dengan 'password'
                    ->press('REGISTER')// menekan tombol register yang berlabel 'REGISTER'
                    ->visit('/login');// setelah register, langsung mengunjungi halaman login
        });
    }
}
