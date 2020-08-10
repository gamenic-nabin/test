<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/admin/login') //Go to the loginpage
                    ->type('email', 'admin@admin.com' )
                    ->type('password', 'password' )
                    ->click('.login-button') //Click the Register link
                    ->assertPathIs('/admin') //Make sure you are in the home page
            //Make sure you see the phrase in the arguement
                    ->assertSee("Dashboard"); 
        });
    }
}
