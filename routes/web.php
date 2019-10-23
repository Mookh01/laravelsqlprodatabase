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
//use Illuminate\Filesystem\Filesystem;
use App\Services\Twitter;
use Illuminate\Support\ServiceProvider;
//Here we bind something into the service container
// // 1.
// app()->bind('task', function () {
//     return new \App\Task;
// });
// // 2.
// app()->singleton('example', function () {
//     return new \App\Example;
// });
// // 3.
// app()->singleton('twitter', function () {
//     // return new Twitter(config(''));
//     //return new \App\Services\Twitter('asfdajsdlfasdsdfasf');
//     return new Twitter('asfdajsdlfasdsdfasf');
// });

//4.
//app()->singleton('App\Services\Twitter', function () {
    //return new Twitter(config(''));
    //return new \App\Services\Twitter('asfdajsdlfasdsdfasf');
    // return new Twitter('asfdajsdlfasdsdfasf');
//});



Route::get('/', function (Twitter $twitter) {
//Route::get('/', function () {
    dd($twitter);
    //dd(app('task'));
    return view('welcome');
});


Route::resource('projects', 'ProjectsController');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

// Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');


