<?php

namespace App\Controller;

use App\Entity\Hostelly;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ApiController extends AbstractController
{
    /**
     * @Route("/api")
     */
    public function home()
    {
        $hostel = $this->getDoctrine()
            ->getRepository(Hostelly::class)
            ->findAll();
        return $this->json(['hostel' => $hostel]);
    }
}
