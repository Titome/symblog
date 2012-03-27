<?php

namespace Blogger\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testAbout()
    {
        $client = static::createClient();
        
        $crawler = $client->request('GET', '/about');
        
        $this->assertEquals(1, $crawler->filter('h1:contains("About symblog")')->count());
    }
    
    public function testIndex()
    {
        $client = static::createClient();
    
        $crawler = $client->request('GET', '/');
    
        // Check there are some blog entries on the page
        $this->assertTrue($crawler->filter('article.blog')->count() > 0);
        
        // Find the first link, get the title, ensure this is loaded on the next page
        $blogLink = $crawler->filter('article.blog h2 a')->last();
        $blogTitle = $blogLink->text();
        $crawler = $client->click($blogLink->link());
  
        $this->assertEquals(1, $crawler->filter('h2:contains("You\'re either a one or a zero. Alive or dead")')->count(), $blogTitle);
        $this->assertTrue(is_string($blogLink->text()));
    }
}