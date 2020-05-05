<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PortfolioController extends AbstractController
{
    
    public function index()
    {
        return $this->render('Portfolio/index.html.twig');
    }
}
