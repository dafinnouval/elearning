<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Course;

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
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index' ])->name('index');
// Route::get('/home/{user}', function ($id) {
//     $user = Course::with('idcourse')->find($id);
//     return response()->json($user, 200);
// });
Route::get('create', [HomeController::class, 'create' ])->name('create');
Route::post('create', [HomeController::class, 'store' ])->name('store');

Route::get('edit/{id}', [HomeController::class, 'edit' ])->name('edit');
Route::post('edit/{id}', [HomeController::class, 'update' ])->name('update');

Route::get('delete/{id}', [HomeController::class, 'destroy' ])->name('destroy');
