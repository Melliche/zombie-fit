<?php

namespace App\Controller;

use App\Form\TestFormType;
use App\Repository\AnswerRepository;
use App\Repository\ChapterRepository;
use App\Repository\CourseRepository;
use App\Repository\QuestionRepository;
use App\Repository\TestRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\DTO\TestAnswerDTO;
use App\Form\TestAnswerFormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormInterface;
use Doctrine\Persistence\ManagerRegistry;


class CourseController extends AbstractController
{
    #[Route('/course/{id}', name: 'app_course', methods: ['GET', 'POST'])]
    public function index(Request $request, CourseRepository $courseRepository, ChapterRepository $chapterRepository, QuestionRepository $questionRepository, AnswerRepository $answerRepository, TestRepository $testRepository, ManagerRegistry $doctrine, $id): Response
    {

        $course = $courseRepository->find($id);
        $chapters = $course->getChapters();
        $test = $course->getTest();
        $questions = $test->getQuestions();

        $count = 0;
        $error_message = null;

        if ($request->isMethod('POST')) {
            $formData = $request->request->all();
            foreach ($formData as $answerId) {
                $ans = $answerRepository->find($answerId);
                $trueAnswer = $ans->isValid();
                if ($trueAnswer == true) {
                    $count++;
                }
                if ($count == 3) {
                    $user = $this->getUser();
                    $completeCourses = $user->getCompleteCourses();
                    if ($completeCourses === null) {
                        $completeCourses = [];
                    }

                    $courseId = $course->getId();
                    if (!in_array($courseId, $completeCourses)) {
                        $completeCourses[] = $courseId;
                        $user->setCompleteCourses($completeCourses);

                        $entityManager = $doctrine->getManager();
                        $entityManager->persist($user);
                        $entityManager->flush();
                    }


                    dump($user->getEmail());
                }
            }
            if ($count !== 3) {
                $error_message = "Tu as une erreur";
            }
            dump($count);
        }

        return $this->render('course/index.html.twig', [
            'controller_name' => 'CourseController',
            'course' => $course,
            'chapters' => $chapters,
            'questions' => $questions,
            'id' => $id,
            'error_message' => $error_message

        ]);
    }
}
