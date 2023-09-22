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
        $test->setName('Test sur le cours 1: Préparation et Sécurité');
        $test->addQuestion($this->getReference('chapter-preparation-et-securite-1-question'));
        $test->addQuestion($this->getReference('chapter-preparation-et-securite-2-question'));
        $test->addQuestion($this->getReference('chapter-preparation-et-securite-3-question'));

        $manager->persist($test);
        $this->addReference('test-preparation-et-securite', $test);

        $test2 = new Test();
        $test2->setName('Test sur le cours 2: Approvisionnement et Alimentation');
        $test2->addQuestion($this->getReference('chapter-approvisionnement-alimentation-1-question'));
        $test2->addQuestion($this->getReference('chapter-approvisionnement-alimentation-2-question'));
        $test2->addQuestion($this->getReference('chapter-approvisionnement-alimentation-3-question'));

        $manager->persist($test2);
        $this->addReference('test-approvisionnement-alimentation', $test2);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            QuestionFixtures::class,
        ];
    }

}
