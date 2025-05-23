<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\LanguageRepository;
use App\Repository\MediaRepository;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('auth/login.html.twig');
    }

    #[Route('/confirm', name: 'app_confirm')]
    public function confirm(): Response
    {
        return $this->render('auth/confirm.html.twig');
    }

    #[Route('/register', name: 'app_register')]
    public function register(): Response
    {
        return $this->render('auth/register.html.twig');
    }

    #[Route('/reset', name: 'app_reset')]
    public function reset(): Response
    {
        return $this->render('auth/reset.html.twig');
    }

    #[Route('/forgot', name: 'app_forgot')]
    public function forgot(): Response
    {
        return $this->render('auth/forgot.html.twig');
    }
}
