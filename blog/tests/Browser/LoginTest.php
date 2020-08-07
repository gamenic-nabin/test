<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserLoginTest extends DuskTestCase
{
    /** @test */
    public function it_asserts_that_user_can_login()
    {
        $users = User::all();
        foreach($users as $user) {
            $this->browse(function (Browser $browser) {
                $browser->visit('/admin/login')
                    ->assertSee('Sign In Below')
                    ->type('email', 'admin@amdin.com')
                    ->type('password', 'password')
                    ->press('login')
                    ->assertPathsIs('/admin')
                    ->assertSee(' Dashboard')
                    ->assertAuthenticated();
            });
        }
    }
}