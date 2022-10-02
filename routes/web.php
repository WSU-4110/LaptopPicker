<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LaptopController;


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
    //return view('welcome');
    //return view('website.index');

    return redirect('/login');
})->name('website');


Route::get('/dashboard', function () {
    //return view('dashboard');

    return view('admin.dashboard');

})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


