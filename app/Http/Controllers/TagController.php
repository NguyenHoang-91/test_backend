<?php

namespace App\Http\Controllers;

use App\Services\TagService;

class TagController extends Controller
{
    protected $tagService;

    public function __construct(TagService $tagService)
    {
        $this->tagService = $tagService;
    }

    public function getPostsByTag($slug)
    {
        $posts = $this->tagService->getPostsByTagSlug($slug);

        return response()->json($posts);
    }
}
