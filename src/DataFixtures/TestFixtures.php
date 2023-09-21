<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Test;


class TestFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $test = new Test();
        $test->setName('Zombie-RUN-test');
        $test->addQuestion($this->getReference('chapter-zombie-run-1-question'));
        $test->addQuestion($this->getReference('chapter-zombie-run-2-question'));
        $test->addQuestion($this->getReference('chapter-zombie-run-3-question'));

        $manager->persist($test);
        $this->addReference('test-zombie-run', $test);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            QuestionFixtures::class,
        ];
    }

}
