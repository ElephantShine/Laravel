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

Route::get("/", ["as" => "index", "uses" => "HomeController@Index"]);

Route::get("/Contact", ["as" => "contact", "uses" => "ContactController@Index"]);

Route::get("/Contact/Success", ["as" => "contactSuccess", "uses" => "ContactController@Success"]);

Route::get("/Portfolios", ["as" => "portfolio", "uses" => "PortfolioController@Index"]);

Route::get("/Portfolios/{name}", ["as" => "portfolioDetail", "uses" => "PortfolioController@Portfolio"]);

Route::get("/Blogs/{name}", ["as" => "blog", "uses" => "BlogController@Index"]);
