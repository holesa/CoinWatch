<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class SeedController extends AbstractController{
    /**
     * @Route("/seed", name="seed")
     * @Method("GET")
     */
    public function index(){
        $response = new Response();
        $response->setContent(file_get_contents('C:\xampp\htdocs\coinWatch\templates\seed.html.twig'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}