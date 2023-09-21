<?php

namespace App\Controller;

use App\Repository\ChapterRepository;
use App\Repository\CourseRepository;
use App\Repository\UserRepository;
use Container7Jswh6S\getUserRepositoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(UserRepository $userRepository, CourseRepository $courseRepository, ChapterRepository $chapterRepository): Response
    {
         $user = $this->getUser();
         if (!$user) {
             return $this->redirectToRoute('app_login');
         }

         $courses = $courseRepository->findAll();

        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'user' => $user,
            'courses' => $courses,
        ]);
    }

    #[Route('/course/{id}', name: 'app_course')]
    public function course(CourseRepository $courseRepository, ChapterRepository $chapterRepository, $id): Response
    {
        $course = $courseRepository->find($id);
        $chapters = $course->getChapters();
        $test = $course->getTest();
        $questions = $test->getQuestions();


        return $this->render('course/index.html.twig', [
            'controller_name' => 'CourseController',
            'course' => $course,
            'chapters' => $chapters,
            'questions' => $questions,
        ]);
    }

}
