<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Edit
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
            ->visit('/edit-notes-page/1')// mengunjungi halaman untuk mengedit catatan dengan ID 1
            ->type('title', 'Notes1')// mengisi input dengan name="title" dengan 'Notes1'
            ->type('description', 'This is Notes1')// mengisi ulang input dengan name="description" dengan 'This is Notes1'
            ->press('UPDATE');// menekan tombol yang berlabel 'UPDATE' untuk menyimpan perubahan
        });
    }
}
