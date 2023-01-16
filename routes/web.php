<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BellmanFordController;

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
Route::get('bellman-ford', 'BellmanFordController@index')->name('bellman-ford.index');
Route::post('bellman-ford/calculate', 'BellmanFordController@calculate')->name('bellman-ford.calculate');
Route::get('/', function () {
    return view('welcome');
});
