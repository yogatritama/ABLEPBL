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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/login', function() {
    return redirect()->route('index')->withInput()->with('status', 'Prohibited');;
});
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/register_tutor', 'AuthController@registerTutor')->name('register.tutor');
Route::post('/register_mahasiswa', 'AuthController@registerMahasiswa')->name('register.mahasiswa');

Route::group(['namespace' => 'Tutor', 'prefix' => 'tutor', 'as' => 'tutor.', 'middleware' => 'auth:tutor'], function () {
    Route::get('/', 'TutorController@index')->name('index');
    Route::post('/create_test', 'TutorController@createTest')->name('test.create');
    Route::get('/detail_test/{test}', 'TutorController@detailTest')->name('test.detail');
    Route::get('/create_question/{test}', 'TutorController@createQuestion')->name('test.question.create');
    Route::post('/create_question/{test}', 'TutorController@saveQuestion')->name('test.question.create');
});
