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

Route::get('/homepage', function () {

    $array = ['<h1>H1</h1>','<h2>H2</h2>','<h3>H3</h3>',"<h4>H4</h4>","<h5>H5</h5>"];
    $hello = 'Salve';

    return view("home", [
        "greeting" => $hello,
        "array" => $array,
        // "rannum" => rand(1,100)
    ]);
});

Route::get('/userarea', function () {
    $user = [
        'name' => 'Gabriele',
        'surname' => 'Cuccarini',
    ];

    $array = ['JS<br>','CSS<br>','HTML<br>','PHP<br>'];

    return view("areautente", [
        "user" => $user,
        "array" => $array,
    ]);    
});

Route::get('/contatti', function () {
    $user = [
        'name' => 'Gabriele',
        'surname' => 'Cuccarini',
    ];

    $array = ['JS<br>','CSS<br>','HTML<br>','PHP<br>'];

    return view("areacontatti", [
        "user" => $user,
        "array" => $array,
    ]);    
});

Route::get('/paginapercuriosi', function () {
    $sentence = "Non dovresti essere qui!";

    return view("areasegreta", [
        "goaway" => $sentence,
    ]);    
});
