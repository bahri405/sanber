<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [AuthController::class, 'daftar']);
Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/table', function(){
    return view('page/table');
});

Route::get('/data_table', function(){
    return view('page/data_table');
});




// menambah data C = create
Route::get('/cast/create', [CastController::class, 'create']);
// buat route dan function untuk menyiman data inputan ke database
Route::post('/cast', [CastController::class, 'store']);

// read data 
// tampilkan semua data
Route::get('/cast' , [CastController::class , 'index']);

// Detail cast berdasatkan id / liat detail cast berdasarkan id
// dengan route /cast'{id} dan function show
Route::get('/cast/{id}' , [CastController::class , 'show']);

// U => update
// buat route tampilan yg mau di update/edit
// Route yg mengarah ke form edit categori berdasar id
Route::get('/cast/{id}/edit' , [CastController::class , 'edit']);
// update
Route::put('/cast/{id}' , [CastController::class , 'update']);

// delete
Route::delete('/cast/{id}', [CastController::class , 'destroy']);