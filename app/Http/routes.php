<?php
include __DIR__.'/admin_routes.php';


Route::group(['middleware'=>'web'],function(){
	Route::controller('/{slug?}','PageController');
});
