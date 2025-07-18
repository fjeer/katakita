<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    $blog = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString();

    return view('blog', ['title' => 'Blog', 'blog' => $blog]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('blog', ['title' => 'Article by ' . $user->username, 'post' => $user->posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});