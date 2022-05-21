<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ManagerController;
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


Route::group(['middleware' => 'auth'], function (){
    
    Route::get('feedback', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::post('feedback/save', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');

Route::group(['prefix' => 'manager-panel', 'middleware' => 'is_manager'], function (){
   Route::get('/', [ManagerController::class, 'index'])->name('manager.index');
   Route::post('update/{id}', [ManagerController::class, 'update'])->name('manager.update');
   Route::get('show/{id}', [ManagerController::class, 'show'])->name('manager.show');
});
});

require __DIR__.'/auth.php';
