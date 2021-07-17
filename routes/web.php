<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/home', function () {
//     return view('homepage');
// });
//
// // it will just return the sumona as a text
// Route::get('/sumu', function () {
//     return 'sumona';
// });

Route::view('/', 'welcome');

// Route::view('/home', 'homepage');

// Route::get('/home', function (){
//     return view('homepage', ['product'=>'table']);
// });

Route::get('/home', function (){
    $items= array('table', 'chair', 'stool');
    return view('homepage', ['name'=>'sumu'], ['products'=>$items]);
});
