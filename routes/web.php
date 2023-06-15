<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataprodukController;

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
// Route::get('/about', function () {

//     return view('welcome');
// });

Route::get('/', function () {

    return view('home');
});
Route::get('/dataproduk', [DataprodukController::class, 'index'] );
Route::get('/dataproduk/create', [DataprodukController::class, 'create'] );
Route::post('/dataproduk/store', [DataprodukController::class, 'store'] );
Route::get('/dataproduk/{id}/edit', [DataprodukController::class, 'edit'] );
Route::put('/dataproduk/{id}', [DataprodukController::class, 'update'] );
Route::delete('/dataproduk/{id}', [DataprodukController::class, 'destroy'] );





