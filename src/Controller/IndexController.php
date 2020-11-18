<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// Controller must return an instance https://stackoverflow.com/questions/14878057/the-controller-must-return-a-response/14878347
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('home.html');
    }
}
