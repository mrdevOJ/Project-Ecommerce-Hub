<?php

use App\Http\Controllers\AdminListController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AccuileController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LivraisonController;
use App\Http\Controllers\LivreurController;


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

Route::get('/' ,[AccuileController::class,'index'])->name('/');

Route::resource('articles',ArticleController::class)->middleware('ces_admin');;
Route::resource('listproducts', AdminListController::class)->middleware('ces_admin');
Route::resource('commandes',CommandeController::class);
Route::post('/send.email', [EmailController::class, 'sendEmail'])->name('send.email');
Route::resource('livraisons',LivraisonController::class)->middleware('Ces_livreur');
Route::resource('livreurs',LivreurController::class);
// Route::redirect('/send.email', '/home',302);

Route::get('/error',function(){
    return view('error');
})->name('error');
Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


