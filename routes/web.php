<?php
use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages.homePage');
// });
Route::get('/post', [PageController::class, 'homePage']);
Route::get('/post/{id}', [PageController::class, 'singlePage']);




Route::get('/postData', [PostController::class, 'allPosts']);
