<?php

use App\Http\Controllers\controllerTextBinASCII;
use Illuminate\Support\Facades\Route;

use function Psy\bin;

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

Route::get('/textBinASCII',function(){ 
    $text = 'PHPProgramming'; 
    $bin = array(); 
    for($i=0; strlen($text)>$i; $i++){ 
        $bin[] = decbin(ord($text[$i])); 
    } 
    $result= implode(' ',$bin); 
    //print_r($result); 
    return view('textBinASCII', compact('bin')); 
});
Route::get('/test',[controllerTextBinASCII::class,'convertChar'])->name('test');
Route::view("input_text","output_text");
