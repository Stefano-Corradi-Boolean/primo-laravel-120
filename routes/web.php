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


    // $data = [
    //     'name' => 'Ugo', 
    //     'lastname' => 'De Ughi'
    // ];
    // return view('home', $data);
    


    $name = 'Ugo';
    $lastname = 'De Ughi';
    $stampa_paragrafo = true;
    $num1 = 8;
    $num2 = 7;
    $colori = ['giallo', 'rosso', 'verde', 'blu', 'viola'];

    // compact crea un array con le chiavi/valori in base al nome della variabile (da passare senza $)
    // i percorsi nelle sottocartelle delle view vengono rappresentati col punto
    return view('home.index', compact('name', 'lastname', 'stampa_paragrafo', 'num1', 'num2', 'colori'));

})->name('home');

Route::get('/chi-siamo', function() {
    return view('about');
})->name('about');