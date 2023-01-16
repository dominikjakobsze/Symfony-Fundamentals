<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class QuestionController extends AbstractController
{

    public function homepage(): JsonResponse
    {
        return $this->json('Hello', 200);
    }
}