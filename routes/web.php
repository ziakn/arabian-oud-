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
 Route::get('/','affiliateController@index');
 Route::get('product/','affiliateController@product');
 Route::get('product_detail/{id?}',['as' => 'product_detail', 'uses' => 'affiliateController@product_detail']);
 Route::get('shop/','affiliateController@shop');
 Route::get('category/{id?}',['as' => 'Category', 'uses' => 'affiliateController@category']);
 Route::get('blog/','affiliateController@blog');
 Route::get('blog_view/{id?}',['as' => 'blog_view', 'uses' => 'affiliateController@blog_view']);
 Route::get('about_us/','affiliateController@about_us');
 Route::get('event/','affiliateController@event');
 Route::get('event_view/{id?}',['as' => 'event_view', 'uses' => 'affiliateController@event_view']);
 Route::get('news_lettre/','affiliateController@news_lettre');
 Route::get('news_lettre_view/{id?}',['as' => 'news_lettre_view', 'uses' => 'affiliateController@news_lettre_view']);