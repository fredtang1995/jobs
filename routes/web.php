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
    return view('welcome');
});

Route::get('/company', 'CompanyController@company')
    ->name('company.company');

Route::get('/company/{id}', 'CompanyController@show')
    ->where('id', '[0-9]+')
    ->name('company.show');

Route::get('/company/create', 'CompanyController@create')
    ->name('company.create');

Route::get('/company/quit', 'CompanyController@quit')
    ->name('company.quit');

Route::patch('/company/{id}', 'CompanyController@update')
    ->where('id', '[0-9]+')
    ->name('company.update');

Route::get('/company/{id}/edit', 'CompanyController@edit')
    ->where('id', '[0-9]+')
    ->name('company.edit');

Route::get('/company/{id}/delete', 'CompanyController@destroy')
    ->where('id', '[0-9]+')
    ->name('company.destroy');

Route::get('/company/{id}/restore', 'CompanyController@restore')
    ->where('id', '[0-9]+')
    ->name('company.restore');

Route::get('/job', 'CompanyController@job')
    ->name('company.job');

Route::post('/company', 'CompanyController@store')
    ->where('id', '[0-9]+')
    ->name('company.store');
/*--------------------------------------------------------------------------------------*/
Route::get('/job/quit', 'jobController@quit')
    ->name('job.quit');

Route::get('/job', 'jobController@job')
    ->name('job.job');

Route::get('/job/create', 'jobController@create')
    ->name('job.create');

Route::post('/job', 'jobController@store')
    ->where('id', '[0-9]+')
    ->name('job.store');

Route::patch('/job/{id}', 'jobController@update')
    ->where('id', '[0-9]+')
    ->name('job.update');

Route::get('/job/{id}/edit', 'jobController@edit')
    ->where('id', '[0-9]+')
    ->name('job.edit');

Route::get('/job/{id}/delete', 'jobController@destroy')
    ->where('id', '[0-9]+')
    ->name('job.destroy');

Route::get('/job/{id}/restore', 'jobController@restore')
    ->where('id', '[0-9]+')
    ->name('job.restore');