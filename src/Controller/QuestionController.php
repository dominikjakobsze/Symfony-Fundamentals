<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_question_homepage")
     * @return Response
     */
    public function homepage(): Response
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     * @param $slug
     * @return Response
     */
    public function show($slug): Response
    {
        $answers = [
            'This is a test answer',
            'This is another test answer',
            'This is a third test answer',
        ];
        return $this->render('show.html.twig', ['slug' => $slug, 'answers' => $answers]);
    }
}