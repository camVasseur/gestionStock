<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i<= 10; $i++){
            $article = new Article();
            $article->setName("article n° $i");
            $article->setPrice(100.00);
            $manager->persist($article);
        }
        $manager->flush();
    }
}
