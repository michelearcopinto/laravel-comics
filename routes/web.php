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

    $comics = config('comics');

    $cta_boxes = [
        [
            'pathImg' => "resources/img/buy-comics-digital-comics.png",
            'text' => "digital comics",
        ],
        [
            'pathImg' => "resources/img/buy-comics-merchandise.png",
            'text' => "dc merchandise",
        ],
        [
            'pathImg' => "resources/img/buy-comics-subscriptions.png",
            'text' => "subscription",
        ],
        [
            'pathImg' => "resources/img/buy-comics-shop-locator.png",
            'text' => "comic shop locator",
        ],
        [
            'pathImg' => "resources/img/buy-dc-power-visa.svg",
            'text' => "dc power visa",
        ],
    ];

    $dc_comics_first = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "videos",
        "news",
    ];

    $shop_second = [
        "shop DC",
        "shop DC collectibles",
    ];

    $dc_third = [
        "terms of use",
        "privacy policy (new)",
        "ad choices",
        "advertising",
        "jobs",
        "subscriptions",
        "talent workshops",
        "CPSC certificates",
        "ratings",
        "shop help",
        "contact us",
    ];

    $sites_fourth = [
        "DC",
        "MAD magazine",
        "DC kids",
        "DC universe",
        "DC power visa",
    ];

    $socials_imgs = [
        "resources/img/footer-facebook.png",
        "resources/img/footer-periscope.png",
        "resources/img/footer-pinterest.png",
        "resources/img/footer-twitter.png",
        "resources/img/footer-youtube.png",
    ];

    return view('pages.home', compact('nav_links', 'comics', 'cta_boxes', 'dc_comics_first', 'shop_second', 'dc_third', 'sites_fourth', 'socials_imgs'));
})->name('homePage');

Route::get('/details', function () {

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

    $dc_comics_first = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "videos",
        "news",
    ];

    $shop_second = [
        "shop DC",
        "shop DC collectibles",
    ];

    $dc_third = [
        "terms of use",
        "privacy policy (new)",
        "ad choices",
        "advertising",
        "jobs",
        "subscriptions",
        "talent workshops",
        "CPSC certificates",
        "ratings",
        "shop help",
        "contact us",
    ];

    $sites_fourth = [
        "DC",
        "MAD magazine",
        "DC kids",
        "DC universe",
        "DC power visa",
    ];

    $socials_imgs = [
        "resources/img/footer-facebook.png",
        "resources/img/footer-periscope.png",
        "resources/img/footer-pinterest.png",
        "resources/img/footer-twitter.png",
        "resources/img/footer-youtube.png",
    ];

    return view('pages.details', compact('nav_links', 'dc_comics_first', 'shop_second', 'dc_third', 'sites_fourth', 'socials_imgs'));
})->name('detailsPage');
