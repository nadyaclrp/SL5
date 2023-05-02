<?php

use App\Http\Controllers\collabController;
use Illuminate\Routing\Router;
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

// Route::get('/', function () {
//     return view('profile');
// });

//kalau notfound langsung ke fallback kesini
Route::fallback(function(){
    return 'Not Found!';
});

Route::get('/profile', [collabController::class,'experiences']);
Route::redirect('/', '/profile');
