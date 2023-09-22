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
        $question->setName("Quels sont des exemples d'aliments à longue conservation ?");
        $question->addAnswer($this->getReference('chapter-kit-survie-1-answer'));
        $question->addAnswer($this->getReference('chapter-kit-survie-2-answer'));
        $question->addAnswer($this->getReference('chapter-kit-survie-3-answer'));
        $manager->persist($question);
        $this->addReference('chapter-preparation-et-securite-1-question', $question);

        $question2 = new \App\Entity\Question();
        $question2->setName("Quel avantage les zones rurales et périurbaines offrent-elles en cas d'apocalypse zombie ?");
        $question2->addAnswer($this->getReference('chapter-evaluation-risques-1-answer'));
        $question2->addAnswer($this->getReference('chapter-evaluation-risques-2-answer'));
        $question2->addAnswer($this->getReference('chapter-evaluation-risques-3-answer'));
        $manager->persist($question2);
        $this->addReference('chapter-preparation-et-securite-2-question', $question2);

        $question3 = new \App\Entity\Question();
        $question3->setName("Quelle est l'importance de maîtriser les techniques de fabrication d'armes improvisées dans un contexte post-apocalyptique ?");
        $question3->addAnswer($this->getReference('chapter-techniques-defenses-evasion-31-answer'));
        $question3->addAnswer($this->getReference('chapter-techniques-defenses-evasion-32-answer'));
        $question3->addAnswer($this->getReference('chapter-techniques-defenses-evasion-33-answer'));
        $manager->persist($question3);
        $this->addReference('chapter-preparation-et-securite-3-question', $question3);

        $question4 = new \App\Entity\Question();
        $question4->setName("Quels sont les avantages des choix alimentaires tels que les conserves, les aliments déshydratés et les légumineuses en situation de survie ?");
        $question4->addAnswer($this->getReference('chapter-approvisionnement-1-answer'));
        $question4->addAnswer($this->getReference('chapter-approvisionnement-2-answer'));
        $question4->addAnswer($this->getReference('chapter-approvisionnement-3-answer'));
        $manager->persist($question4);
        $this->addReference('chapter-approvisionnement-alimentation-1-question', $question4);

        $question5 = new \App\Entity\Question();
        $question5->setName("Quelles sont les compétences essentielles pour chasser avec succès en milieu sauvage ?");
        $question5->addAnswer($this->getReference('chapter-milieu-sauvage-1-answer'));
        $question5->addAnswer($this->getReference('chapter-milieu-sauvage-2-answer'));
        $question5->addAnswer($this->getReference('chapter-milieu-sauvage-3-answer'));
        $manager->persist($question5);
        $this->addReference('chapter-approvisionnement-alimentation-2-question', $question5);

        $question6 = new \App\Entity\Question();
        $question6->setName("Pourquoi une gestion efficace des ressources alimentaires et hydriques est-elle cruciale en période de crise ?");
        $question6->addAnswer($this->getReference('chapter-gestion-ressources-1-answer'));
        $question6->addAnswer($this->getReference('chapter-gestion-ressources-2-answer'));
        $question6->addAnswer($this->getReference('chapter-gestion-ressources-3-answer'));
        $manager->persist($question6);
        $this->addReference('chapter-approvisionnement-alimentation-3-question', $question6);

        $manager->flush();
    }
}
