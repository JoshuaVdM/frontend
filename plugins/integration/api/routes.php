<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 30-03-17
 * Time: 19:53
 */

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('visitor', 'Integration\Api\Controllers\VisitorController',
        ['except' => ['index', 'show', 'patch', 'create', 'edit']]);
    Route::resource('speaker', 'Integration\Api\Controllers\SpeakerController',
        ['except' => ['index', 'show', 'patch', 'create', 'edit']]);
    Route::resource('sponsor', 'Integration\Api\Controllers\SponsorController',
        ['except' => ['index', 'show', 'patch', 'create', 'edit']]);
    Route::resource('event', 'Integration\Api\Controllers\EventController',
        ['except' => ['index', 'show', 'patch', 'create', 'edit']]);
    Route::resource('schedule', 'Integration\Api\Controllers\ScheduleController',
        ['except' => ['index', 'show', 'patch', 'create', 'edit']]);
});