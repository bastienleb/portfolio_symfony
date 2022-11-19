<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationController extends AbstractController
{
    #[Route('/realisation/c', name: 'app_realisation_1')]
    public function c(): Response
    {
        return $this->render('realisation/c.html.twig', [
            'controller_name' => 'RealisationController',
        ]);

    }

    #[Route('/realisation/java', name: 'app_realisation_2')]
    public function java(): Response
    {
        return $this->render('realisation/java.html.twig', [
            'controller_name' => 'RealisationController',
        ]);
    }

    #[Route('/realisation/php', name: 'app_realisation_3')]
    public function php(): Response
    {
        return $this->render('realisation/php.html.twig', [
            'controller_name' => 'RealisationController',
        ]);
    }

    #[Route('/realisation/android', name: 'app_realisation_4')]
    public function android(): Response
    {
        return $this->render('realisation/android.html.twig', [
            'controller_name' => 'RealisationController',
        ]);
    }
}
