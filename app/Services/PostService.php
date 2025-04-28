<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function getPostBySlug($slug)
    {
        return Post::where('slug', $slug)
            ->with('sections')
            ->first();
    }
    
    public function getNewestPosts($perPage = 6)
    {
        return Post::orderBy('created_at', 'desc')
            ->with('category', 'tags')
            ->paginate($perPage);
    }
}
