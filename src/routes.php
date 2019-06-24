<?php 

Route::get('hello', function(){
	echo 'Hello from the hello package!';
});


Route::get('add/{a}/{b}', 'Snipedev\Hello\HelloController@add');
Route::get('subtract/{a}/{b}', 'Snipedev\Hello\HelloController@subtract');