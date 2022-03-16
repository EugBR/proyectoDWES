<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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
    return view('auth.login');
});

/*
Route::get('/usuario', function () {
    return view('usuario.index');

});


Route::get('/usuario/crear', [UsuarioController::class, 'crear']);
*/

Route::resource('usuario', UsuarioController::class)->middleware('auth');


Auth::routes();
//Auth::routes(['register'=>false, 'reset'=>false]);


Route::get('/home', [UsuarioController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [UsuarioController::class, 'index'])->name('home');

});