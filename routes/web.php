<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageRouting01_Controller;
Route::get('/',[PageRouting01_Controller::class,'index']);
Route::get('/About',[PageRouting01_Controller::class,'About']);
Route::get('/Service',[PageRouting01_Controller::class,'Service']);
Route::get('/Skill',[PageRouting01_Controller::class,'Skill']);
Route::get('/Contact',[PageRouting01_Controller::class,'Contact']);

