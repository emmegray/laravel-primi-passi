<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $user = 'handsome guy';
    $age = 28;
    $job = 'Full-Stack Web Developer';
    $email = 'coolguy@gmail.com';
    $data = [
        'user' => $user,
        'age' => $age,
        'job' => $job,
        'email' => $email,
        'tools' =>['JavaScript', 'Vue JS', 'Sass', 'Laravel']
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {

    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, cumque doloremque eius natus sit deserunt non facere dolores repellat deleniti fugiat pariatur aliquid voluptatum dolor perspiciatis, soluta debitis ad eaque!";
    $data = [
        'text' => $text,
    ];
    return view('about', $data);
})->name('about');
