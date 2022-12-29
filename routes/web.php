<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ecommController;
use App\Http\Controllers\ProductController;

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

Route::view('/', 'welcome');
Route::get('/add', function ()
    {
        return view('register');
    })->name('add');

Route::post('/create', [App\Http\Controllers\ecommController::class, 'create'])->name('create');

Route::get("/login", function() {
    return view('login');
});

Route::post("/login", [App\Http\Controllers\ecommController::class, 'login']);
Route::get("/product", [App\Http\Controllers\ProductController::class, 'index']);





/*Route::view('/register', 'register');
/*
Route::get('/register', function(Request $request)
        {
            return $request;
        });
*/
