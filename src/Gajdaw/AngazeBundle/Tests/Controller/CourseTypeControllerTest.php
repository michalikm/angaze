<?php

namespace Gajdaw\AngazeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CourseTypeControllerTest extends WebTestCase
{

    public function testUrlIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/coursetype/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /coursetype/");

        $this->assertEquals(1, $crawler->filter('td:contains("licencjackie")')->count(), 'Missing element td:contains("licencjackie")');
        $this->assertEquals(1, $crawler->filter('td:contains("magisterskie")')->count(), 'Missing element td:contains("magisterskie")');
        $this->assertEquals(1, $crawler->filter('td:contains("inżynierskie")')->count(), 'Missing element td:contains("inżynierskie")');
    }/*
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'gajdaw_angazebundle_coursetypetype[field_name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'gajdaw_angazebundle_coursetypetype[field_name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    */
}