<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Makenotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')// menekan link 'Log in'
            ->assertPathIs('/login')// memastikan saat ini berada di halaman login
            ->type('email','cinta@gmail.com')// mengisi input email
            ->type('password','password')// mengisi input password
            ->check('remember')// mencentang checkbox 'remember me'
            ->press('LOG IN')// menekan tombol login
            ->clickLink('Notes')// masuk ke halaman Notes
            ->assertPathIs('/notes')// memastikan URL adalah '/notes'
            ->clickLink('Create Note')// menekan link untuk membuat catatan baru
            ->assertPathIs('/create-note')// memastikan masuk ke halaman '/create-note'
            ->type('title','Nay')// mengisi judul catatan
            ->type('description','semoga kuliah ini lancara dan dapat kerjaan enak')// mengisi deskripsi catatan
            ->press('CREATE');// menekan tombol 'CREATE' untuk menyimpan catatan
        });
    }
}
