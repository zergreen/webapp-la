<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

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
    return view('welcome');
})->name('home');


// Route::get('/about', function(){
//     print(" <h1>Hello World</h1>");
//     echo "<h1>Hello from admin</h1>";
// });

Route::get('/users/{name}', function($name){
    echo "<h1>Name: $name </h1>";
});


Route::get('/users/{name}/{lname}', function($name,$lname){
    echo "<h1>Name: $name </h1>";
    echo "<h1>Surname: $lname </h1>";
});

//การสร้าง Route
Route::get('/about/foobarbee',[AboutController::class,'index'])->name('about')->middleware('check');
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('check');
Route::get('/member',[MemberController::class,'index']);
