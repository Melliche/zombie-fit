<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class QuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $question = new \App\Entity\Question();
        $question->setName('Zombie-QUES-1');
        $question->addAnswer($this->getReference('chapter-zombie-run-1-answer'));
        $question->addAnswer($this->getReference('chapter-zombie-run-12-answer'));
        $question->addAnswer($this->getReference('chapter-zombie-run-13-answer'));
        $manager->persist($question);
        $this->addReference('chapter-zombie-run-1-question', $question);

        $question2 = new \App\Entity\Question();
        $question2->setName('Zombie-QUES-2');
        $question2->addAnswer($this->getReference('chapter-zombie-run-21-answer'));
        $question2->addAnswer($this->getReference('chapter-zombie-run-22-answer'));
        $question2->addAnswer($this->getReference('chapter-zombie-run-23-answer'));
        $manager->persist($question2);
        $this->addReference('chapter-zombie-run-2-question', $question2);

        $question3 = new \App\Entity\Question();
        $question3->setName('Zombie-QUES-3');
        $question3->addAnswer($this->getReference('chapter-zombie-run-31-answer'));
        $question3->addAnswer($this->getReference('chapter-zombie-run-32-answer'));
        $question3->addAnswer($this->getReference('chapter-zombie-run-33-answer'));
        $manager->persist($question3);
        $this->addReference('chapter-zombie-run-3-question', $question3);

        $manager->flush();
    }
}
