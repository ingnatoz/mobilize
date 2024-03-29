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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('demo', function () {
    return view('theme.layouts.demo');
 });

// -> CAMION
Route::get('crearCamion', function () {
    return view('pages.mobilize.camion.create');
 });

// -> CONDUCTOR
Route::get('verConductor', function () {
    return view('pages.mobilize.conductor.index');
 });

Route::get('crearConductor', function () {
    return view('pages.mobilize.conductor.create');
 });

// -> LUGAR
Route::get('crearLugar', function () {
    return view('pages.mobilize.lugar.create');
 });
Route::get('verLugar', function () {
    return view('pages.mobilize.lugar.index');
 });

// -> TAG
Route::get('crearTag', function () {
    return view('pages.mobilize.tag.create');
 });

 // -> VIAJES
Route::get('crearViaje', function () {
    return view('pages.mobilize.viaje.create');
 });

Route::get('verViaje', function () {
    return view('pages.mobilize.viaje.index');
 });