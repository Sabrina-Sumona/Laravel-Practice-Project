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

// Route::get('/home', function (){
//     $items= array('table', 'chair', 'stool');
//     return view('homepage', ['name'=>'sumu'], ['products'=>$items]);
// });

// Route::get('/home', function (){
//     $userName= request('username');
//     $items= array('table', 'chair', 'stool');
//     return view('homepage', ['products'=>$items, 'username'=>$userName]);
// });

// Route::get('/home/{userid}/{age}', function ($userid, $age){
//     $userName= request('username');
//     $items= array('table', 'chair', 'stool');
//     return view('homepage', ['products'=>$items, 'username'=>$userName, 'userid'=>$userid, 'age'=>$age]);
// });

Route::get('/home','HomeController@index');

Route::get('/home/{userid}/{age}','HomeController@show');

Route::get('/insert','HomeController@insertOperation');
Route::get('/read','HomeController@readOperation');
Route::get('/update','HomeController@updateOperation');
Route::get('/delete','HomeController@deleteOperation');

Route::get('/custom-form', function (){
   return view('customform');
});

// Route::get('/form-submit', function (){
//     dd(request()->all());
// });

Route::post('/form-submit', function (){
    // dd(request()->all());
});
