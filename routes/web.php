<?php

use App\Http\Controllers\Administrator\UserController;
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

Route::get('/', function () {
    return view('front.index');
})->name('home');


Route::get('/dashboard', function () {
    // return view('dashboard');
    // return view('admin.index');
    return view('admin.old');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Route::get('/dashboard/users', function(){
//     return 'users';
// });


// Route::get('/dashboard/users', [UserController::class, 'index']);
// Route::resource('/dashboard/users', UserController::class);
Route::middleware(['auth'])->resource('/dashboard/users', UserController::class);
// Route::resource('/dashboard/users', UserController::class)->parameters(['users'=>'id']);
