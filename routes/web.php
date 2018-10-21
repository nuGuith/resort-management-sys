<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    //Route::get('/', 'DashboardController@index')->name('dash');
    Route::get('/', 'DashboardController@welcome')->name('welcome');
    Route::resource('_404', '_404Controller');
    Route::resource('_500', '_500Controller');
    Route::resource('basic-table', 'BasicTableController');
    Route::resource('blank', 'BlankController');
    Route::resource('buttons', 'ButtonsController');
    Route::resource('calendar', 'CalendarController');
    Route::resource('charts', 'ChartsController');
    Route::resource('chat', 'ChatController');
    Route::resource('compose', 'ComposeController');
    Route::resource('datatable', 'DatatableController');
    Route::resource('email', 'EmailController');
    Route::resource('forms', 'FormsController');
    Route::resource('google-maps', 'GoogleMapsController');
    Route::resource('signin', 'SigninController');
    Route::resource('signup', 'SignupController');
    Route::resource('ui', 'UIController');
    Route::resource('vector-maps', 'VectorMapsController');
    Route::resource('users', 'UserController');
});

Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:0']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::get('/the-resort', 'DashboardController@resort')->name('resort');
    Route::get('/rooms', 'DashboardController@rooms')->name('rooms');
    Route::get('/schedule', 'DashboardController@schedule')->name('schedule');
    Route::resource('reservation', 'ReservationController');
    Route::resource('users', 'UserController');
});

Route::get('/', function () {
    return view('guest.guest-welcome');
});


/*
|------------------------------------------------------------------------------------
| GUEST
|------------------------------------------------------------------------------------
*/

Route::get('/guest/welcome', function () {
    return view('guest.guest-welcome');
});

Route::get('/guest/the/resort', function () {
    return view('guest.guest-the-resort');
});

Route::get('/guest/rooms', function () {
    return view('guest.guest-rooms');
});

Route::get('/guest/schedule', function () {
    return view('guest.guest-schedule');
});

Route::get('/guest/reservation', function () {
    return view('guest.guest-reservation');
});

Route::get('/guest/new/reservation', function () {
    return view('guest.guest-new-reservation');
});