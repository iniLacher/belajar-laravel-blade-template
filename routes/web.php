<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
  return view('hello', ['nama' => 'Abdi']);
});


Route::get('/endcoding', function(Request $request){
  return view('html-endcoding', ['isi' => $request->input('isi')]);
});
