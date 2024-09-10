<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');

//GET POST PUT PATCH DELETE

// Route::get('hello/', function(){
//     return response("Hello, How are you");
// });

Route::get('hello/',[GreetingsController::class, 'sayHi']);
Route::get('this/is/a/long/url',[GreetingsController::class, 'funny']);

// Route::get('invoice/{id}',[GreetingsController::class, 'invoice']);
Route::get('invoice/{id?}',[GreetingsController::class, 'invoice']);
Route::get('invoice/{id}/item/{itemId}',[GreetingsController::class, 'invoiceItem']);

// Route::get('invoice/',[GreetingsController::class, 'allInvoices']);
// Route::get('countries',[GreetingsController::class, 'countries']);
Route::match(['get','post'],'countries/',[GreetingsController::class, 'countries']);

// Route::match(['get','post'],'contact/',[GreetingsController::class, 'contact']);
Route::get('contact/',[GreetingsController::class, 'contact']);
// Route::view('contact/','contact');
Route::post('contact/',[GreetingsController::class, 'contact']);

Route::get('posts/{id}',[GreetingsController::class, 'showPost']);