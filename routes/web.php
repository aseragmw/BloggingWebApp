<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/', [PostController::class,'getAllPosts'])->middleware(['auth', 'verified'])->name('home');


Route::get('/home', [PostController::class,'getAllPosts'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//POSTS ROUTES
Route::get('/my_posts', [PostController::class,'getCurrentUserPosts'])->name('my_posts');
Route::get('/post/{id}',[PostController::class,'getPost']);
Route::get('/add', function () {
    return view('add_post');
});
Route::post('/add',[PostController::class,'addPost']);


//COMMENTS ROUTES
Route::post('/post/{id}',[CommentController::class,'addComment']);

//SEARCH ROUTES

Route::get('search_posts',function(){
    return view('search_posts');
})->name('search_posts');

Route::Post('search_posts',[PostController::class,'getSearchedPosts']);



require __DIR__.'/auth.php';
