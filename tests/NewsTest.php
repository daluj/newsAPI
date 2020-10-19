<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class NewsTest extends TestCase
{
    /**
     * Test to check home endpoint
     * Endpoint: /
     * Method: GET
     */
    public function testAPI()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(),
            $this->response->getContent()
        );
    }
}
