<?php


namespace App\Controller\Forum\Index;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        return new JsonResponse([
            'message' => 'Welcome!',
        ]);
    }
}