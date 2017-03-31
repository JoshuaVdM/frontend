<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 30-03-17
 * Time: 19:53
 */

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('soap', 'Integration\Api\Controllers\SoapServiceController@SoapService');
});