<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegister;

#[Route('/api/v1', name:'api')]
class RestVotacionController extends AbstractController
{
    #[Route('/create', name: 'app_rest_votacion', methods:['post'] )]
    public function create(): void
    {
        $entityManager = $doctrine->getManager();
        

        //return $this->json("hola este es un servicio post");
    }
}
