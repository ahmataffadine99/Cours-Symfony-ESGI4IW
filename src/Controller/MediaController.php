<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\LanguageRepository;
use App\Repository\MediaRepository;
use App\Repository\MovieRepository;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;

final class MediaController extends AbstractController
{
    #[Route('/show/{id}', name: 'app_detail')]
    public function detail(string $id, MovieRepository $movieRepository): Response
    {
        $movie = $movieRepository->find($id);

        return $this->render('media/detail.html.twig', [
            'toto' => $movie,
        ]);
    }

    #[Route('/category/{id}', name: 'app_category')]
    public function category(CategoryRepository $categoryRepository, string $id): Response
    {
        $category = $categoryRepository->find($id);

        return $this->render('media/category.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/lists', name: 'app_lists')]
    public function lists(
        PlaylistRepository $playlistRepository,
        #[MapQueryParameter] int $selectedPlaylist,
    ): Response
    {
        $playlists = $playlistRepository->findAll();
        $selected = $playlistRepository->find($selectedPlaylist);

        return $this->render('media/lists.html.twig', [
            'playlists' => $playlists,
            'selectedPlaylist' => $selected,
        ]);
    }

    #[Route('/detail_serie', name: 'app_detail_serie')]
    public function detailSerie(): Response
    {
        return $this->render('media/detail_serie.html.twig');
    }

    #[Route('/discover', name: 'app_discover')]
    public function discover(): Response
    {
        return $this->render('media/discover.html.twig');
    }

}
