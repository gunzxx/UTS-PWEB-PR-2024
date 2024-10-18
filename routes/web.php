<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

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

Route::get('/', function () {
    return view('login', [
        'title' => 'Contact APP - Login'
    ]);
});
Route::get('/register', function () {
    return view('register', [
        'title' => 'Contact APP - Register'
    ]);
});
Route::get('/home', function () {
    $contacts = [];
    for ($i=0; $i < 10; $i++) {
        $contacts[] = [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
        ];
    }
    
    return view('home', [
        'contacts' => $contacts,
    ]);
});
