<?php

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

Route::get('/', function() {

    $name = 'Ugo';
    $lastname = 'De Ughi';

    $data = [
        'name' => 'Ugo', 
        'lastname' => 'De Ughi'
    ];
    
    // compact crea un array con le chiavi/valori in base al nome della variabile (da passare senza $)
    return view('home', compact('name', 'lastname'));

})->name('home');

Route::get('/about', function() {
    return view('about');
})->name('about');