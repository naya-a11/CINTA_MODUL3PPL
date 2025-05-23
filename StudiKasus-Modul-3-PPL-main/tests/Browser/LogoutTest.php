<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')// menekan link 'Log in'
            ->assertPathIs('/login')// memastikan URL saat ini adalah '/login'
            ->type('email','cinta@gmail.com')// mengisi input email
            ->type('password','password')// mengisi input password
            ->check('remember')// mencentang kotak 'remember me'
            ->press('LOG IN')// menekan tombol login
            ->click('#click-dropdown')// mengklik elemen dengan id 'click-dropdown' (biasanya menu dropdown user)
            ->clickLink('Log Out') // mengklik link 'Log Out' di dropdown
            ->assertPathIs('/'); // memastikan diarahkan kembali ke halaman beranda (route '/')
        });
    }
}
