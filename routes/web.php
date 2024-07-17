<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageRouting01_Controller;
use App\Http\Controllers\CurdController;
Route::get('/',[PageRouting01_Controller::class,'index']);
Route::get('/About',[PageRouting01_Controller::class,'About']);
Route::get('/Skill',[PageRouting01_Controller::class,'Skill']);
Route::get('/Contact',[PageRouting01_Controller::class,'Contact']);

Route::group(['prefix' => 'curd'], function() {
    Route::get('/', [CurdController::class, 'index'])->name('curd.index');
    Route::get('create', [CurdController::class, 'create'])->name('curd.create');
    Route::post('/', [CurdController::class, 'store'])->name('curd.store');
    Route::get('{id}', [CurdController::class, 'show'])->name('curd.show');
    Route::get('{id}/edit', [CurdController::class, 'edit'])->name('curd.edit');
    Route::put('{id}', [CurdController::class, 'update'])->name('curd.update');
    Route::delete('{id}', [CurdController::class, 'destroy'])->name('curd.destroy');
});

