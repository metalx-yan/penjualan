
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


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:administrator']], function() {

    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/analisa', 'HomeController@analisa')->name('analisa');
    
    Route::resource('/interior', 'InteriorController');
    Route::resource('/building', 'BuildingController');

    Route::get('increment', 'IncrementController@index')->name('increment.index');
    Route::get('increment/create', 'IncrementController@create')->name('increment.create');
    Route::get('increment/{id}', 'IncrementController@view')->name('increment.view');
    Route::post('increment', 'IncrementController@store')->name('increment.store');
    Route::put('increment/{id}', 'IncrementController@update')->name('increment.update');
    Route::delete('increment/{id}', 'IncrementController@destroy')->name('increment.destroy');
});

Route::group(['prefix' => 'purchasing', 'middleware' => ['auth', 'role:purchasing']], function() {
    Route::get('/', function () {

        return view('purchasing.index');
    });
    
});

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'role:user']], function() {
    Route::get('/', function () {

        return view('manager.index');
    });
    
});

Route::get('click/{id}', 'HomeController@click')->name('click');


Route::get('/', function () {

    return view('welcome', compact('schema', 'records'));
});

Route::get('/ordernow', function () {

    return view('order');
})->name('order');

Route::get('/stockcheck', function () {
    return view('stock');
})->name('stock');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Addchat::routes();
