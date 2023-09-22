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
        $chapter->setDescription("Identifier les aliments à longue conservation: Cela inclut les aliments en conserve, les aliments déshydratés, les légumineuses, les céréales complètes, etc. Ces choix alimentaires sont riches en nutriments et ont une durée de conservation prolongée.
        Techniques de stockage pour préserver la fraîcheur: Utiliser des contenants hermétiques, des sacs de stockage sous vide, et éviter l'exposition à l'humidité et à la chaleur pour prolonger la durée de vie des aliments.");
        $manager->persist($chapter);
        $this->addReference('chapter-preparation-et-securite-1', $chapter);

        $chapter2 = new \App\Entity\Chapter();
        $chapter2->setName('Évaluation des Risques et Planification');
        $chapter2->setDescription("Analyse des Risques en Milieux Urbains: Les zones densément peuplées sont susceptibles d'être des foyers d'infection rapide en cas d'apocalypse zombie. Les grandes concentrations de population augmentent les risques de propagation des maladies et rendent l'évacuation plus difficile.
        Avantages des Zones Rurales et Périurbaines: Les zones rurales et périurbaines offrent des avantages cruciaux. Elles sont moins densément peuplées, ce qui signifie moins de zombies potentiellement agressifs. De plus, elles peuvent fournir des ressources naturelles telles que de l'eau potable, des matériaux de construction et des espaces pour cultiver de la nourriture.");
        $manager->persist($chapter2);
        $this->addReference('chapter-preparation-et-securite-2', $chapter2);

        $chapter3 = new \App\Entity\Chapter();
        $chapter3->setName("Techniques de Défense et d'Évasion");
        $chapter3->setDescription("Évaluation des Objets du Quotidien: Dans un monde post-apocalyptique, il est impératif de savoir repérer les objets courants qui peuvent être utilisés comme armes potentielles. Des articles tels que des bâtons, des barres de métal, des outils de jardinage, et même des objets en verre cassé peuvent devenir des moyens de défense cruciaux.
        Techniques de Fabrication: Il est essentiel de maîtriser l'art de la transformation des objets ordinaires en armes fonctionnelles. Cela peut nécessiter des compétences en modification, en renforcement et en assemblage pour optimiser l'efficacité et la durabilité de l'arme improvisée.");
        $manager->persist($chapter3);
        $this->addReference('chapter-preparation-et-securite-3', $chapter3);

        $chapter4 = new \App\Entity\Chapter();
        $chapter4->setName("Approvisionnement en Nourriture et en Eau");
        $chapter4->setDescription("Sélection Éclairée : Apprendre à choisir des aliments qui ont une durée de conservation prolongée, comme les conserves, les aliments déshydratés et les légumineuses. Ces choix alimentaires sont riches en nutriments et ont une durée de conservation prolongée, ce qui en fait des sources fiables de nourriture.
        Techniques de Chasse Responsable : Maîtriser les techniques de chasse responsables est essentiel. Cela inclut la reconnaissance des traces d'animaux, le suivi et les techniques d'approche pour maximiser les chances de succès. La chasse éthique garantit une utilisation responsable des ressources animales.");
        $manager->persist($chapter4);
        $this->addReference('chapter-approvisionnement-alimentation-1', $chapter4);

        $chapter5 = new \App\Entity\Chapter();
        $chapter5->setName('Chasse, Pêche et Agriculture de Survie');
        $chapter5->setDescription("Identification des Proies: Pour chasser avec succès, il est essentiel de savoir identifier les animaux qui peuvent être chassés pour leur viande. Cela inclut la reconnaissance des espèces locales et de leurs habitudes.
        Techniques de Pistage: Les compétences de pistage sont cruciales pour suivre les animaux en toute discrétion. Cela implique d'apprendre à reconnaître les empreintes, les traces et les signes de passage, ainsi que de comprendre les schémas de déplacement des animaux.");
        $manager->persist($chapter5);
        $this->addReference('chapter-approvisionnement-alimentation-2', $chapter5);

        $chapter6 = new \App\Entity\Chapter();
        $chapter6->setName("Gestion des Ressources et du Ravitaillement");
        $chapter6->setDescription("Contexte de Crise : En période de crise, les ressources alimentaires et hydriques deviennent des éléments vitaux pour la survie. Une gestion efficace est cruciale pour la sécurité et le bien-être des individus et des groupes.
        Objectifs de la Gestion : Les principaux objectifs de ce cours sont de garantir une répartition équitable des ressources, d'assurer leur stockage approprié et de gérer les surplus de manière responsable.");
        $manager->persist($chapter6);
        $this->addReference('chapter-approvisionnement-alimentation-3', $chapter6);

        $manager->flush();
    }
}
