<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdashiController;

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
    return view('home');
});

Route::get('/dashboard', 'AdashiController@dashboard');
Route::get('/login', 'AdashiController@index')->name('login-custom');
Route::post('/userlogin', 'AdashiController@userLogin')->name('login.custom');
Route::get('/register', 'AdashiController@registration')->name('register-user');
Route::post('/userRegistration', 'AdashiController@userRegistration')->name('register.custom');
Route::get('/signout', 'AdashiController@signOut')->name('signout');

Route::get('/deposit', 'AdashiController@deposit');
Route::post('/addMoney', 'AdashiController@addMoney')->name('addMoney');
Route::get('/withdraw', 'AdashiController@withdraw');
Route::post('/withdrawmoney', 'AdashiController@withdrawMoney')->name('withdrawMoney');

?>