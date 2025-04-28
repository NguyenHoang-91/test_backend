<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Post;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::all();
    }

    public function getPostsByCategorySlug($slug, $perPage = 10)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return Post::where('category_id', $category->id)
            ->with('category')
            ->paginate($perPage);
    }

    public function getNewestPostsByCategorySlug($slug, $perPage = 10)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return Post::where('category_id', $category->id)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }
}
