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

// Home route
Route::get('/', function () {
    // database La Molisana
    $data = config('pasta-db');
    
    // Filter the original data into three array based on "tipo" attribute
    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($data as $pasta) {
        if($pasta['tipo'] === 'lunga') {
            $lunghe[] = $pasta;
        }
        elseif($pasta['tipo'] === 'corta') {
            $corte[] = $pasta;
        }
        elseif($pasta['tipo'] === 'cortissima') {
            $cortissime[] = $pasta;
        }
    }

    return view('homepage', ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime]);
    // return view('homepage', compact('lunghe', 'corte', 'cortissime')); 
});

// Product route
Route::get('/product/', function() {
    return view('product');
})->name('product');