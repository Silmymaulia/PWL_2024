<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241760090 - Silmy Maulia Dewi';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get(' /articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// //route name
// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');

// //route group & prefixes
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
//     });
//     Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//     //
//     });
//     });
//     Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
//     });

//     Route::prefix('admin')->group(function () {
//         Route::get('/user', [UserController::class, 'index']);
//         Route::get('/post', [PostController::class, 'index']);
//         Route::get('/event', [EventController::class, 'index']);
//         });

// //redirect route
// Route::redirect('/here', '/there');

// //view route
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

//PRAKTIKUM 2
// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [IndexController::class,'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get(' /articles/{id}', [ArticlesController::class, 'articles']);

// Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticlesController::class);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Silmy']);
// });

// //perubahan
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Silmy']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);


//soal praktikum 1
Route::get('/', [HomeController::class, 'index']);

//soal praktikum 2
Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('home-care', [ProductController::class, 'homeCare']);
    Route::get('baby-kid', [ProductController::class, 'babyKid']);
});

//soal praktikum 3
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

//soal praktikum 4
Route::get('/sale', [SaleController::class, 'sale']);