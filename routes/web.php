<?php

use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\ManageApplicationsController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/app/', [App\Http\Controllers\ApplicationsController::class, 'create'])->name('store');
Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('main', [MainController::class, 'index'])->name('main');
    Route::get('approve/{id}', [ManageApplicationsController::class, 'approve'])->name('approve');
    Route::get('deny/{id}', [ManageApplicationsController::class, 'deny'])->name('deny');
    Route::get('delete/{app}', [ManageApplicationsController::class, 'delete'])->name('delete');
    Route::post('search', [ManageApplicationsController::class, 'search'])->name('search');
});
