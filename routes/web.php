<?php
use App\Http\Controllers\Admin\DashboardController;
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







//Auth::routes();
Route::fallback(function (){
    return redirect()->route('site.errorPage');

});
Route::get('/', 'HomeController@index')->name('site.home');
Route::get('/error-page', 'HomeController@errorPage')->name('site.errorPage');
Route::get('/news', 'HomeController@getNews')->name('site.news');
Route::get('/adsAdvertising', 'HomeController@getAdsAdvertising')->name('site.adsAdvertising');
Route::get('/imageAlbums', 'HomeController@getImageAlbums')->name('site.imageAlbums');
Route::get('/videos', 'HomeController@getVideos')->name('site.videos');
Route::get('/about-us', 'HomeController@getAboutUs')->name('site.aboutUs');
Route::get('/plans', 'HomeController@getPlans')->name('site.plans');
Route::get('/reports', 'HomeController@getReports')->name('site.reports');
Route::get('/contact-us', 'HomeController@getContactUs')->name('site.contactUs');
Route::get('/activityEvent', 'HomeController@getActivityEvent')->name('site.activityEvent');

Route::get('/post-details/{id}', 'HomeController@getPostDetails')->name('site.postDetails');

Route::get('/next-post/{id}', 'HomeController@getNextNews')->name('site.nextPost');
Route::get('/poster-details/{id}', 'HomeController@getPosterDetails')->name('site.posterDetail');
Route::get('/service/{id}', 'HomeController@getService')->name('site.service');
Route::get('/service/', 'HomeController@getService')->name('site.service');
Route::get('/logout', 'HomeController@getService')->name('logout');
Route::get('/album-details/{id}', 'HomeController@showAlbumDetails')->name('site.showAlbumDetails');
Route::post('/peopleContact', 'HomeController@peopleContact')->name('site.peopleContact');
Route::get('/jobs', 'HomeController@jobs')->name('site.jobs');
Route::get('/jobDetails/{id}/{test}', 'HomeController@jobDetails')->name('site.jobDetails');
Route::get('/ffffff/{id}/{test}', 'HomeController@jobDetails')->name('site.jobDetails');


