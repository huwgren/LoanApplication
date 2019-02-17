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


Route::get('/', function () {
    return view('Application.pages.Intro');
});



Route::get('/loanDetails', 'LoanApplicationController@LoanDetails_View');
Route::post('/loanDetails', 'LoanApplicationController@LoanDetails_Store');

Route::get('/aboutYou', 'LoanApplicationController@PersonalDetails_View');
Route::post('/aboutYou', 'LoanApplicationController@PersonalDetails_Store');

Route::get('/financialDetails', 'LoanApplicationController@FinancialDetails_View');
Route::post('/financialDetails', 'LoanApplicationController@FinancialDetails_Store');

Route::get('/Review', 'LoanApplicationController@ReviewDetails_View');
Route::post('/Review', 'LoanApplicationController@ReviewDetails_Store');

Route::get('/NextSteps', 'LoanApplicationController@NextSteps_View');

Route::get('/VerifyInfo', function () {
    return view('Application.pages.VerifyInfo');
});

/*Paths to load additional user inputs*/
Route::get('/financialDetails_partials', function () {
    return view('Application.includes.financialDetails_partials');
});

Route::get('/aboutYou_partials', function () {
    return view('Application.includes.aboutYou_partials');
});



Route::get('/testing', function () {
    return view('Application.testing');
});




Route::get('/template', function () {
    return view('Application.pages.blank');
});

Route::get('/Intro', function () {
    return view('Application.pages.Intro');
});

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
