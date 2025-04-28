<?php

namespace App\Services;

use App\Models\Tag;

class TagService
{
    public function getPostsByTagSlug($slug, $perPage = 10)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        return $tag->posts()->paginate($perPage);
    }
}
