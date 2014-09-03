<?php

namespace ByHours\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookingControllerTest extends WebTestCase
{
    public function testStep1()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/step1');
    }

    public function testStep2()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/step2');
    }

    public function testSavebooking()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/saveBooking');
    }

}
