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
| ADMIN
|------------------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', function () {
    return view('admin.admin-dashboard');
});

Route::get('/admin/schedule', function () {
    return view('admin.admin-schedule');
});

Route::get('/admin/reservations', function () {
    return view('admin.admin-reservations');
});

Route::get('/admin/view/reservation', function () {
    return view('admin.admin-view-reservation');
});

Route::get('/admin/sales', function () {
    return view('admin.admin-sales');
});

Route::get('/admin/m/rooms', function () {
    return view('admin.admin-m-rooms');
});

Route::get('/admin/m/resort', function () {
    return view('admin.admin-m-resort');
});

Route::get('/admin/m/prices', function () {
    return view('admin.admin-m-prices');
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