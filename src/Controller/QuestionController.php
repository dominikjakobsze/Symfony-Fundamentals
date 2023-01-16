<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_question_homepage")
     * @return JsonResponse
     */
    public function homepage(): JsonResponse
    {
        return $this->json('Hello', 200);
    }
}