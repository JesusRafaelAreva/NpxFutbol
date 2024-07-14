<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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
    return view('welcome');
});
Route::get('/agenda', [ApiController::class, 'getAgenda']);
Route::get('/en-vivo/gol-peru', function () {
    // Aquí puedes retornar la vista que corresponda al contenido en vivo de Gol Perú
    return view('golperu');
});
Route::get('/embed/eventos.html', function () {
    // Aquí puedes retornar la vista que corresponda al contenido en vivo de Gol Perú
    return view('eventos');
});
Route::get('/en-vivo/liga-1-max', function(){
    return view('liga');
});
Route::get('/en-vivo/movistar-deportes-online', function(){
    return view('movistar');
});
Route::get('/en-vivo/movistar-deportes-online', function(){
    return view('movistar');
});
Route::get('/en-vivo/directv-sports-online', function(){
    return view('directv');
});
Route::get('/en-vivo/directv-sports-2-online', function(){
    return view('directv2');
});
Route::get('/en-vivo/directv-sports-plus-online', function(){
    return view('d3');
});
Route::get('/star-plus', function(){
    return view ('start');
});
Route::get('/vix-plus', function(){
    return view ('vix');
});
Route::get('/en-vivo/fox-sports-online', function(){
    return view('fox');
});