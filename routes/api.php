<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;

//category routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'getAllCategories']);
    Route::get('/{slug}/posts', [CategoryController::class, 'getPostsByCategory']);
    Route::get('/{slug}/newest/posts', [CategoryController::class, 'getNewestPostsByCategory']);
});

//tag routes
Route::prefix('tags')->group(function () {
    
    Route::get('/{slug}/posts', [TagController::class, 'getPostsByTag']);
});

//post routes
Route::prefix('posts')->group(function () {
    Route::get('/newest', [PostController::class, 'getNewestPosts']);
    Route::get('/{slug}', [PostController::class, 'getPostBySlug']);
});

