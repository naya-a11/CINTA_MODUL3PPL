<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Shownotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')// menekan link 'Log in'
            ->assertPathIs('/login')// memastikan berada di halaman login
            ->type('email','cinta@gmail.com')// mengisi input email
            ->type('password','password')// mengisi input password
            ->check('remember')// mencentang checkbox 'remember me'
            ->press('LOG IN')// menekan tombol login
            ->clickLink('Notes')// masuk ke halaman Notes
            ->assertPathIs('/notes')// memastikan URL saat ini adalah '/notes'
            ->assertsee('Author');// memastikan teks 'Author' muncul di halaman

        });
    }
}
