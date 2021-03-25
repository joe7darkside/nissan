<?php

use Illuminate\Support\Facades\Route;
use App\Models\Slide;
use App\Models\Image;
use App\Models\Post;


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



// Route::view('/welcome', 'welcome')->middleware('auth');
// Route::view('home', 'home');
Route::get('/', function () {
    $slides = Slide::all();
    $images = Image::all();
    $posts = Post::all();

    return view('main', ['slides' => $slides, 'images' => $images, 'posts' => $posts]);
});
Route::get('/mainAr', function () {
    $slides = Slide::all();
    $images = Image::all();
    $posts = Post::all();

    return view('mainAr', ['slides' => $slides, 'images' => $images, 'posts' => $posts]);
});
Route::get('/psf', function () {
    $images = Image::all();
    $posts = Post::all();

    return view('psf', ['images' => $images, 'posts' => $posts]);
});
Route::get('/pet', function () {
    $images = Image::all();
    $posts = Post::all();

    return view('pet', ['images' => $images, 'posts' => $posts]);
});
Route::get('/petAr', function () {
    $images = Image::all();
    $posts = Post::all();

    return view('petAr', ['images' => $images, 'posts' => $posts]);
});
Route::get('/psfAr', function () {
    $images = Image::all();
    $posts = Post::all();

    return view('psfAr', ['images' => $images, 'posts' => $posts]);
});


Route::resource('panel', 'App\Http\Controllers\SlideController')->middleware('auth');
Route::resource('panels', 'App\Http\Controllers\ImageController')->middleware('auth');
Route::resource('postsPanel', 'App\Http\Controllers\PostController')->middleware('auth');
Route::view('/homes', 'home')->middleware('auth');
Route::get('/storage/{images}', function ($images) {
    return redirect("/public/storage/$images");
})->where('images', '.*');
