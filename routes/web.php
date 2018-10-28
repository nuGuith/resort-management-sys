<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/dashboard/home', 'DashboardController@index')->name('dashboard');
    Route::get('/schedule', 'DashboardController@schedule')->name('schedule.index');
    Route::resource('messages', 'MessagesController');
    Route::resource('reservations', 'ReservationsController');
    Route::resource('sales', 'SalesController');
    Route::resource('/m/rooms', 'RoomsController');
    Route::put('/m/rooms', 'RoomsController@update');
    Route::get('/m/rooms/{id}/delete', 'RoomsController@destroy');
    Route::resource('/m/resort', 'ResortController');
    Route::put('/m/resort', 'ResortController@update');
    Route::get('/m/resort/{id}/delete', 'ResortController@destroy');
    Route::resource('/m/prices', 'PricesController');
    Route::put('/m/prices', 'PricesController@update');
    Route::get('/m/prices/{id}/delete', 'PricesController@destroy');
    Route::resource('/m/users', 'UserController');
});

Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:0']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::get('/the-resort', 'DashboardController@resort')->name('resort');
    Route::get('/rooms', 'DashboardController@rooms')->name('rooms');
    Route::get('/viewrooms', 'DashboardController@viewrooms')->name('viewrooms');
    Route::resource('message', 'MessageController');
    Route::resource('schedule', 'ScheduleController');
    Route::resource('reservation', 'ReservationController');
    Route::get('/reservation/{id}/delete', 'ReservationController@destroy');
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
    return view('admin.dashboard.index');
});

/* Route::get('/admin/schedule', function () {
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
}); */



/*
|------------------------------------------------------------------------------------
| GUEST
|------------------------------------------------------------------------------------
*/

/* Route::get('/guest/welcome', function () {
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
}); */