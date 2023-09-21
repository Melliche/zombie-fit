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
        $course->setName('Préparation et sécurité');

        $course->addChapter($this->getReference('chapter-preparation-et-securite-1'));
        $course->addChapter($this->getReference('chapter-preparation-et-securite-2'));
        $course->addChapter($this->getReference('chapter-preparation-et-securite-3'));
        $course->setTest($this->getReference('test-preparation-et-securite'));

        $manager->persist($course);

        $course2 = new \App\Entity\Course();
        $course2->setName('Zombie-RUN');

        $course2->addChapter($this->getReference('chapter-zombie-run-1'));
        $course2->addChapter($this->getReference('chapter-zombie-run-2'));
        $course2->addChapter($this->getReference('chapter-zombie-run-3'));
        $course2->setTest($this->getReference('test-zombie-run'));

        $manager->persist($course2);

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
