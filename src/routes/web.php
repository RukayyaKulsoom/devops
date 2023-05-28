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



// Route::get('/', 'App\Http\Controllers\Controller@viewpage1');
Route::get('/', 'App\Http\Controllers\Controller@viewpage1');
Route::get('/signup', 'App\Http\Controllers\Controller@viewSignUp');
Route::get('/feedback', 'App\Http\Controllers\Controller@viewFeedback');
Route::post('/feedback', 'App\Http\Controllers\Controller@feedback');
Route::post('/signupuser', 'App\Http\Controllers\Controller@signup');
Route::post('/login', 'App\Http\Controllers\Controller@login');

Route::post('/createnews', 'App\Http\Controllers\Controller@news');
Route::get('/createnews', 'App\Http\Controllers\Controller@viewnews');
Route::post('/delete', 'App\Http\Controllers\Controller@delete');

Route::get('/donate', 'App\Http\Controllers\Controller@viewDonate');
Route::post('addDonation1', 'App\Http\Controllers\Controller@giveDonationKashmir');
Route::post('addDonation2', 'App\Http\Controllers\Controller@giveDonationPalastine');
Route::post('addDonation3', 'App\Http\Controllers\Controller@giveDonationUkraine');
Route::post('addDonation4', 'App\Http\Controllers\Controller@giveDonationAfrica');
Route::get('/contactus', 'App\Http\Controllers\Controller@viewContactUs');


Route::get('/signin', function () {
    if(session()->has('data'))
    {
        return view('donate');
    }
    return view('signin');
});

Route::get('/logout', function () {
    if(session()->has('data'))
    {
        session()->pull('data');
    }
    $news = DB::select('select * from createnews');
    return view('page1',['news'=>$news]);
});



