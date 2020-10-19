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

    /**
     * Test to check if the endpoint returns all news
     * Endpoint: /api/news
     * Method: GET
     */
    public function testGetNews()
    {
        $data_structure = array(
            'data'  => ['*' => ['name','content']],
            'message'
        );

        $this->json('GET','/api/news')
        ->seeJsonStructure($data_structure)
        ->seeStatusCode(200);
    }

    /**
     * Test to check if the news was created successfully
     * Endpoint: /api/news
     * Method: POST
     */
    public function testCreateNews()
    {
        $data = array(
            'name'      => 'News 1',
            'content'   => 'Some example content created'
        );

        $data_structure = array(
            'data'  => ['name','content'],
            'message'
        );

        $this->json('POST','/api/news',$data)
        ->seeJsonStructure($data_structure)
        ->seeStatusCode(201);

        $this->seeInDatabase('news',$data);
    }
}
