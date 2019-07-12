<?php

Route::group(['middleware' => 'auth:api'], function() {
    Route::apiResources(['/users' => 'API\UserController']);
});