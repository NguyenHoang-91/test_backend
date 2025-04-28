<?php

namespace App\Http\Controllers;

use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function getNewestPosts()
    {
        $posts = $this->postService->getNewestPosts();

        return response()->json($posts);
    }

    public function getPostBySlug($slug)
    {
        $post = $this->postService->getPostBySlug($slug);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json($post);
    }
}
