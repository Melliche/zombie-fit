<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;


class Course extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        $course = new \App\Entity\Course();
        $course->setName('Zombie-RUN');

        $course->addChapter($this->getReference('chapter-zombie-run-1'));
        $course->addChapter($this->getReference('chapter-zombie-run-2'));
        $course->addChapter($this->getReference('chapter-zombie-run-3'));
        $course->setTest($this->getReference('test-zombie-run'));

        $manager->persist($course);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            Chapter::class, // Indiquez que cette fixture dépend de la fixture Course
            TestFixtures::class,
        ];
    }
}
