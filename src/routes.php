<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'CalmTech\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'CalmTech\Calculator\CalculatorController@subtract');