<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class indexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPaginaPrincipal()
    {
        $this->visit("/")
        	->see("Servicio de 4 semanas");
    }
}
