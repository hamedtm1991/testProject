<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});







//Route::redirect('/test/', '/test2/');


Route::view('/welcome', 'welcome');



Route::get('/rrr', function (Request $request) {


});



Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', 'salam');







Route::prefix('admin')->group(function () {


    Route::get('/user/profile', function () {
        return "kiiir";
    })->name('profile');



    Route::match(['get', 'post'], '/test2/', function () {
        $url = route('profile');
        return $url;
    });



    Route::any('/test/', function () {
        return 'salam laravel';
    });

});






Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        return 'gggg';
    })->name('users');
});


