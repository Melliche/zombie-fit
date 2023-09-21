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
        $this->addReference('chapter-preparation-et-securite-1-answer', $answer);

        $answer2 = new \App\Entity\Answer();
        $answer2->setName('Viande fraîche, légumes crus, fruits mûrs');
        $answer2->setValid(false);
        $manager->persist($answer2);
        $this->addReference('chapter-preparation-et-securite-3-answer', $answer2);

        $answer3 = new \App\Entity\Answer();
        $answer3->setName('Produits laitiers, pain frais, œufs crus');
        $answer3->setValid(false);
        $manager->persist($answer3);
        $this->addReference('chapter-preparation-et-securite-3-answer', $answer3);

        $answer2 = new \App\Entity\Answer();
        $answer2->setName('Zombie-ANS-21');
        $answer2->setValid(true);
        $manager->persist($answer2);
        $this->addReference('chapter-zombie-run-21-answer', $answer2);

        $answer22 = new \App\Entity\Answer();
        $answer22->setName('Zombie-ANS-22');
        $answer22->setValid(false);
        $manager->persist($answer22);
        $this->addReference('chapter-zombie-run-22-answer', $answer22);

        $answer23 = new \App\Entity\Answer();
        $answer23->setName('Zombie-ANS-23');
        $answer23->setValid(false);
        $manager->persist($answer23);
        $this->addReference('chapter-zombie-run-23-answer', $answer23);

        $answer3 = new \App\Entity\Answer();
        $answer3->setName('Zombie-ANS-31');
        $answer3->setValid(true);
        $manager->persist($answer3);
        $this->addReference('chapter-zombie-run-31-answer', $answer3);

        $answer32 = new \App\Entity\Answer();
        $answer32->setName('Zombie-ANS-32');
        $answer32->setValid(false);
        $manager->persist($answer32);
        $this->addReference('chapter-zombie-run-32-answer', $answer32);

        $answer33 = new \App\Entity\Answer();
        $answer33->setName('Zombie-ANS-33');
        $answer33->setValid(false);
        $manager->persist($answer33);
        $this->addReference('chapter-zombie-run-33-answer', $answer33);

        $manager->flush();
    }
}
