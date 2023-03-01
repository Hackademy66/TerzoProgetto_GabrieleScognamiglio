<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DettController;
use App\Http\Controllers\RaceController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/razze',[RaceController::class,'razza'])->name('razze');

Route::get('/razze/dettagli/{id}', function($id) {
    $razze= [
        ['id'=> 1, 'razza'=>'Nani','foto'=>'/media/nani.png','classe'=>'guerriero'],
        ['id'=> 2, 'razza'=>'Tauren','foto'=>'/media/tauren.png','classe'=>'prete'],
        ['id'=> 3, 'razza'=>'Troll','foto'=>'/media/troll.png','classe'=>'sciamano'],
    ];
    foreach($razze as $razza){
        if($razza['id']==$id){
        return view('dettagli',['razza' => $razza]);   
        }
    }

})->name('razze-dettagli');

