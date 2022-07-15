<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest('published_at')->get(),
        'categories' => Category::all()
    ]);
});

Route::get('posts/{post:slug}', function(Post $post) {
    return view('post', [
        'post' => $post,
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'posts' => $category->category,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('author/{author:username}', function(User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});

