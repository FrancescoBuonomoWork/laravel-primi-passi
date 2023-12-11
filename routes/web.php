<?php

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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/shop', function () {
    // tramite array associativo passo i dati alla pagina shop
    $data= [
        'arts' => ['pantalone','T-shirt','calzini','scarpe','televisori'],
        'taglia' => 'M'
    ];
    
    return view('shop',$data);
})->name('shop');
Route::get('/aboutUs', function () {

    $name= 'pippo';
    $name2= 'paperino';
    return view('aboutUs',compact("name","name2"));
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('myhome');
});