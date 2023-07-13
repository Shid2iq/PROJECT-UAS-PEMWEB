<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/list', [HomeController::class, 'list']);
Route::get('/detail', [HomeController::class, 'detail']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::group(['middleware' => 'auth'], function(){
Route::resource('/movies', MovieController::class);
Route::resource('/genres', GenreController::class);
Route::resource('/reviews', ReviewController::class);

Route::post('logout', LogoutController::class)->name('logout');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, "register"]);

Route::get('/login', [AuthController::class, 'showLoginForm'])-> name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/countries', [CountriesController::class, 'index']);

Route::get('/users', function () {
    return view('users/index');
});

// ROOTING MOVIE
// Route::get('/movies', [MovieController :: class, 'index']) ;
// Route::get('/movies/create', [MovieController::class, 'create']);
// Route::post('/movies', [MovieController::class, 'store']);
// Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);
// Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);
// Route::put('/movies/{movie}', [MovieController::class, 'update']);

// ROOTING GENRE
// Route::get('/genres', [GenreController :: class, 'index']) ;
// Route::get('/genres/create', [GenreController::class, 'create']);
// Route::post('/genres', [GenreController::class, 'store']);
// Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);
// Route::get('/genres/{genre}/edit', [GenreController::class, 'edit']);
// Route::put('/genres/{genre}', [GenreController::class, 'update']);

// ROOTING REVIEW
// Route::get('/reviews', [ReviewController :: class, 'index']) ;
// Route::get('/reviews/create', [ReviewController::class, 'create']);
// Route::post('/reviews', [ReviewController::class, 'store']);
// Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);
// Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
// Route::put('/reviews/{review}', [ReviewController::class, 'update']);
