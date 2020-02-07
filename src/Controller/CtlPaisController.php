<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CtlPaisController extends AbstractController
{
    /**
     * @Route("/ctl/pais", name="ctl_pais")
     */
    public function index()
    {
        return $this->render('ctl_pais/index.html.twig', [
            'controller_name' => 'CtlPaisController',
        ]);
    }
}
