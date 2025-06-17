<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RecipeController extends AbstractController
{
   
   #[Route('/recette', name: 'recipe.index',)]
    public function index(HttpFoundationRequest $request): Response
    {
      return $this->render('recipe/index.html.twig');
    }
   
    #[Route('/recette/{slug}-{id}', name: 'recipe.show', requirements: ['id'=>'\d+', 'slug'=>'[a-z0-9-]+'])]
    public function show(HttpFoundationRequest $request, string $slug, int $id): Response
    {
        return new Response('Recette : '. $slug);
    }
}
