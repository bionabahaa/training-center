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



Route::get('/lang/{lang}','Backend\LanguageController@index')->name('dashboard_changelang');


Route::group(['middleware' => 'Lang'], function () {



    Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', 'Frontend\FrontendController@index')->name('frontend_index');
//Route::get('/', 'Frontend\FrontendController@index')->name('frontend_index');



//aboutus


    Route::get('/about_us','Frontend\AboutUsController@index')->name('about_us');
    Route::get('/about_us/create','Frontend\AboutUsController@create')->name('create_about_us');
    Route::post('/about_us/create','Frontend\AboutUsController@store')->name('store_about_us');
    Route::get('/about_us/show/{id}','Frontend\AboutUsController@show')->name('show_about_us');
    Route::get('/about_us/edit/{id}','Frontend\AboutUsController@edit')->name('edit_about_us');
    Route::post('/about_us/update/{id}','Frontend\AboutUsController@update')->name('update_about_us');
    Route::get('/about_us/delete/{id}','Frontend\AboutUsController@destroy')->name('delete_about_us');
    Route::get('/about_us/view','Frontend\AboutUsController@view')->name('view_about_us');



    //contactus

    Route::get('/contact_us','Frontend\ContactUsController@index')->name('contact_us');
    Route::get('/contact_us/create','Frontend\ContactUsController@create')->name('create_contact_us');
    Route::post('/contact_us/create','Frontend\ContactUsController@store')->name('store_contact_us');
    Route::get('/contact_us/delete/{id}','Frontend\ContactUsController@destroy')->name('delete_contact_us');






    //faqs


    Route::get('/faqs','Frontend\FaqController@index')->name('faqs');
    Route::get('/faqs/create','Frontend\FaqController@create')->name('create_faqs');
    Route::post('/faqs/create','Frontend\FaqController@store')->name('store_faqs');
    Route::get('/faqs/show/{id}','Frontend\FaqController@show')->name('show_faqs');
    Route::get('/faqs/edit/{id}','Frontend\FaqController@edit')->name('edit_faqs');
    Route::post('/faqs/update/{id}','Frontend\FaqController@update')->name('update_faqs');
    Route::get('/faqs/delete/{id}','Frontend\FaqController@destroy')->name('delete_faqs');
    Route::get('/faqs/view','Frontend\FaqController@view')->name('view_faqs');



    //slider


    Route::get('/slider','Frontend\SliderController@index')->name('slider');
    Route::get('/slider/create','Frontend\SliderController@create')->name('create_slider');
    Route::post('/slider/create','Frontend\SliderController@store')->name('store_slider');
    Route::get('/slider/show/{id}','Frontend\SliderController@show')->name('show_slider');
    Route::get('/slider/edit/{id}','Frontend\SliderController@edit')->name('edit_slider');
    Route::post('/slider/update/{id}','Frontend\SliderController@update')->name('update_slider');
    Route::get('/slider/delete/{id}','Frontend\SliderController@destroy')->name('delete_slider');
    Route::get('/slider/view','Frontend\SliderController@view')->name('view_slider');




    //comments


    Route::get('/comments','Frontend\CommentsController@index')->name('comments');
    Route::get('/comments/create','Frontend\CommentsController@create')->name('create_comments');
    Route::post('/comments/create','Frontend\CommentsController@store')->name('store_comments');
    Route::get('/comments/show/{id}','Frontend\CommentsController@show')->name('show_comments');
    Route::get('/comments/edit/{id}','Frontend\CommentsController@edit')->name('edit_comments');
    Route::post('/comments/update/{id}','Frontend\CommentsController@update')->name('update_comments');
    Route::get('/comments/delete/{id}','Frontend\CommentsController@destroy')->name('delete_comments');
    Route::get('/comments/view','Frontend\CommentsController@view')->name('view_comments');





    //clients


    Route::get('/clients','Frontend\ClientsController@index')->name('clients');
    Route::get('/clients/create','Frontend\ClientsController@create')->name('create_clients');
    Route::post('/clients/create','Frontend\ClientsController@store')->name('store_clients');
    Route::get('/clients/show/{id}','Frontend\ClientsController@show')->name('show_clients');
    Route::get('/clients/edit/{id}','Frontend\ClientsController@edit')->name('edit_clients');
    Route::post('/clients/update/{id}','Frontend\ClientsController@update')->name('update_clients');
    Route::get('/clients/delete/{id}','Frontend\ClientsController@destroy')->name('delete_clients');
    Route::get('/clients/view','Frontend\ClientsController@view')->name('view_clients');




    //gallery



    Route::get('/gallery','Frontend\GalleryController@index')->name('gallery');
    Route::get('/gallery/create','Frontend\GalleryController@create')->name('create_gallery');
    Route::post('/gallery/create','Frontend\GalleryController@store')->name('store_gallery');
    Route::get('/gallery/show/{id}','Frontend\GalleryController@show')->name('show_gallery');
    Route::get('/gallery/edit/{id}','Frontend\GalleryController@edit')->name('edit_gallery');
    Route::post('/gallery/update/{id}','Frontend\GalleryController@update')->name('update_gallery');
    Route::get('/gallery/delete/{id}','Frontend\GalleryController@destroy')->name('delete_gallery');
    Route::get('/gallery/view','Frontend\GalleryController@view')->name('view_gallery');




    //events



    Route::get('/events','Frontend\EventsController@index')->name('events');
    Route::get('/events/create','Frontend\EventsController@create')->name('create_events');
    Route::post('/events/create','Frontend\EventsController@store')->name('store_events');
    Route::get('/events/show/{id}','Frontend\EventsController@show')->name('show_events');
    Route::get('/events/edit/{id}','Frontend\EventsController@edit')->name('edit_events');
    Route::post('/events/update/{id}','Frontend\EventsController@update')->name('update_events');
    Route::get('/events/events_details/{id}', 'Frontend\EventsController@viewevents_details')->name('events_details');
    Route::get('/events/delete/{id}','Frontend\EventsController@destroy')->name('delete_events');
    Route::get('/events/view','Frontend\EventsController@view')->name('view_events');




    //blog

   Route::get('/blog','Frontend\BlogController@index')->name('blog');
   Route::get('/blog/create','Frontend\BlogController@create')->name('create_blog');
   Route::post('/blog/create','Frontend\BlogController@store')->name('store_blog');
   Route::get('/blog/show/{id}','Frontend\BlogController@show')->name('show_blog');
   Route::get('/blog/edit/{id}','Frontend\BlogController@edit')->name('edit_blog');
   Route::post('/blog/update/{id}','Frontend\BlogController@update')->name('update_blog');
   Route::get('/blog_details/{id}', 'Frontend\BlogController@viewblog_details')->name('blog_details');
   Route::get('/blog/delete/{id}','Frontend\BlogController@destroy')->name('delete_blog');
   Route::get('/blog/view','Frontend\BlogController@view')->name('view_blog');



    //newsletters

    Route::get('/newsletters','Frontend\NewsLettersController@index')->name('newsletters');
    Route::get('/newsletters/create','Frontend\NewsLettersController@create')->name('create_newsletters');
    Route::post('/newsletters/create','Frontend\NewsLettersController@store')->name('store_newsletters');
    Route::get('/newsletters/delete/{id}','Frontend\NewsLettersController@destroy')->name('delete_newsletters');
    Route::get('/newsletters/view','Frontend\NewsLettersController@view')->name('view_newsletters');


    //soicalmedia

    Route::get('/soicalmedia', 'Frontend\SoicalmediaController@index')->name('soicalmedia_index');
    Route::post('/soicalmedia/update', 'Frontend\SoicalmediaController@update')->name('soicalmedia_update');




    //systems

    Route::get('/systems', 'Frontend\SystemController@index')->name('systems_index');
    Route::post('/systems/update', 'Frontend\SystemController@update')->name('systems_update');

});
