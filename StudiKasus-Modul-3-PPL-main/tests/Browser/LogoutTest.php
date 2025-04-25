<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengunjungi halaman utama
            ->assertSee('Log in') // Memastikan teks 'Log in' terlihat di halaman
            ->clickLink('Log in') // Mengklik tautan 'Log in'
            ->assertPathIs('/login') // Memastikan berada di halaman login
            ->type('email', 'admin@gmail.com') // Memasukkan email ke kolom email
            ->type('password', 'password') // Memasukkan password ke kolom password
            ->press('LOGIN') // Mengklik tombol LOGIN
            ->assertPathIs('/dashboard') // Memastikan diarahkan ke dashboard
            ->assertSee('admin@gmail.com') // Memastikan email user terlihat
            ->click('#user-menu-button') // Mengklik tombol menu user
            ->pause(1000) // Menunggu 1 detik untuk menu muncul
            ->clickLink('Log Out') // Mengklik tautan Log Out
            ->assertPathIs('/') // Memastikan diarahkan ke halaman utama
            ->assertSee('Log in') // Memastikan tombol login terlihat
            ->assertDontSee('admin@gmail.com'); // Memastikan email user tidak terlihat lagi

        });
    }
}
