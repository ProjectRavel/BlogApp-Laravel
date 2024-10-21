<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {

    $posts = Post::filter(request(['search', 'category']))->get();

    return view('posts', ['title' => 'Blog Posts: ' . count($posts) . ' Data.', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post->get()]);
});

Route::get('/authors/{user:username}', function (User $user) {

    // $posts = $user->posts->load('category', 'author');  

    return view('posts', ['title' => count($user->posts) . ' Article by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category:slug}', function (Category $category) {

    // $posts = $category->posts->load('author', 'category');

    return view('posts', ['title' => 'Category: ' . $category->name . ' ', 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
