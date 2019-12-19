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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'frontEnd'],function(){
    //Route::get('listing','ListingController@create')->name('create_listing');

    Route::get('list-your-property','ListingController@create')->name('create_listing');

    //Route::get('home','ListingController@index')->name('home');
    Route::get('/','ListingController@index')->name('home');

    Route::get('villa/villa1','ListingController@villa_info')->name('villa1');

    Route::get("villa/{villas}","ListingController@villas")->name("villa_details");

    Route::post("villa/book-property/{villas}","ListingController@villas_book_property")->name("villa.book_property");

    //Route::get("sendmail",'SendEmailController@enquiryForm')->name("send_email");
    //Route::post('/',['as' => 'contact_store', 'uses' => 'SendEmailController@store']);

       // New Contact us Route 
    Route::post("villa/contact","SendEmailController@store")->name("contact.store");

    Route::get("city/alibaug","ListingController@searchVillasAlibaug")->name("searchVillasAlibaug");

    Route::get("city/lonavala","ListingController@searchVillasLonavala")->name("searchVillasLonavala");

    Route::get("city/panvel","ListingController@searchVillasPanvel")->name("searchVillasPanvel");

    Route::get("city/khandala","ListingController@searchVillasKhandala")->name("searchVillasKhandala");

    Route::post("ajaxBookVilla","ListingController@ajaxBookVilla")->name("ajaxBookVilla");
    

});

// Admin Panel Routes

Route::group(['namespace' => 'admin'],function(){

    Route::get('villas/dashboard','VillasController@dashboard')->name('admin.dashboard');
    
    Route::get('villas/create','VillasController@create')->name('create_villas');

    Route::post('villas/store', 'VillasController@store')->name('admin.villas.store');

    Route::post('villas/image-upload/{post}','VillasController@uploadImages')->name('admin.villas.uploadImages');

    Route::get('villas/show', 'VillasController@index')->name('admin.villas.show');

    Route::get('villas/edit/{post}', 'VillasController@edit_villas')->name('admin.villas.edit');

    Route::post('villas/update/{post}', 'VillasController@update_villas')->name('admin.villas.update');

    Route::delete('villas/delete/{post}', 'VillasController@destroy')->name('admin.villas.delete');

    Route::delete('villas/delete_pix/{post}', 'VillasController@destroy_pix')->name('admin.villas_pix.delete');

    Route::get('villas/dashboard', 'VillasController@dashboard')->name('admin.villas.dashboard');

    Route::get('villas/show-featured_villas','VillasController@featured_villas')->name('admin.featured-villas');

    Route::get('bookings/show', 'VillasController@bookings')->name('admin.bookings.show');

});



