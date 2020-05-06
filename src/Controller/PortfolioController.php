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
    
    public function navbar()
    {
        return $this->render('Portfolio/navbar.html.twig');
    }

    public function bootstrap()
    {
        return $this->render('Portfolio/bootstrap.html.twig');
    }
    public function javascript()
    {
        return $this->render('Portfolio/javascript.html.twig');
    }
    
    public function php()
    {
        return $this->render('Portfolio/php.html.twig');
    }

    public function symfony()
    {
        return $this->render('Portfolio/symfony.html.twig');
    }

    public function wordpress()
    {
        return $this->render('Portfolio/wordpress.html.twig');
    }

    public function projet_bootstrap()
    {
        return $this->render('Portfolio/projets/projet_bootstrap.html.twig');
    }

    public function projet_javascript()
    {
        return $this->render('Portfolio/projets/projet_javascript.html.twig');
    }

    public function projet_php()
    {
        return $this->render('Portfolio/projets/projet_php.html.twig');
    }

    public function projet_symfony()
    {
        return $this->render('Portfolio/projets/projet_symfony.html.twig');
    }

    public function projet_wordpress()
    {
        return $this->render('Portfolio/projets/projet_wordpress.html.twig');
    }

}
