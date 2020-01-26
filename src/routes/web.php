<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['namespace' => 'bazzlylinks\paystack\Http\Controllers'], function () {

        Route::get('paystack','paystackPaymentController@index')->name('paystack');
        Route::post('paystack','paystackPaymentController@payment');

});




