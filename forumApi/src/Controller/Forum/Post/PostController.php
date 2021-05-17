<?php

namespace App\Controller\Forum\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends  AbstractController {

    /**
     * @Route("/post/all", name="get_all_posts", methods={"GET"})
     */
    public function index(): Response
    {
        $posts =
            [
                ['id'=> 1,'title' => 'Post test' , 'content' => 'content test', 'user' => 1],
                ['id'=> 2,'title 2' => 'Post test 2' , 'content' => 'content test 2', 'user' => 2],
                ['id'=> 3,'title 3' => 'Post test 3' , 'content' => 'content test 3', 'user' => 3],
            ];
        return new JsonResponse([
            'message' => 'All Posts',
            'data' => $posts,
        ]);
    }

    /**
     * @Route("/post/create", name="create_post", methods={"GET"})
     */
    public function Create(): Response
    {
        $posts =
            [
                ['id'=> 1,'title' => 'Post test' , 'content' => 'content test', 'user' => 1],
                ['id'=> 2,'title 2' => 'Post test 2' , 'content' => 'content test 2', 'user' => 2],
                ['id'=> 3,'title 3' => 'Post test 3' , 'content' => 'content test 3', 'user' => 3],
            ];
        return new JsonResponse([
            'message' => 'All Posts',
            'data' => $posts,
        ]);
    }

    /**
     * @Route("/post/edit", name="edit_post", methods={"GET"})
     */
    public function Update(): Response
    {
        $posts =
            [
                ['id'=> 1,'title' => 'Post test' , 'content' => 'content test', 'user' => 1],
                ['id'=> 2,'title 2' => 'Post test 2' , 'content' => 'content test 2', 'user' => 2],
                ['id'=> 3,'title 3' => 'Post test 3' , 'content' => 'content test 3', 'user' => 3],
            ];
        return new JsonResponse([
            'message' => 'All Posts',
            'data' => $posts,
        ]);
    }

    /**
     * @Route("/post/delete", name="edit_post", methods={"GET"})
     */
    public function Delete(): Response
    {
        $posts =
            [
                ['id'=> 1,'title' => 'Post test' , 'content' => 'content test', 'user' => 1],
                ['id'=> 2,'title 2' => 'Post test 2' , 'content' => 'content test 2', 'user' => 2],
                ['id'=> 3,'title 3' => 'Post test 3' , 'content' => 'content test 3', 'user' => 3],
            ];
        return new JsonResponse([
            'message' => 'All Posts',
            'data' => $posts,
        ]);
    }
}
