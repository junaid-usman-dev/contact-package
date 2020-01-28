<?php

use Illuminate\Http\Request;
/*
* Defing Routes for Package
*/

Route::group(['namespace'=>'Junaid\Contact\Controllers'],function(){

    Route::get ('contact-form', 'ContactController@index')->name('contact-form');
    Route::post ('contact-submit', 'ContactController@store')->name('contact-submit');

});


// Route::get ('contact-form', function(){
//     return view('contact::contact');
// })->name('contact-form');


// Route::post ('contact-submit', function(Request $request){
//     return $request->all();
// })->name('contact-submit');
