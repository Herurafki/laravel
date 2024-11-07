<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Myfirstcontroller;
use App\Http\Controllers\Mastercontroller;
use App\Http\Controllers\PerkuliahanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo 'hello word';
});

Route::get('/layout',function(){
    return view('layout.main');
});

Route::get('/page1',function(){
    return view('pageview');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hellodaricontroller',[Myfirstcontroller::class, 'helloworld']);

Route::get('/mastermhs',[Mastercontroller::class, 'mastermahasiswa']);

Route::get('/mastermk',[Mastercontroller::class, 'mastermk']);

Route::get('/masterkelas',[Mastercontroller::class, 'masterkelas']);

Route::get('/masterdosen',[Mastercontroller::class, 'masterdosen']);


Route::get('/jadwalkuliah',[PerkuliahanController::class, 'jadwalkuliah']);

Route::get('/jadwalujian',[PerkuliahanController::class, 'jadwalujian']);

Route::get('/absenmahasiswa',[PerkuliahanController::class, 'absenmahasiswa']);

Route::get('/nilaimahasiswa',[PerkuliahanController::class, 'nilaimahasiswa']);


Route::get('/myview',[Myfirstcontroller::class,'showfirstview']);

Route::get('/viewwithdata',[Myfirstcontroller::class, 'viewwithdata']);