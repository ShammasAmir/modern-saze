<?php

use App\Http\Controllers\Administrator\MemberController;
use App\Http\Controllers\Administrator\UserController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('front.index');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');


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
Route::middleware(['auth', 'admin'])->resource('/dashboard/users', UserController::class);
// Route::resource('/dashboard/users', UserController::class)->parameters(['users'=>'id']);

