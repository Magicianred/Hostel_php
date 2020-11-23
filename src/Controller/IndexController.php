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

    // fetch Route
    /**
     * @Route("/fetch")
     */
    public function fetch()
    {

        // Create custom query
        $hostel = $this->getDoctrine()
            ->getRepository(Hostelly::class)
            ->findAll();
        return $this->render(
            'fetchTest.html.twig',
            ['hostel' => $hostel]
        );
    }
}
