<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParfumsController extends AbstractController
{
    #[Route('/parfums', name: 'app_parfums')]
    public function index(): Response
    {
        return $this->render('parfums/index.html.twig', [
            'controller_name' => 'ParfumsController',
        ]);
    }
}
