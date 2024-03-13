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

Route::get('/', function () {

    $nav_links = [
        [
            'text' => "characters",
            'status' => false,
        ],
        [
            'text' => "comics",
            'status' => true,
        ],
        [
            'text' => "movies",
            'status' => false,
        ],
        [
            'text' => "tv",
            'status' => false,
        ],
        [
            'text' => "games",
            'status' => false,
        ],
        [
            'text' => "collectibles",
            'status' => false,
        ],
        [
            'text' => "videos",
            'status' => false,
        ],
        [
            'text' => "fans",
            'status' => false,
        ],
        [
            'text' => "news",
            'status' => false,
        ],
        [
            'text' => "shop",
            'status' => false,
        ],
    ];

    return view('welcome', compact('nav_links'));
})->name('homePage');

Route::get('/about', function () {

    $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto aut excepturi deleniti cupiditate deserunt sint reprehenderit quibusdam tempore voluptas quis, nisi id voluptatibus quaerat repellat doloremque eum eos laborum eaque.';

    return view('about', compact('lorem'));
})->name('aboutPage');
