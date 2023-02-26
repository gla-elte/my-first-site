<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     //return view('welcome');
//     // return 'Hello world';
//     // return ['foo' => 'bar'];
//     $username = 'John';
//     return view('welcome', [
//         'name' => $username
//     ]);
// });
Route::view('/', 'welcome', ['name' => 'John']);

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact');

Route::get('/pass-array', function () {
  $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to the work',
    'Task #4'
  ];

//   return view('tasklist', [
//     'tasks' => $tasks
//   ]);

//   return view('tasklist')->withTasks($tasks);
  $foobar = 'foobar';
//   return view('tasklist')->withTasks($tasks)->withFoo($foobar);
  return view('tasklist')->with([
    'foo' => $foobar,
    'tasks' => $tasks
  ]);

});

Route::get('/request-test', function () {
  return view('request-inputs', [
    'title' => request('title'), // példa: http://127.0.0.1:8000/request-test?title=MyFirstTitle
  ]);
});
