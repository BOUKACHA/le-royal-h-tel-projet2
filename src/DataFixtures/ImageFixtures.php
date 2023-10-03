<?php

namespace App\DataFixtures;

use App\Entity\Image;
use DateTimeImmutable;
use App\DataFixtures\ChambreFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ImageFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        //---------------------IMAGES CHAMBRES------------------------//
        $image = new Image();
        $image->setImageName('chambre-superieur-balcon.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::CHAMBRE_SUPERIEUR_BALCON));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('chambre-superieur-jardin.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::CHAMBRE_SUPERIEUR_JARDIN));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('chambre-superieur-plus.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::CHAMBRE_SUPERIEUR_PLUS));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('deluxe-standard-balcon.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::DELUXE_STANDARD_BALCON));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('deluxe-standard-jardin-terrasse.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::DELUXE_STANDARD_BALCON));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('deluxe-white.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::DELUXE_WHITE));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('executive-jardin-.png');
        $image->setChambre($this->getReference(ChambreFixtures::EXECUTIVE_JARDIN));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('executive-jardin-balcon.png');
        $image->setChambre($this->getReference(ChambreFixtures::EXECUTIVE_JARDIN_BALCON));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('executive-jardin-cour.png');
        $image->setChambre($this->getReference(ChambreFixtures::EXECUTIVE_JARDIN_COUR));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('executive-jardin-salon.png');
        $image->setChambre($this->getReference(ChambreFixtures::EXECUTIVE_JARDIN_SALON));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('suite-deluxe.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::SUITE_DELUXE));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('suite-etoile.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::SUITE_ETOILE));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('suite-imperiale-baldaquin.png');
        $image->setChambre($this->getReference(ChambreFixtures::SUITE_IMPERIALE_BALDAQUIN));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('suite-imperiale-royal.png');
        $image->setChambre($this->getReference(ChambreFixtures::SUITE_IMPERIALE_ROYAL));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('suite-versailles.jpg');
        $image->setChambre($this->getReference(ChambreFixtures::SUITE_VERSAILLES));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        //-------------------------IMAGES SALONS---------------------------//

        $image = new Image();
        $image->setImageName('salle casablanca.png');
        $image->setSalon($this->getReference(SalonFixtures::SALON_CASABLANCA));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('salle madrid.png');
        $image->setSalon($this->getReference(SalonFixtures::SALON_MADRID));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('salle paris.png');
        $image->setSalon($this->getReference(SalonFixtures::SALON_PARIS));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $image = new Image();
        $image->setImageName('salle rome.png');
        $image->setSalon($this->getReference(SalonFixtures::SALON_ROME));
        $image->setUpdatedAt(new DateTimeImmutable());
        $image->setRankOrder(1);
        $manager->persist($image);

        $manager->flush();
    }
    public function getDependencies():array{
        return[
            ChambreFixtures::class,
            SalonFixtures::class
        ];
        
    }
}
