<?php

use App\Http\Controllers\PostController;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
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


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/mail',function(){
    if(Mail::to('masud.rana3836@gmail.com')
                        ->send(new HelloMail("Hi there")))
            
        {
            dd("Success");

        }

});

Route::get('/user-notify',[PostController::class,'notification']);