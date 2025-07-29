<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blog = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString();

    return view('blog', [
        'title' => 'Blog', 
        'blog' => $blog,
        'currentAuthor' => null,
        'currentCategory' => null
    ]);
});

Route::get('/author/{user:username}', function (User $user) {
    $blog = $user->posts()->latest()->filter(request(['search']))->paginate(6)->withQueryString();

    return view('blog', [
        'title' => 'Article by ' . $user->username, 
        'blog' => $blog,
        'currentAuthor' => $user, // Teruskan objek User
        'currentCategory' => null
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    $blog = $category->posts()->latest()->filter(request(['search']))->paginate(6)->withQueryString();

    return view('blog', [
        'title' => 'Category: ' . $category->name,
        'blog' => $blog,
        'currentAuthor' => null,
        'currentCategory' => $category,
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

// sub blog
Route::get('/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Sub blog', 'post' => $post]);
});