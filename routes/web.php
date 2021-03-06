<?php

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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/zookeeper/test', 'ZooKeeperController@test');
Route::get('/conf-center/index.html', 'ConfMangerController@index');
Route::post('/conf-center/publish', 'ConfMangerController@publish');
Route::get('/code-deploy/index.html', 'CodeDeployController@index');
Route::post('/code-deploy/publish', 'CodeDeployController@publish');