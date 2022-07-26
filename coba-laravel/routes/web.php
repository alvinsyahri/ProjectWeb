<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routesuse App\Http\Controllers\PostController;
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'active' => 'home',
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "nama" => "Alvin Syahri",
        "email" => "alvinsyahri432@gmail.com",
        "image" => "alvin.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);


// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts',[
//         'active' => 'categories',
//         'title' => "Post by Category :$category->name",
//         'posts' => $category->posts->load('author','category')
//     ]);
// });

Route::get('/categories', function () {
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'active' => 'post',
//         'posts' => $author->posts->load('category','author')
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
