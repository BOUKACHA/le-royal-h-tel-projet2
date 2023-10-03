<?php

namespace App\DataFixtures;

use App\Entity\Salon;
use DateTimeImmutable;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategorieFixtures extends Fixture 
{
    // ---------------PROPRIETES CHAMBRES---------------------//
    public const CHAMBRE_SUPERIEUR = "chambre superieur";
    public const CHAMBRE_EXECUTIVE = "chambre executive";
    public const CHAMBRE_DELUXE = "chambre deluxe";
    public const SUITE = "Suite";

    //-----------------PROPRIETES SALONS-----------------------//
    public const SALON_CASABLANCA = "salon casablanca";
    public const SALON_MADRID = "salon madrid";
    public const SALON_ROME = "salon rome";
    public const SALON_PARIS = "salon paris";

    // ---------------METHODES-----------------------//
    public function load(ObjectManager $manager): void
    {
    //--------------------FIXTURES CHAMBRES & SEUITES-----------//
        $categorie = new Categorie();
        $categorie->setNom("Chambre Deluxe");
        $categorie->setSlug("chambre-deluxe");
        $categorie->setDescription("Lit à baldaquin, imprimés grand siècle, cheminée en marbre, moulures, boiseries et lustres à pampilles,
        séjourner comme un Prince prend ici tout son sens.");
        $categorie->setImageName("chambre-deluxe.jpg");
        $categorie->setUpdatedAt(new DateTimeImmutable());
        $categorie->setIsActive(true);
        $manager->persist($categorie);
        // Créer une référence pour la catégorie "chambre deluxe" que l'on pourra utiliser
        //  dans d'autres fixtures et la catégorie à la constante CHAMBRE_DELUXE 
        $this->addReference(self::CHAMBRE_DELUXE, $categorie); 

        $categorie = new Categorie();
        $categorie->setNom("Chambre Superieur");
        $categorie->setSlug("chambre-superieur");
        $categorie->setDescription("Faites l’expérience dans le style néoclassique le plus authentique, une alliance de confort ultra moderne et de détails historiques
        pleins de charme.Il faut avoir dormi au moins une fois dans nos lits à baldaquin.");
        $categorie->setImageName("chambre-superieur.jpg");
        $categorie->setUpdatedAt(new DateTimeImmutable());
        $categorie->setIsActive(true);
        $manager->persist($categorie);
        $this->addReference(self::CHAMBRE_SUPERIEUR, $categorie);

        $categorie = new Categorie();
        $categorie->setNom("Chambre Executive");
        $categorie->setSlug("chambre-executive");
        $categorie->setDescription("Immergez-vous dans la quintessence du au sein d'une chambre spacieuse et lumineuse.
        Un bureau, un fauteuil, une cheminée et  un majestueux lit à baldaquin rien que pour vous.");
        $categorie->setImageName("chambre-executive.png");
        $categorie->setUpdatedAt(new DateTimeImmutable());
        $categorie->setIsActive(true);
        $manager->persist($categorie);
        $this->addReference(self::CHAMBRE_EXECUTIVE, $categorie);

        $categorie = new Categorie();
        $categorie->setNom("Suite");
        $categorie->setSlug("suite");
        $categorie->setDescription("Certaines suites présentent même des murs arrondis, pour une expérience encore plus authentique du style classique.
        La vue sur le Grand Jardin, au cœur de ces bâtiments historiques, vous coupera le souffle…");
        $categorie->setImageName("suite.png");
        $categorie->setUpdatedAt(new DateTimeImmutable());
        $categorie->setIsActive(true);
        $manager->persist($categorie);
        $this->addReference(self::SUITE, $categorie);

        //--------------FIXTURES SALONS--------------------------//

        $categorie = new Categorie();
        $categorie->setNom('salon Madrid');
        $categorie->setSlug('salon-madrid');
        $categorie->setDescription("Des réunions en petit comité aux réceptions fastueuses, notre savoir-faire ravira 
        vos invités et s'adaptera à vos besoins et à vos envies.");
        $categorie->setImageName("salle madrid.png");

        $categorie->setIsActive(true);
        $manager->persist($categorie);
        $this->addReference(self::SALON_MADRID, $categorie);

        $categorie = new categorie();
        $categorie->setNom('salon Casablanca');
        $categorie->setSlug('salon-casablanca');
        $categorie->setDescription("La décoration élégante évoque la noblesse, et deux entrées, dont l'une donnant sur le Grand Jardin, 
        confèrent au lieu une ambiance calme et sereine, ainsi qu'une discrétion totale.");
        $categorie->setImageName("salle casablanca.png");
        $categorie->setIsActive(true);
        $manager->persist($categorie);
        $this->addReference(self::SALON_CASABLANCA, $categorie);

        $categorie = new categorie();
        $categorie->setNom('salon Rome');
        $categorie->setSlug('salon-rome');
        $categorie->setDescription("La décoration élégante évoque la noblesse, et deux entrées, dont l'une donnant sur le Grand Jardin, 
        confèrent au lieu une ambiance calme et sereine, ainsi qu'une discrétion totale.");
        $categorie->setImageName("salle rome.png");
        $categorie->setIsActive(true);
        $manager->persist($categorie);
        $this->addReference(self::SALON_ROME, $categorie);

        $categorie = new categorie();
        $categorie->setNom('salon Paris');
        $categorie->setSlug('salon-paris');
        $categorie->setDescription("La décoration élégante évoque la noblesse, et deux entrées, dont l'une donnant sur le Grand Jardin, 
        confèrent au lieu une ambiance calme et sereine, ainsi qu'une discrétion totale.");
        $categorie->setImageName("salle paris.png");
        $categorie->setIsActive(true);
        $manager->persist($categorie);
        $this->addReference(self::SALON_PARIS, $categorie); 
        
        $manager->flush();
    }
}
