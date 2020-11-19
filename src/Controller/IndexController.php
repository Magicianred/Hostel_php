<?php

namespace App\Controller;

use App\Entity\Hostelly;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{


    // Homepage Route
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }

    // Signup Route
    /**
     * @Route("/signup")
     */
    public function check()
    {
        return $this->render('signup.html.twig');
    }

    // Signup Route
    /**
     * @Route("/fetch")
     */
    public function fetch()
    {
        $hostel = $this->getDoctrine()
            ->getRepository(Hostelly::class)
            // ->find(1)
            ->findAll();
        return $this->render(
            'fetchTest.html.twig',
            ['hostel' => $hostel]
        );
    }
}
