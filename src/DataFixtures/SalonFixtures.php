<?php

namespace App\DataFixtures;

use App\Entity\Salon;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SalonFixtures extends Fixture
{
    public const SALON_CASABLANCA = "salon casablanca";
    public const SALON_MADRID = "salon madrid";
    public const SALON_ROME = "salon rome";
    public const SALON_PARIS = "salon paris";

    public function load(ObjectManager $manager): void
    {
        $salon = new Salon();
        $salon ->setNom('Salon Casablanca');
        $salon->setSlug('salon-casablanca');
        $salon->setDescription("La décoration élégante évoque la noblesse, et deux entrées, dont l'une donnant sur le Grand Jardin, 
        confèrent au lieu une ambiance calme et sereine, ainsi qu'une discrétion totale.");
        $salon->setIsActive(true);
        $salon->setCapacite("double");
        $salon->setCategorie($this->getReference(CategorieFixtures::SALON_CASABLANCA));
        $manager->persist($salon);
        $this->setReference(self::SALON_CASABLANCA, $salon);

        $salon = new Salon();
        $salon ->setNom('Salon Madrid');
        $salon->setSlug('salon-madrid');
        $salon->setDescription("La décoration élégante évoque la noblesse, et deux entrées, dont l'une donnant sur le Grand Jardin, 
        confèrent au lieu une ambiance calme et sereine, ainsi qu'une discrétion totale.");
        $salon->setIsActive(true);
        $salon->setCapacite("double");
        $salon->setCategorie($this->getReference(CategorieFixtures::SALON_MADRID));
        $manager->persist($salon);
        $this->setReference(self::SALON_MADRID, $salon);

        $salon = new Salon();
        $salon->setNom('salon Rome');
        $salon->setSlug('salon-rome');
        $salon->setDescription("La décoration élégante évoque la noblesse, et deux entrées, dont l'une donnant sur le Grand Jardin, 
        confèrent au lieu une ambiance calme et sereine, ainsi qu'une discrétion totale.");
        $salon->setIsActive(true);
        $salon->setCapacite("double");
        $salon->setCategorie($this->getReference(CategorieFixtures::SALON_ROME));
        $manager->persist($salon);
        $this->setReference(self::SALON_ROME, $salon);

        $salon = new Salon();
        $salon->setNom('salon Paris');
        $salon->setSlug('salon-paris');
        $salon->setDescription("La décoration élégante évoque la noblesse, et deux entrées, dont l'une donnant sur le Grand Jardin, 
        confèrent au lieu une ambiance calme et sereine, ainsi qu'une discrétion totale.");
        $salon->setIsActive(true);
        $salon->setCapacite("double");
        $salon->setCategorie($this->getReference(CategorieFixtures::SALON_PARIS));
        $manager->persist($salon);
        $this->setReference(self::SALON_PARIS, $salon); 

        $manager->flush();
    }
}
