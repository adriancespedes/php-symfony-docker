<?php

namespace App\Tests\Functional;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DiscountControllerTest extends WebTestCase
{

    public function testInvoke(): void
    {
        $client = static::createClient();
        $client->request('GET', '/discount');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

}