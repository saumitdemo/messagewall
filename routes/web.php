<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MessagesController@index')->name('home');

Route::get('/message_add', 'MessagesController@add')->name('addMessage');

Route::post('/message_add', 'MessagesController@postAdd')->name('postAddMessage');

Route::get('/message_delete/{msg_id}', 'MessagesController@delete');
