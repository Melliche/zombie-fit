<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Container7Jswh6S\getUserRepositoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(UserRepository $userRepository): Response
    {
         $user = $this->getUser();
         if (!$user) {
             return $this->redirectToRoute('app_login');
         }

         dump($user);

        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'user' => $user,
        ]);
    }
}
