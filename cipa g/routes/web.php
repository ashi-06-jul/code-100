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

Route::get('/ad', function(){
    return view('ad');
});
Route::get('/register', function(){
    return view('register');
});

Route::get('/hello', function(){
    return view('hello');
});


Route::get('/functions', function(){
    return view('functions');
});

Route::get('/config', function(){
    return view('config');
});

Route::get('/insert', function () {
    return view('insert');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/campaigns', function () {
    return view('campaigns');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/testimonial', function(){
    return view('testimonial');
});

Route::get('/testimonial1', function(){
    return view('testimonial1');
});
Route::get('/recentevents', function () {
    return view('recentevents');
});

Route::get('/partners', function(){
    return view('partners');
});

Route::get('/developers', function(){
    return view('developers');
});
Route::get('/become_a_member', function () {
    return view('become_a_member');
});
Route::POST('/become_a_member', 'VolunteerController@insert'); 


Route::POST('/faq', 'FaqController@insert'); 
Route::get('/faq', 'MailController@send'); 
Route::get('/faq', 'MailController@email'); 
//Route::get('/faq', 'FaqController@getdata');

Route::get('/', function () {
    return view('index');
});

Route::get('/faq', function () {
  $con=DB::table('faqs')->get();
    return view('faq',compact('con'));
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/help', function () {
    return view('help');
  });
    Route::get('/home', function () {
    return view('home');
});
Route::get('/accolades', function () {
    return view('accolades');
});

    Route::get('/news', function () {
    return view('news');
});
    Route::get('/cleft_pallets', function () {
    return view('cleft_pallets');
});
      Route::get('/About Us1', function () {
    return view('About Us1');
});
     Route::get('/ortho', function () {
    return view('ortho');
});
     Route::get('/i', function () {
    return view('index');
});
   Route::get('/Media', function () {
    return view('Media');
});
     Route::get('/contact', function () {
    return view('contact');
});
     Route::get('/whoweare', function () {
    return view('whoweare');
});
      Route::get('/ourapproach', function () {
    return view('ourapproach');
});
    Route::get('/wherewework', function () {
    return view('wherewework');
});
  Route::get('/seminar', function () {
    return view('seminar');
});
    Route::get('/corevalues', function () {
    return view('corevalues');
});
        Route::get('/management', function () {
    return view('management');
});
         Route::get('/getinvolved', function () {
    return view('getinvolved');
});
         Route::get('/videos', function () {
    return view('videos');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/story', function () {
  $con=DB::table('stories')->get();
    return view('story',compact('con'));
});
Route::POST('/story', 'StoryController@insert'); 

    
Route::get('/user', function () {
    return view('user');
});

Route::post('/insert','Controller@insert');
Route::post('user',['uses' => 'UserController@store']);


Route::get('index/{id}', function ($id) {
	$names =DB::table('index')->find($id);
	dd($names);
    return view('index',compact('name'));
});
Route::get('index', function () {
	$name =DB::table('index')->get();

    return view('index',compact('name'));
});
Route::get('/index11',['uses' => 'RegisterController@register']);
Route::POST('index11',['uses' => 'RegisterController@store']);

Route::POST('/register', 'RegisterController@register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
