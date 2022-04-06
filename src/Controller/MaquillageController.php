<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaquillageController extends AbstractController
{
    #[Route('/maquillage', name: 'app_maquillage')]
    public function index(): Response
    {
        return $this->render('maquillage/index.html.twig', [
            'controller_name' => 'MaquillageController',
        ]);
    }
}
