<?php

if(config('dotenveditor.activated')){
    Route::group([
        'middleware' => config('dotenveditor.middleware'),
        'middlewareGroups' => config('dotenveditor.middleware_groups')
    ],
        function(){
            Route::get(config('dotenveditor.route'), 'Jeylabs\DotenvEditor\Http\Controller\EnvController@overview');
            Route::post(config('dotenveditor.route') . '/add', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@add');
            Route::post(config('dotenveditor.route') . '/update', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@update');
            Route::get(config('dotenveditor.route') . '/createbackup', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@createBackup');
            Route::get(config('dotenveditor.route') . '/deletebackup/{timestamp}', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@deleteBackup');

            Route::get(config('dotenveditor.route') . '/restore/{backuptimestamp}', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@restore');
            Route::post(config('dotenveditor.route') . '/delete', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@delete');
            Route::get(config('dotenveditor.route') . '/download/{filename?}', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@download');
            Route::post(config('dotenveditor.route') . '/upload', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@upload');
            Route::get(config('dotenveditor.route') . '/getdetails/{timestamp?}', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@getDetails');

            Route::get(config('dotenveditor.route') . '/test', 'Jeylabs\DotenvEditor\Http\Controller\EnvController@test');
        });
}
