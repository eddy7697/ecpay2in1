<?php

Route::group([
    'namespace' => 'Eddy7697\Ecpay2in1\Controllers',
    'prefix'    => 'allpay_demo'],
    function () {
        Route::get('/', 'DemoController@index');
        Route::get('/checkout', 'DemoController@checkout');
    }
);
