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




Route::get('/populer','MapController@index')->name('populer.index');








Route::get('/','HomeController@index')->name('home');

//pie chart controller
Route::get('/laravel_google_chart', 'LaravelGoogleGraph@index');

//route for post controller
Route::get('posts','PostController@index')->name('posts.index');
Route::get('post/{slug}','PostController@details')->name('post.details');
Route::get('contact','ContactController@index')->name('contact.index');
Route::post('contact','ContactController@store')->name('contact.store');

//route for scriber
Route::post('subscriber','SubscriberController@store')->name('subscriber.store');
Auth::routes();

Route::group(['middleware'=>['auth']],function(){
Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');
//route for comments
Route::post('comment/{post}','CommentController@store')->name('comment.store');
Route::get('comment/{id}','CommentController@update')->name('comment.update');
Route::post('comment/{id}','CommentController@edit')->name('comment.updates');

Route::post('replay/{post}','CommentController@stores')->name('replay.stores');


});



//admin related route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
//route for settings  admin



    Route::get('settings','SettingsController@index')->name('settings');
    Route::post('profile-update','SettingsController@updateProfile')->name('profile.update');
Route::post('password-update','SettingsController@updatePassword')->name('password.update');



     //working with resource
    Route::resource('tag','TagController');
Route::get('/tag/{id}','TagController@destroy')->name('tag.destroy');


    
    //route define
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');

//aprove functionality
    Route::get('/pending/post','PostController@pending')->name('post.pending');
    Route::get('/post/{id}/approve','PostController@approval')->name('post.approve');
//route forr favourite post
    Route::get('/favorite','FavoriteController@index')->name('favorite.index');
Route::get('/favorite/{id}','FavoriteController@destroy')->name('favorite.destroy');

//route for comments
    Route::get('comments','CommentController@index')->name('comments.index');
Route::get('/comment/{comment}','CommentController@destroy')->name('comment.destroy');


//route for subscriber
    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::get('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');

//contact 
    Route::get('contact','ContactController@index')->name('contact.index');
 Route::get('/contact/{id}','ContactController@destroy')->name('contact.destroy');
Route::get('contacts/{contact}','ContactController@show')->name('contact.show');

//pichart
Route::get('pi_chart','LaravelGoogleGraph@index')->name('pi_chart.index');






});
Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('post','PostController');

//route for authore comment
Route::get('comments','CommentController@index')->name('comments.index');
Route::get('/comment/{comment}','CommentController@destroy')->name('comment.destroy');


   //route for setting author

    Route::get('settings','SettingsController@index')->name('settings');
    Route::post('profile-update','SettingsController@updateProfile')->name('profile.update');
    Route::post('password-update','SettingsController@updatePassword')->name('password.update');


});