<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormularioController extends AbstractController
{
    #[Route('/formulario/list', name: 'app_list')]
    public function index(): Response
    {
        return $this->render('formulario/index.html.twig', [
            'controller_name' => 'FormularioController',
        ]);
    }

    #[Route('/formulario/create', name: 'app_create')]
    public function create(): Response
    {
        return $this->render('formulario/create.html.twig', [
            'controller_name' => 'FormularioController',
        ]);
    }

}
