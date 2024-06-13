<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','middleware' => 'auth'],function (){
//    Route::get('/',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard.index');
    Route::redirect('/','/admin/messages');

    Route::post('deconnecter',[\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class,'destroy'])->name('admin.logout');

    Route::group(['prefix' => 'messages','controller' => \App\Http\Controllers\Admin\MessageController::class],function(){
        Route::get('/','index')->name('admin.messages.index');
        Route::get('/archives','archived')->name('admin.messages.archived');
        Route::get('/{message}','archive')->name('admin.messages.archive');
    });
});
