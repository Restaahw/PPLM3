<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                ->Clicklink('Register')
                ->assertPathIs('/register')
                ->type('name', 'Resta Auzan')
                ->type('email', 'restaauzan@gmail.com')
                ->type('password', 'gokil')
                ->type('password_confirmation', 'gokil')
                ->press('REGISTER')
                ->assertPathIs('/dashboard')
                ->creenshot('regis');
                ;
        });
    }
}