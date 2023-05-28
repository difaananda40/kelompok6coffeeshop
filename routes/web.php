<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApprovalController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
    Route::get('/transaction/{id}', [TransactionController::class, 'show'])->name('transaction.show');
    Route::put('/transaction/{id}/update', [TransactionController::class, 'update'])->name('transaction.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'role:admin']
], function () {
    Route::get('/', function () {
        return view('admin/home');
    })->name('home');

    Route::get('approval', [ApprovalController::class, 'index'])->name('approval'); 
    Route::put('approval/{id}', [ApprovalController::class, 'approve'])->name('approve'); 
});

require __DIR__.'/auth.php';
