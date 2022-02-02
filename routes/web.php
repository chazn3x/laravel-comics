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
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    $comics = config("comics");
    return view('home', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories, "comics" => $comics]);
});

Route::get('/characters', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('characters', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/movies', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('movies', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/tv', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('tv', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/games', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('games', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/collectibles', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('collectibles', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/videos', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('videos', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/fans', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('fans', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/news', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('news', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});

Route::get('/shop', function () {
    $headerLinks = config("links");
    $footerTopLinks = config("footerTopLinks");
    $footerMainCategories = config("footerMainCategories");
    return view('shop', ["links" => $headerLinks, "topLinks" => $footerTopLinks, "mainCategories" => $footerMainCategories]);
});