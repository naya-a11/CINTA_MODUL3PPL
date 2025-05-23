<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Deletenotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log In')// menekan link dengan teks 'Log In'
                    ->assertPathIs('/login') // memastikan bahwa URL saat ini adalah '/login'
                    ->type(field: 'email', value: "cinta@gmail.com")// mengisi input email dengan 'cinta@gmail.com'
                    ->type(field: 'password', value: 'cinta123') // mengisi input password dengan 'cinta123'
                    ->press(button: 'LOG IN')// menekan tombol login yang berlabel 'LOG IN'
                    ->clickLink('Notes')// menekan link dengan teks 'Notes'
                    ->assertPathIs('/notes') // memastikan bahwa URL saat ini adalah '/notes'
                    ->press(button: 'Delete'); // menekan tombol dengan label 'Delete'
                    #->assertPathIs('/notes');// memastikan tetap berada di halaman '/notes' setelah menghapus

        });
    }
}
