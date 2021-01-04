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
    $id = 0;

    foreach($data as $key => $pasta) {
        // add a 'id' property to each array element set as the current index position
        $pasta['id'] = $key;
        // generate the three arrays
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

    // return view('homepage', ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime]);
    return view('homepage', compact('lunghe', 'corte', 'cortissime', 'id')); 
});

// Product route
Route::get('/product/{id}', function($id) {
    $data = config('pasta-db');
    $product = $data[$id];
    $length = count($data) - 1;
    return view('product', compact('product', 'id', 'length'));
})->name('product');

// News route
Route::get('/news', function() {
    return view('news');
})->name('news');