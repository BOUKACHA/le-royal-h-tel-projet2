<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\Chambre;
use App\DataFixtures\CategorieFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ChambreFixtures extends Fixture 
{
        //----------PROPRIETES-----------------//
        public const CHAMBRE_SUPERIEUR_BALCON = "chambre-superieur-balcon";
        public const CHAMBRE_SUPERIEUR_JARDIN = "chambre-superieur-jardin";
        public const CHAMBRE_SUPERIEUR_PLUS = "chambre-superieur-plus";
        public const DELUXE_STANDARD_BALCON = "deluxe-standard-balcon";
        public const DELUXE_STANDARD_JARDIN = "deluxe-standard-jardin";
        public const DELUXE_WHITE = "deluxe-white";
        public const EXECUTIVE_JARDIN = "executive-jardin";
        public const EXECUTIVE_JARDIN_BALCON = "executive-jardin-balcon";
        public const EXECUTIVE_JARDIN_COUR = "executive-jardin-cour";
        public const EXECUTIVE_JARDIN_SALON = "executive-jardin-salon";
        public const SUITE_DELUXE = "suite-deluxe";
        public const SUITE_ETOILE = "suite-etoile";
        public const SUITE_IMPERIALE_BALDAQUIN = "suite-imperiale-baldaquin";
        public const SUITE_IMPERIALE_ROYAL = "suite-imperiale-royal";
        public const SUITE_VERSAILLES = "suite-versailles";
    
    public function load(ObjectManager $manager): void
    {
        $chambre = new Chambre();
        $chambre ->setNom("Chambre Superieur Balcon");
        $chambre->setSlug("chambre-superieur-balcon");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(550);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_SUPERIEUR));
        $manager->persist($chambre);
        $this->setReference(self::CHAMBRE_SUPERIEUR_BALCON, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre-Supérieur Jardin");
        $chambre->setSlug("chambre-superieur-jardin");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(550);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_SUPERIEUR));
        $manager->persist($chambre);
        $this->setReference(self::CHAMBRE_SUPERIEUR_JARDIN, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre-Supérieur Plus");
        $chambre->setSlug("chambre-superieur-jardin-plus");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(650);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_SUPERIEUR));
        $manager->persist($chambre);
        $this->setReference(self::CHAMBRE_SUPERIEUR_PLUS, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre Deluxe Standard Jardin");
        $chambre->setSlug("chambre-deluxe-standard-jardin");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(680);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_DELUXE));
        $manager->persist($chambre);
        $this->setReference(self::DELUXE_STANDARD_JARDIN, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre Deluxe Standard Balcon");
        $chambre->setSlug("chambre-deluxe-standard-balcon");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(680);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_DELUXE));
        $manager->persist($chambre);
        $this->setReference(self::DELUXE_STANDARD_BALCON, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre Deluxe White");
        $chambre->setSlug("chambre-deluxe-white");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(780);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_DELUXE));
        $manager->persist($chambre);
        $this->setReference(self::DELUXE_WHITE, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre Executive Jardin Salon");
        $chambre->setSlug("chambre-executive-jardin-salon");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(900);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_EXECUTIVE));
        $manager->persist($chambre);
        $this->setReference(self::EXECUTIVE_JARDIN_SALON, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre Executive Jardin");
        $chambre->setSlug("chambre-executive-jardin");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(780);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_EXECUTIVE));
        $manager->persist($chambre);
        $this->setReference(self::EXECUTIVE_JARDIN, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Chambre Executive Jardin Cour");
        $chambre->setSlug("chambre-executive-jardin-cour");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(780);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_EXECUTIVE));
        $manager->persist($chambre);
        $this->setReference(self::EXECUTIVE_JARDIN_COUR, $chambre);


        $chambre = new Chambre();
        $chambre ->setNom("Chambre Executive Jardin Balcon");
        $chambre->setSlug("chambre-executive-jardin-balcon");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(780);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::CHAMBRE_EXECUTIVE));
        $manager->persist($chambre);
        $this->setReference(self::EXECUTIVE_JARDIN_BALCON, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Suite Deluxe");
        $chambre->setSlug("Suite-deluxe");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(999);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::SUITE));
        $manager->persist($chambre);
        $this->setReference(self::SUITE_DELUXE, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Suite Etoile");
        $chambre->setSlug("Suite-etoile");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(999);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::SUITE));
        $manager->persist($chambre);
        $this->setReference(self::SUITE_ETOILE, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Suite Imperiale a baldaquin");
        $chambre->setSlug("Suite-imperiale-a-baldaquin");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(1100);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::SUITE));
        $manager->persist($chambre);
        $this->setReference(self::SUITE_IMPERIALE_BALDAQUIN, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Suite Imperiale Royal");
        $chambre->setSlug("Suite-imperiale-royal");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(1500);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::SUITE));
        $manager->persist($chambre);
        $this->setReference(self::SUITE_IMPERIALE_ROYAL, $chambre);

        $chambre = new Chambre();
        $chambre ->setNom("Suite Versailles");
        $chambre->setSlug("Suite-versailles");
        $chambre->setDescription("A NE PAS OUBLIER");
        $chambre->setTarif(1800);
        $chambre->setIsActive(true);
        $chambre->setCategorie($this->getReference(CategorieFixtures::SUITE));
        $manager->persist($chambre);
        $this->setReference(self::SUITE_VERSAILLES, $chambre);


        $manager->flush();
    }
}
