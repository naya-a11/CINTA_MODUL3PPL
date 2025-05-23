<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Editnotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')// menekan link dengan teks 'Log in'
            ->assertPathIs('/login')// memastikan bahwa URL saat ini adalah '/login'
            ->type('email','cinta@gmail.com')// mengisi input email dengan 'cinta@gmail.com'
            ->type('password','password')// mengisi input password dengan 'password'
            ->check('remember')// mencentang checkbox 'remember'
            ->press('LOG IN')// menekan tombol login dengan label 'LOG IN'
            ->clickLink('Notes')// menekan link 'Notes'
            ->assertPathIs('/notes')// memastikan berada di halaman '/notes'
            ->clickLink('Edit')// menekan link 'Edit' pada salah satu catatan
            ->assertPathIs('/edit-note-page/2')// memastikan diarahkan ke halaman edit catatan ke-2
            ->type('title','Nay')// mengisi field 'title' dengan nilai 'Nay'
            ->type('description','semoga kuliah ini lancara dan dapat kerjaan enak lulululu')// mengisi field 'description' dengan harapan
            ->press('UPDATE');// menekan tombol 'UPDATE' untuk menyimpan perubahan
        });
    }
}
