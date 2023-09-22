<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class AnswerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $answer = new \App\Entity\Answer();
        $answer->setName('Aliments en conserve, aliments déshydratés, céréales complètes');
        $answer->setValid(true);
        $manager->persist($answer);
        $this->addReference('chapter-kit-survie-1-answer', $answer);

        $answer2 = new \App\Entity\Answer();
        $answer2->setName('Viande fraîche, légumes crus, fruits mûrs');
        $answer2->setValid(false);
        $manager->persist($answer2);
        $this->addReference('chapter-kit-survie-2-answer', $answer2);

        $answer3 = new \App\Entity\Answer();
        $answer3->setName('Produits laitiers, pain frais, œufs crus');
        $answer3->setValid(false);
        $manager->persist($answer3);
        $this->addReference('chapter-kit-survie-3-answer', $answer3);

        $answer21 = new \App\Entity\Answer();
        $answer21->setName('Augmentation des risques de propagation des maladies');
        $answer21->setValid(false);
        $manager->persist($answer21);
        $this->addReference('chapter-evaluation-risques-1-answer', $answer21);

        $answer22 = new \App\Entity\Answer();
        $answer22->setName('Moins de densité de population et accès à des ressources naturelles');
        $answer22->setValid(true);
        $manager->persist($answer22);
        $this->addReference('chapter-evaluation-risques-2-answer', $answer22);

        $answer23 = new \App\Entity\Answer();
        $answer23->setName("Facilité d'évacuation en cas d'urgence");
        $answer23->setValid(false);
        $manager->persist($answer23);
        $this->addReference('chapter-evaluation-risques-3-answer', $answer23);

        $answer31 = new \App\Entity\Answer();
        $answer31->setName('Pour transformer des objets courants en armes fonctionnelles');
        $answer31->setValid(true);
        $manager->persist($answer31);
        $this->addReference('chapter-techniques-defenses-evasion-31-answer', $answer31);

        $answer32 = new \App\Entity\Answer();
        $answer32->setName('Pour créer des objets de décoration');
        $answer32->setValid(false);
        $manager->persist($answer32);
        $this->addReference('chapter-techniques-defenses-evasion-32-answer', $answer32);

        $answer33 = new \App\Entity\Answer();
        $answer33->setName('Pour développer des compétences en sculpture');
        $answer33->setValid(false);
        $manager->persist($answer33);
        $this->addReference('chapter-techniques-defenses-evasion-33-answer', $answer33);

        $answer41 = new \App\Entity\Answer();
        $answer41->setName('Ils sont exclusivement adaptés aux régimes végétariens');
        $answer41->setValid(false);
        $manager->persist($answer41);
        $this->addReference('chapter-approvisionnement-alimentation-41-answer', $answer41);

        $answer42 = new \App\Entity\Answer();
        $answer42->setName('Ils nécessitent une réfrigération constante pour rester consommables');
        $answer42->setValid(false);
        $manager->persist($answer42);
        $this->addReference('chapter-approvisionnement-alimentation-42-answer', $answer42);

        $answer43 = new \App\Entity\Answer();
        $answer43->setName('Ils sont riches en nutriments et ont une durée de conservation prolongée');
        $answer43->setValid(true);
        $manager->persist($answer43);
        $this->addReference('chapter-approvisionnement-alimentation-43-answer', $answer43);

        $answer51 = new \App\Entity\Answer();
        $answer51->setName('Savoir cuisiner différentes recettes à base de viande');
        $answer51->setValid(false);
        $manager->persist($answer51);
        $this->addReference('chapter-approvisionnement-alimentation-51-answer', $answer51);

        $answer52 = new \App\Entity\Answer();
        $answer52->setName('Savoir identifier les animaux chassables et maîtriser les techniques de pistage');
        $answer52->setValid(true);
        $manager->persist($answer52);
        $this->addReference('chapter-approvisionnement-alimentation-52-answer', $answer52);

        $answer53 = new \App\Entity\Answer();
        $answer53->setName('Posséder un équipement de chasse sophistiqué');
        $answer53->setValid(false);
        $manager->persist($answer53);
        $this->addReference('chapter-approvisionnement-alimentation-53-answer', $answer53);

        $answer61 = new \App\Entity\Answer();
        $answer61->setName('Pour maximiser les profits');
        $answer61->setValid(false);
        $manager->persist($answer61);
        $this->addReference('chapter-approvisionnement-alimentation-61-answer', $answer61);

        $answer62 = new \App\Entity\Answer();
        $answer62->setName('Pour assurer la sécurité et le bien-être des individus et des groupes');
        $answer62->setValid(false);
        $manager->persist($answer62);
        $this->addReference('chapter-approvisionnement-alimentation-62-answer', $answer62);

        $answer63 = new \App\Entity\Answer();
        $answer63->setName('Pour minimiser les dépenses');
        $answer63->setValid(false);
        $manager->persist($answer63);
        $this->addReference('chapter-approvisionnement-alimentation-63-answer', $answer63);

        $manager->flush();
    }
}
