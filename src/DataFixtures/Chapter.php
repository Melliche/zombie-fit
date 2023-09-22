<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Chapter extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $chapter = new \App\Entity\Chapter();
        $chapter->setName("Constitution d'un Kit de Survie");
        $chapter->setDescription("Identifier les aliments à longue conservation: Cela inclut les aliments en conserve, les aliments déshydratés, les légumineuses, les céréales complètes, etc.");
        $manager->persist($chapter);
        $this->addReference('chapter-preparation-et-securite-1', $chapter);

        $chapter2 = new \App\Entity\Chapter();
        $chapter2->setName('Évaluation des Risques et Planification');
        $chapter2->setDescription("Analyse des Risques en Milieux Urbains: Les zones densément peuplées sont susceptibles d'être des foyers d'infection rapide en cas d'apocalypse zombie.");
        $manager->persist($chapter2);
        $this->addReference('chapter-preparation-et-securite-2', $chapter2);

        $chapter3 = new \App\Entity\Chapter();
        $chapter3->setName("Techniques de Défense et d'Évasion");
        $chapter3->setDescription("Évaluation des Objets du Quotidien: Dans un monde post-apocalyptique, il est impératif de savoir repérer les objets courants qui peuvent être utilisés comme armes potentielles.");
        $manager->persist($chapter3);
        $this->addReference('chapter-preparation-et-securite-3', $chapter3);

        $chapter4 = new \App\Entity\Chapter();
        $chapter4->setName("Approvisionnement en Nourriture et en Eau");
        $chapter4->setDescription("Sélection Éclairée : Apprendre à choisir des aliments qui ont une durée de conservation prolongée, comme les conserves.");
        $manager->persist($chapter4);
        $this->addReference('chapter-approvisionnement-alimentation-1', $chapter4);

        $chapter5 = new \App\Entity\Chapter();
        $chapter5->setName('Chasse, Pêche et Agriculture de Survie');
        $chapter5->setDescription("Identification des Proies: Pour chasser avec succès, il est essentiel de savoir identifier les animaux qui peuvent être chassés pour leur viande.");
        $manager->persist($chapter5);
        $this->addReference('chapter-approvisionnement-alimentation-2', $chapter5);

        $chapter6 = new \App\Entity\Chapter();
        $chapter6->setName("Gestion des Ressources et du Ravitaillement");
        $chapter6->setDescription("Contexte de Crise : En période de crise, les ressources alimentaires et hydriques deviennent des éléments vitaux pour la survie.");
        $manager->persist($chapter6);
        $this->addReference('chapter-approvisionnement-alimentation-3', $chapter6);

        $manager->flush();
    }
}
