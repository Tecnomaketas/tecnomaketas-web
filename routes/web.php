<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
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
// Newly added route for handling pre-login calls.
Route::get('start','StartController@start')->name('start');

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/maintenance', function () {
    return view('mantention');
});
Route::get('/correo', function () {
    return view('email',['name'=> 'Cristopher', 'email'=>'cristopherbaeza@hotmail.com','mensaje'=>'TESTEANDO LA VAINA']);
});
Route::post('/sendEmail', [ContactoController::class,'sendEmail'])->name('contacto');