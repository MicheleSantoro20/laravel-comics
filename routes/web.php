<?php

use Illuminate\Support\Facades\Route;

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


    $data = [
        'dbfooter'=> config('dbfooter'),
        'dbHeader'=> config('dbheader'),
        'dbmain'=> config('maincontent')
    ];

    return view('home', $data);
});
