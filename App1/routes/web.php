<?php

use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Route::get('/perfils', function () {
    return view('perfil');
})->name('perfil');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('create', function () {
    return view('create');
})->name('create');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/job-single', function () {
    return view('job-single');
})->name('jobS');

Route::get('/post-job', function () {
    return view('post-job');
})->name('postJ');

Route::get('testimonials', function () {
    return view('testimonials');
})->name('testimonials');
Auth::routes();
Route::get('/editar',function(){
    return view ('editar');
})->name('editar');
Route::get('/job-listings',function(){
    return view('job-listings');
})->name('job-listings');



Route::post('/create','PerfilController@store')->name('guardar');
Route::get('/show-perfil','PerfilController@show')->name('mostrar');



Route::get('/amilcar','PerfilController@show');



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('perfil','PerfilController');
