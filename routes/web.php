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
    // # Prendo tutti i fumetti
    $comics = config('comics');
    return view('guest.comics', ['comics' => $comics]);
})->name('guest-comics');

Route::get('/comics/{index}', function ($index) {
    // # Prendo tutti i fumetti
    $comics = config('comics');
    // § se e solo se:
    // § 1 - l'id è un numero 2 - maggiore/uguale di zero 3 - è minore della lunghezza dell'array dei fumetti
    if( is_numeric($index) && $index >= 0 && $index < count($comics)){
        // ? ritornami la view di dettaglio con l'unico fumetto da mostrare
        return view('guest.comic-details', ["comic" => $comics[$index]]);
    } else {
        // | altrimenti scrivi a schermo l'errore 404 - Not found
        abort(404);
    }
})->name('guest-comic-details');

/* All'indirizzo '/characters' visualizzo la pagina 'characters.blade.php' */
Route::get('/characters', function () {
    return view('guest.characters');
})->name('guest-characters'); // Do un name a quest'indirizzo

Route::get('/movies', function () {
    return view('guest.movies');
})->name('guest-movies');

Route::get('/tv', function () {
    return view('guest.tv');
})->name('guest-tv');

Route::get('/games', function () {
    return view('guest.games');
})->name('guest-games');

