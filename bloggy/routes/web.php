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
    //echo "welcome";
    return view('welcome');
});
Route::get('/lemot', function () {
    echo "kenapa kok lemot";
});
Route::get('/home', function () {
    echo "disini omah";
});
Route::get('/papaya', function () {
    echo "turtle";
});
Route::get('/sama', function () {
    return "sama saja sami mawon omah";
});
Route::get('/pohong', function () {
    return view('kotak') ;
});
//pakai kontroller
Route::get('/terong','CapungController@index');
//memanggil Controller
//capung dengan fungsi pijangga
Route::get('/brokoli','CapungController@pujangga');
Route::get('/brokoli/dewa','CapungController@siti');

//Route::get('/supplier','SupplierController@index');
//u/ customer
//Route::get('/customer','CustomerController@index');
//u/ add customer
//Route::get('/customer/create','CustomerController@create');
//u/ store customer
//Route::get('/customer/store','CustomerController@store');
Route::resource('customer','CustomerController');
Route::resource('supplier','SupplierController');
Route::resource('employee','EmployeeController');
