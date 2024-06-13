<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::post('/contact',[\App\Http\Controllers\MessageController::class,'send'])->name('contact.send');

Route::get('/nos-projets-et-realisation',[\App\Http\Controllers\ProjectController::class,'index'])->name('project.index');
Route::get('/nos-projets-et-realisation/{project}',[\App\Http\Controllers\ProjectController::class,'show'])->name('project.show');

Route::get('/change-theme',function (){
   session()->put('theme', request()->get('theme'));
   return response('ok',200);
});



require __DIR__.DIRECTORY_SEPARATOR.'auth.php';
require __DIR__.DIRECTORY_SEPARATOR.'admin.php';
