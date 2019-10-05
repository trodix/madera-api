<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginTest extends WebTestCase
{

    public function testLogin(){

        $client = static::createClient();
        $client->request('POST', '/api/login_check', [], [],
            [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ],
            json_encode([
                'username' => 'admin@madera.com',
                'password' => 'madera2019'
            ])
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

}
