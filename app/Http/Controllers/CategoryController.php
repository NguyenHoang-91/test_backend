<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function getAllCategories()
    {
        $categories = $this->categoryService->getAllCategories();

        return response()->json($categories);
    }

    public function getPostsByCategory($slug)
    {
        $posts = $this->categoryService->getPostsByCategorySlug($slug);

        return response()->json($posts);
    }

    public function getNewestPostsByCategory($slug)
    {
        $posts = $this->categoryService->getNewestPostsByCategorySlug($slug);

        return response()->json($posts);
    }
}
