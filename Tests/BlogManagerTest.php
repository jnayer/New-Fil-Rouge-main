<?php


namespace Tests\Eologie\Models;

use Eologie\Models\BlogManager;
use PHPUnit\Framework\TestCase;
require "src/config/config.php";

class BlogManagerTest extends TestCase
{
    public function testgetArticles(){
        $BlogManager = new BlogManager();

        $this->assertSame('Article 1', $BlogManager->getArticles()[0]->getTitre());
    }
}