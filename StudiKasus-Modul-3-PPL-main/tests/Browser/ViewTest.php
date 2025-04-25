<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group view
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')// mengunjungi halaman web dengan route "/"
            ->clickLink('Log In')// mengklik link yang memiliki teks "Log In"
            ->assertPathIs('/Login')// memastikan URL saat ini adalah "/Login"
            ->type('email', 'user@gmail.com') // mengisi input form dengan name="email" dengan "user@gmail.com"
            ->type('password', 'password')// mengisi input form dengan name="password" dengan "password"
            ->press('LOG IN')// menekan tombol dengan label "LOG IN"
            ->visit('/dashboard')// mengunjungi halaman "/dashboard"
            ->assertSee('Dashboard')// memastikan bahwa terdapat teks "Dashboard" pada halaman
            ->visit('/note/1')// mengunjungi halaman "/note/1" untuk melihat atau mengedit catatan dengan ID 1
            ->assertSee('Notes');// memastikan bahwa terdapat teks "Notes" pada halaman
        });
    }
}
