<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserLogin extends TestCase
{
    public function testLogin() {
        $this->visit('/login')
            ->type('nsh@gmail.com', 'email')
            ->type('arian', 'password')
            ->press('login')
            ->seePageIs('/home');
    }
}
