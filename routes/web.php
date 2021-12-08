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
    return view('welcome');
});

Route::get('/pizzas',function(){
    //getting data from data 
    #parsing the data to the views
    $pizza= ['type' => 'hawayin',
    'base' => 'Cheesy Crust',
    'price' => 1
   ];

    return view('pizzas', $pizza);
    #return statement calls the views in the resources view pizzas
});
