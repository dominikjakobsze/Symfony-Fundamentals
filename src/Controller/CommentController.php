<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", name="app_comment_commentVote", methods={"POST"})
     * @param $direction
     * @param $id
     * @return JsonResponse
     */
    public function commentVote($id, $direction): JsonResponse
    {
        $direction == 'up' ? $currentVoteCount = rand(7, 100) : $currentVoteCount = rand(0, 5);

        return $this->json(['votes' => $currentVoteCount]);
    }
}