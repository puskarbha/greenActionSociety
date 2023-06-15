<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('projectDetails/{id}',[HomeController::class,'projectDetails'])->name('projectDetails');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/membership-form', [HomeController::class,'membershipForm'])->name('membershipForm');
    Route::post('/be-a-member',[HomeController::class,'be_a_member'])->name('be-a-member');
});
//admin Routes
Route::group(['middleware' => 'admin'], function () {
    Route::get('/edit_posts', [AdminController::class, 'edit_posts'])->name('edit_posts');
});


Route::get('/adminPage', [AdminController::class, 'adminPage'])->name('adminPage');
Route::get('/manageProject', [AdminController::class, 'manageProject'])->name('manageProject');




