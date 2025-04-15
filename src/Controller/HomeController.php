<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\LanguageRepository;
use App\Repository\MediaRepository;
use App\Repository\MovieRepository;
use App\Repository\SubscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]  // Ajoute cette route pour la page d'accueil
    public function home(
        MediaRepository $media,
    ): Response
    {
        $medias = $media->findPopulars(maxResults: 18);

        return $this->render('others/home.html.twig', [
            'medias' => $medias,
        ]);
    }



    #[Route('/subscriptions', name: 'app_subscriptions')]
    public function subscriptions(SubscriptionRepository $subscriptionRepository): Response
    {
        return $this->render('others/subscriptions.html.twig', [
            'subscriptions' => $subscriptionRepository->findAll(),
        ]);
    }

    #[Route('/upload', name: 'app_upload')]
    public function upload(): Response
    {
        return $this->render('others/upload.html.twig');
    }
}





