<?php

Route::group([
    'namespace' => 'eddy7697\ecpay2in1\Controllers',
    'prefix'    => 'allpay_demo'],
    function () {
        Route::get('/', 'DemoController@index');
        Route::get('/checkout', 'DemoController@checkout');
    }
);
