<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventDessertController extends AbstractController
{
    #[Route('/event_dessert', name: 'app_event_dessert')]
    public function index(): Response
    {
        return $this->render('event_dessert/index.html.twig', [
            'controller_name' => 'EventDessertController',
        ]);
    }
}
