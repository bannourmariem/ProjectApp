<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/author', name: 'app_service')]
    public function index(): Response
    {

        return $this->render('service/show.html.twig', [
            'controller_name' => 'ServiceController',
         ]);
    }

    #[Route('/author', name: 'app_service')]
    public function show(): Response
    {
        $user = 'mariem';
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'user'=>$user 
         ]);
    }



    
}
