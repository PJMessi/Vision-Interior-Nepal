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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/', 'PageController@index')->name('index');
Route::get('/blogs', 'BlogController@index')->name('blogs');
Route::get('/blogs/{blogId}', 'BlogController@blog')->name('blog');
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/projects/{projectId}', 'ProjectController@project')->name('project');
Route::get('/contacts', 'ContactController@index')->name('contacts');
Route::post('/contacts/message', 'ContactController@message')->name('message');
