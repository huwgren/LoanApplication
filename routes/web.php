<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('Application.pages.Intro');
});

Route::get('/template', function () {
    return view('Application.pages.blank');
});

Route::get('/Intro', function () {
    return view('Application.pages.Intro');
});

Route::get('/loanDetails', function () {
    return view('Application.pages.LoanDetails');
});

Route::get('/aboutYou', function () {
    return view('Application.pages.AboutYou');
});

Route::get('/financialDetails', function () {
    return view('Application.pages.FinancialDetails');
});

Route::get('/Review', function () {
    return view('Application.pages.Review');
});

/*Paths to load additional user inputs*/
Route::get('/financialDetails_partials', function () {
    return view('Application.includes.financialDetails_partials');
});

Route::get('/aboutYou_partials', function () {
    return view('Application.includes.aboutYou_partials');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
