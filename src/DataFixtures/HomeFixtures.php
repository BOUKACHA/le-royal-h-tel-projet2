<?php

namespace App\DataFixtures;

use App\Entity\Home;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class HomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $home = new Home();
        $home->setTitre('Bienvenue au Royal Hôtel');
        $home->setTexte("Le Royal Hôtel occupe un immeuble des années 30 et conserve l’esprit art déco de cette époque, de part sa décoration.
        C’est un hôtel qui est aux mains de la même famille depuis les années 40, ce sont trois générations qui se sont relayées depuis.
        C’est un des derniers hôtels indépendants d’une capacité de 30 chambres.");
        $home->setIsActive(true);
        $manager->persist($home);

        $home = new Home();
        $home->setTitre('Bienvenue au Royal Hôtel');
        $home->setTexte("C'est l'été ! Découvrez Nos nouvelles préstation et nos promotions d'été.");
        $home->setIsActive(true);
        $manager->persist($home);

        
        $manager->flush();
    }
}
