<?php

Route::auth();

Route::get('/login', 'Auth\LoginController@show');
Route::get('/register','Auth\RegisterController@show');
Route::get('/logout','Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function()
{
    Route::get('/','ViewController@index');

    Route::get('/e-office','EofficeController@index');
   // Route::post('/e-office','EofficeController@view');

    Route::get('/e-office/never-login-users-for-today','EofficeController@neverlogin');
    Route::get('/e-office/never-login-users-for-last-7days','EofficeController@neverlogin7days');
    Route::get('/e-office/never-login-users-for-a-month','EofficeController@neverloginformonth');
    Route::get('/e-office/never-login-users/{from_date}/{to_date}','EofficeController@neverlogincustomdate');
    Route::post('/e-office/never-login-users-custom','EofficeController@neverlogincustom');

    Route::get('/e-office/documentation-process-for-today','EofficeController@document'); 
    Route::get('/e-office/documentation-process-for-last-7days','EofficeController@document7days'); 
    Route::get('/e-office/documentation-process-for-a-month','EofficeController@documentformonth');
    Route::get('/e-office/documentation-process/{from_date}/{to_date}','EofficeController@documentcustomdate');
    Route::post('/e-office/documentation-process-custom','EofficeController@documentcustom');

    Route::get('/e-office/no-action-for-today','EofficeController@noaction');
    Route::get('/e-office/no-action-for-last-7days','EofficeController@noaction7days');
    Route::get('/e-office/no-action-for-a-month','EofficeController@noactionformonth');
    Route::get('/e-office/no-action/{from_date}/{to_date}','EofficeController@noactioncustomdate');
    Route::post('/e-office/no-action-custom','EofficeController@noactioncustom');


    Route::get('/web-portal','WebportalController@webportal');
    Route::get('/webportal/api/dept', 'WebportalController@apidept');


    
    // Route::get('/webportal-cview','WebportalController@webpotralcview');
    // Route::get('/webportal-plogin','WebportalController@webportalplogin');
    

    Route::get('/server','ServerController@index');
    Route::get('/server/{server_name}','ServerController@server');

    Route::get('test','ViewController@test');
   
});

Auth::routes();