<?php

use App\Http\Controllers\WebController;
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
    return redirect()->route('blog');
});

Route::get('/blog', [WebController::class, 'showHome'])->name('blog');
Route::get('/blog/{id}', [WebController::class, 'showHomeDetail'])->name('blog.detail');
