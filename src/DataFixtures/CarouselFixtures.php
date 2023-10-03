<?php

namespace App\DataFixtures;

use App\Entity\Carousel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarouselFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $carousel = new Carousel();
        $carousel->setRankNumber(1);
        $carousel->setTag("home");
        $carousel->setIsActive(true);
        $carousel->setImageName("carousel-miroir.webp");
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setRankNumber(2);
        $carousel->setTag("home");
        $carousel->setIsActive(true);
        $carousel->setImageName("carousel-picine.webp");
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setRankNumber(3);
        $carousel->setTag("home");
        $carousel->setIsActive(true);
        $carousel->setImageName("carousel-royale.webp");
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setRankNumber(4);
        $carousel->setTag("home");
        $carousel->setIsActive(true);
        $carousel->setImageName("carousel-seminaire.webp");
        $manager->persist($carousel);


        $manager->flush();
    }
}
