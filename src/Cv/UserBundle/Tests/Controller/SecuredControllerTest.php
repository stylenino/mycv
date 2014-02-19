<?php

namespace Cv\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecuredControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/login');
    }

    public function testSecuritycheck()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login_check');
    }

    public function testLogout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/logout');
    }

}
