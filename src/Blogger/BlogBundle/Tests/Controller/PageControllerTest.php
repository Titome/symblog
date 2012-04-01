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
    
        $this->assertTrue($crawler->filter('article.blog')->count() > 0);
        
        $blogLink = $crawler->filter('article.blog h2 a')->first();
        $blogTitle = $blogLink->text();
        $crawler = $client->click($blogLink->link());
  
        // Ce test ne marche pas
        $this->assertEquals(1, $crawler->filter('h2:contains("'.trim($blogTitle).'")')->count(), var_dump($blogTitle));
        
        // Mais celui-ci oui ...
        //$this->assertEquals(1, $crawler->filter('h2:contains("A day with Symfony2")')->count(), $blogTitle);
        
        // Alors que $blogTitle = 'A day with Symfony2'
        $this->assertTrue(is_string($blogLink->text()));
    }
    
    public function testContact()
    {
    $client = static::createClient();

    $crawler = $client->request('GET', '/contact');

    $this->assertEquals(1, $crawler->filter('h1:contains("Contact symblog")')->count());

    $form = $crawler->selectButton('Submit')->form();

    $form['contact[name]']    = 'name';
    $form['contact[email]']   = 'email@email.com';
    $form['contact[subject]'] = 'Subject';
    $form['contact[body]']    = 'The comment body must be at least 50 characters long as there is a validation constrain on the 
        Enquiry entity';
        
    $crawler = $client->submit($form);
    
    if ($profile = $client->getProfile())
    {
        $swiftMailerProfiler = $profile->getCollector('swiftmailer');
        
        $this->assertEquals(1, $swiftMailerProfiler->getMessageCount());
        
        $messages = $swiftMailerProfiler->getMessages();
        $message  = array_shift($messages);
        
        $symblogEmail = $client->getContainer()->getParameter('blogger_blog.emails.contact_email');
        
        $this->assertArrayHasKey($symblogEmail, $message->getTo());
    }
    
    $crawler = $client->followRedirect();

    $this->assertEquals(1, 
            $crawler->filter('.blogger-notice:contains("Your contact enquiry was successfully sent. Thank you!")')->count());
    }
}