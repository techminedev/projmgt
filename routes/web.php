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

// USERS ROUTES
Route::get('/users/search', 'UserController@search');
Route::get('/users', 'UserController@index');
Route::get('/users/register', 'UserController@create');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/{user}/edit', 'UserController@edit');



// BILLING ROUTES
Route::get('/business-partner/search', 'BusinessPartnerController@search');
Route::get('/business-partner', 'BusinessPartnerController@index');
Route::get('/business-partner/create', 'BusinessPartnerController@create');
Route::get('/business-partner/{business_partner}', 'BusinessPartnerController@show');
Route::post('/business-partner/store', 'BusinessPartnerController@store');
Route::get('/business-partner/{business_partner}/edit', 'BusinessPartnerController@edit');
Route::patch('/business-partner/{business_partner}', 'BusinessPartnerController@update');
Route::delete('/business-partner/{business_partner}', 'BusinessPartnerController@destroy');
Route::get('/business-partner/{business_partner}', 'BusinessPartnerController@show');

// PROJECT LISTING 

Route::get('/project-listing', 'ProjectListingController@index');
Route::get('/project-listing/create', 'ProjectListingController@create');
Route::post('/project-listing/store', 'ProjectListingController@store');
Route::get('/project-listing/{project_listing}', 'ProjectListingController@edit');
Route::patch('/project-listing/{project_listing}', 'ProjectListingController@update');
Route::delete('/project-listing/{project_listing}', 'ProjectListingController@destroy');



// MEASUREMENTS ROUTES
Route::get('/measurement', 'MeasurementController@index');
Route::get('/measurement/create', 'MeasurementController@create');
Route::post('/measurement/store', 'MeasurementController@store');
Route::get('/measurement/{measurement}', 'MeasurementController@show');
Route::get('/measurement/{measurement}/edit', 'MeasurementController@edit');
Route::patch('/measurement/{measurement}', 'MeasurementController@update');
Route::delete('/measurement/{measurement}', 'MeasurementController@destroy');


// MATERIAL DETAILS
Route::get('/material-detail', 'MaterialDetailController@index');
Route::get('/material-detail/create', 'MaterialDetailController@create');
Route::post('/material-detail/store', 'MaterialDetailController@store');
Route::get('/material-detail/{material}', 'MaterialDetailController@show');
Route::get('/material-detail/{material}/edit', 'MaterialDetailController@edit');
Route::patch('/material-detail/{material}', 'MaterialDetailController@update');
Route::delete('/material-detail/{material}', 'MaterialDetailController@destroy');


// ACCOUNT DETAILS

Route::get('/account', 'AccountDetailController@index');
Route::get('/account/create', 'AccountDetailController@create');
Route::post('/account/store', 'AccountDetailController@store');
Route::get('/account/{account}', 'AccountDetailController@show');
Route::get('/account/{account}/edit', 'AccountDetailController@edit');
Route::patch('/account/{account}', 'AccountDetailController@update');
Route::delete('/account/{account}', 'AccountDetailController@destroy');

// PROVINCE DETAILS
Route::get('/province', 'ProvinceController@index');
Route::get('/province/create', 'ProvinceController@create');
Route::post('/province/store', 'ProvinceController@store');
Route::get('/province/{province}', 'ProvinceController@show');
Route::get('/province/{province}/edit', 'ProvinceController@edit');
Route::patch('/province/{province}', 'ProvinceController@update');
Route::delete('/province/{province}', 'ProvinceController@destroy');

// MUNICIPALITY DETAILS
Route::get('/municipality', 'MunicipalityController@index');
Route::get('/municipality/create', 'MunicipalityController@create');
Route::post('/municipality/store', 'MunicipalityController@store');
Route::get('/municipality/{municipality}', 'MunicipalityController@show');
Route::get('/municipality/{municipality}/edit', 'MunicipalityController@edit');
Route::patch('/municipality/{municipality}', 'MunicipalityController@update');
Route::delete('/municipality/{municipality}', 'MunicipalityController@destroy');

// BARANGAY DETAILS
Route::get('/barangay', 'BarangayController@index');
Route::get('/barangay/create', 'BarangayController@create');
Route::post('/barangay/store', 'BarangayController@store');
Route::get('/barangay/{barangay}', 'BarangayController@show');
Route::get('/barangay/{barangay}/edit', 'BarangayController@edit');
Route::patch('/barangay/{barangay}', 'BarangayController@update');
Route::delete('/barangay/{barangay}', 'BarangayController@destroy');



// WORK GROUP ROUTES
Route::get('/workgroup', 'WorkGroupController@index');
Route::get('/workgroup/create', 'WorkGroupController@create');
Route::post('/workgroup/store', 'WorkGroupController@store');
Route::get('/workgroup/{workgroup}', 'WorkGroupController@show');
Route::get('/workgroup/{workgroup}/edit', 'WorkGroupController@edit');
Route::patch('/workgroup/{workgroup}', 'WorkGroupController@update');
Route::delete('/workgroup/{workgroup}', 'WorkGroupController@destroy');