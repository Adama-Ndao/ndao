<?php

use App\Models\Trajet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TrajetController;
use App\Http\Controllers\Admin\ChauffeurController;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/blog-home', function () {
    return view('blog-home');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/panier', function () {
//     $trajets = Trajet::all();
//     return view('panier', ['trajets' => $trajets]);
// });
Route::get('/reserver', [TrajetController::class, 'reserver']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function (){

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //trajet 
    Route::controller(TrajetController::class)->group(function () {
        Route::get('/trajet', 'index');
        Route::get('/trajet/create', 'create');
        Route::post('/trajet', 'store');
        Route::get('/trajet/{trajet}/edit', 'edit');
        Route::put('/trajet/{trajet}', 'update');
    });

   
    //Chauffeur
    Route::controller(ChauffeurController::class)->group(function () {
        Route::get('/chauffeur', 'index');
        Route::get('/chauffeur/create', 'create');
        Route::post('/chauffeur', 'store');
        Route::get('/chauffeur/{chauffeur}/edit', 'edit');
        Route::put('/chauffeur/{chauffeur}', 'update');
    });

    //User
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index');
        Route::get('/user/create', 'create');
        Route::post('/user', 'store');
        Route::get('/user/{user}/edit', 'edit');
        Route::put('/user/{user}', 'update');
    });
    
});