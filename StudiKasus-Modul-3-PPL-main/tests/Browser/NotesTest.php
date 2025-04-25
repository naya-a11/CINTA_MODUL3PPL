<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')// mengunjungi halaman web dengan route “/”
            ->clickLink('Log in')// menekan link dengan teks 'Log in'
            ->assertPathIs('/login')// memastikan URL saat ini adalah '/login'
            ->type('email', 'user@gmail.com')// mengisi input dengan name="email" dengan 'user@gmail.com'
            ->type('password', 'password')// mengisi input dengan name="password" dengan 'password'
            ->press('LOG IN')// menekan tombol login yang berlabel 'LOG IN'
            ->visit('/dashboard')// mengunjungi halaman dashboard setelah login berhasil
            ->assertSee('Dashboard')// memastikan bahwa teks 'Dashboard' terlihat di halaman
            ->visit('/create-note')// mengunjungi halaman untuk membuat catatan
            ->type('title', 'Notes')// mengisi input dengan name="title" dengan 'Notes'
            ->type('description', 'This is Notes')// mengisi input dengan name="description" dengan 'This is Notes'
            ->press('CREATE');// menekan tombol untuk menyimpan catatan baru yang berlabel 'CREATE'
        });
    }
}
