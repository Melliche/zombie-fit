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
        $totalCourses = count($courses);

        $completeCourses = $user->getCompleteCourses();
        $completedCount = count($completeCourses);

        $completionPercentage = 0;
        if ($totalCourses > 0) {
            $completionPercentage = ($completedCount / $totalCourses) * 100;
        }

        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'user' => $user,
            'courses' => $courses,
            'completionPercentage' => $completionPercentage,
        ]);
    }

}
