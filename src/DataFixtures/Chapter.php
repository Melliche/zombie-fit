<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Chapter extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $chapter = new \App\Entity\Chapter();
        $chapter->setName('Zombie-RUN-1');
        $chapter->setDescription('Zombie bule blue bluriefze fziefzehh izeufzeuh izeufhzeiufhz zieufhzeuih');
        $manager->persist($chapter);
        $this->addReference('chapter-zombie-run-1', $chapter);

        $chapter2 = new \App\Entity\Chapter();
        $chapter2->setName('Zombie-RUN-2');
        $chapter2->setDescription('Zombie bule blue bluriefze fziefzehh izeufzeuh izeufhzeiufhz zieufhzeuih');
        $manager->persist($chapter2);
        $this->addReference('chapter-zombie-run-2', $chapter2);

        $chapter3 = new \App\Entity\Chapter();
        $chapter3->setName('Zombie-RUN-3');
        $chapter3->setDescription('Zombie bule blue bluriefze fziefzehh izeufzeuh izeufhzeiufhz zieufhzeuih');
        $manager->persist($chapter3);
        $this->addReference('chapter-zombie-run-3', $chapter3);

        $manager->flush();
    }
}
