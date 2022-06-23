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
    $data = [
        'navElements' => [
            [
                'nav' => 'About Us',
                'link' => '/about-us'
            ],
            [
                'nav' => 'Products',
                'link' => '/products'
            ],
            [
                'nav' => 'News',
                'link' => '/news'
            ],
            [ 
                'nav' => 'Contact Us',
                'link' => '/contact-us'
            ],
            [ 
                'nav' =>'Work With Us',
                'link' => '/work-with-us'
            ],
            [ 
                'nav' => 'GitHub',
                'link' => '/github'
            ],
        ],
    ];
    return view('home', $data);
});

Route::get('/about-us', function() {
    return view('about-us');
});

Route::get('/products', function() {
    return view('products');
});

Route::get('/news', function() {
    return view('news');
});

Route::get('/contact-us', function() {
    return view('contact-us');
});

Route::get('/work-with-us', function() {
    return view('work-with-us');
});

Route::get('/github', function() {
    return view('github');
});
