<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminTest extends TestCase {

    public function testShowAdminLogin() {
        $this->visit('/admin')->seePageIs('/admin');
    }

    public function testDoAdminLogin(){
        $this->visit('/adminlogin')
            ->type('abn9271@gmail.com','email')
            ->type('cockroach','password')
            ->press('ورود')
            ->seePageIs('/admin');
    }
}