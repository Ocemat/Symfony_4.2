<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture {
    public function load(ObjectManager $manager) {
       for($i = 1; $i <= 10; $i++){
           $article = new Article();
           $article -> setTitle("Titre de l'Article N° $i")
                    -> setContent("<p>Contenu de l'article $i </p>")
                    -> setImage("http://akila.fr/wp-content/uploads/2018/11/ob_530bf2_humour-drole-homme-femme-ordinateur-300x150.jpg")
                    -> setCreatedAt(new \DateTime());
           $manager->persist($article);
       }            
        $manager->flush();
    }
}
