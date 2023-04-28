<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.Home');
// });

// landing page
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/page-studio', [StudioController::class,'index'])->name('studio');
Route::get('/page-contact', [ContactController::class,'index'])->name('contact');
Route::get('/page-buy-ticket', [TicketController::class,'index'])->name('ticket');




Route::get('/studio',[PostController::class,'index']);
Route::get('/admin/create',[PostController::class,'create']);
Route::post('/admin/studio',[PostController::class,'store']);
Route::get('/admin/edit/{id}',[PostController::class,'edit']);
Route::get('/admin/delete/{id}',[PostController::class,'delete']);
Route::put('/admin/{id}',[PostController::class,'update']);

