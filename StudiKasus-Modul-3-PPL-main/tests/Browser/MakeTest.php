<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MakeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Make
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengunjungi halaman utama
                    ->assertSee('Log in') // Memastikan teks 'Login' terlihat di halaman
                    ->clickLink('Log in') // Mengklik tautan 'Login'
                    ->assertPathIs('/login') // Memastikan berada di halaman login
                    ->type('email', 'user@gmail.com') // Memasukkan email ke kolom email
                    ->type('password', 'password') // Memasukkan password ke kolom password
                    ->press('LOG IN') // Mengklik tombol LOGIN
                    ->assertPathIs('/dashboard') // Memastikan diarahkan ke dashboard
                    ->assertSee('Note') // Memastikan teks 'Note' terlihat di halaman
                    ->clickLink('Note') // Mengklik tautan 'Note'
                    ->assertPathIs('/notes') // Memastikan diarahkan ke notes
                    ->assertSee('Create Note') // Memastikan teks 'Create Note' terlihat di halaman
                    ->clickLink('Create Note') // Mengklik tautan 'Create Note'
                    ->assertPathIs('/create-note') // Memastikan berada di halaman pembuatan catatan
                    ->type('Title', 'Catatan Test') // Memasukkan judul catatan
                    ->type('Description', 'Ini adalah isi catatan test') // Memasukkan isi catatan
                    ->press('CREATE') // Mengklik tombol CREATE
                    ->assertPathIs(path: '/notes'); // Memastikan diarahkan ke halaman notes
        });
    }
}
