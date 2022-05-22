<?php


Route::get('calculator',function(){
    return "From Calculator Package";
});

Route::get('add', function () {
    Calculator::add(5)->getResult();
});