<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestRepository::class)]
class Test
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'test', targetEntity: Question::class, orphanRemoval: true)]
    private Collection $questions;

    #[ORM\OneToOne(mappedBy: 'test', cascade: ['persist', 'remove'])]
    private ?Course $course = null;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setTest($this);
        }

        return $this;
    }

    public function removeQuestion(question $question): static
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getTest() === $this) {
                $question->setTest(null);
            }
        }

        return $this;
    }

    public function getCourse(): ?Course
    {
        return $this->course;
    }

    public function setCourse(Course $course): static
    {
        // set the owning side of the relation if necessary
        if ($course->getTest() !== $this) {
            $course->setTest($this);
        }

        $this->course = $course;

        return $this;
    }
}
