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


/**
 * Auth routes
 */
Route::group(['namespace' => 'Auth'], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    if (config('auth.users.registration')) {
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');
    }

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');

    // Confirmation Routes...
    if (config('auth.users.confirm_email')) {
        Route::get('confirm/{user_by_code}', 'ConfirmController@confirm')->name('confirm');
        Route::get('confirm/resend/{user_by_email}', 'ConfirmController@sendEmail')->name('confirm.send');
    }

    // Social Authentication Routes...
    Route::get('social/redirect/{provider}', 'SocialLoginController@redirect')->name('social.redirect');
    Route::get('social/login/{provider}', 'SocialLoginController@login')->name('social.login');
});

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

    // Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');
    //Users
    Route::get('users', 'UserController@index')->name('users');
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::get('users/restore', 'UserController@restore')->name('users.restore');
    Route::get('users/{id}/restore', 'UserController@restoreUser')->name('users.restore-user');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::post('users', 'UserController@store')->name('users.store');
    Route::any('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');
    Route::get('dashboard/log-chart', 'DashboardController@getLogChartData')->name('dashboard.log.chart');
    Route::get('dashboard/registration-chart', 'DashboardController@getRegistrationChartData')->name('dashboard.registration.chart');
    Route::resource('menus', 'MenuController');
    Route::resource('lngs', 'LngController');
    Route::resource('news', 'NewsController');
    Route::resource('books', 'BooksController');
    Route::resource('sliders', 'SlidersController');
    Route::resource('generals', 'GeneralController');
    Route::resource('abouts', 'AboutsController');
    Route::resource('socials', 'SocialController');
    Route::resource('categories', 'CategoriesController');
    Route::post('lngs/{id}', ['as' => 'lngs.restore', 'uses' => 'LngController@restore']);
    Route::post('news/{id}', ['as' => 'news.restore', 'uses' => 'NewsController@restore']);
    Route::post('news/forceDelete/{id}', ['as' => 'news.forceDelete', 'uses' => 'NewsController@forceDelete']);
    Route::post('books/{id}', ['as' => 'books.restore', 'uses' => 'BooksController@restore']);
    Route::post('books/forceDelete/{id}', ['as' => 'books.forceDelete', 'uses' => 'BooksController@forceDelete']);
    Route::post('sliders/{id}', ['as' => 'sliders.restore', 'uses' => 'SlidersController@restore']);
    Route::post('sliders/forceDelete/{id}', ['as' => 'sliders.forceDelete', 'uses' => 'SlidersController@forceDelete']);
    Route::post('socials/{id}', ['as' => 'socials.restore', 'uses' => 'SocialController@restore']);
    Route::post('socials/forceDelete/{id}', ['as' => 'socials.forceDelete', 'uses' => 'SocialController@forceDelete']);
    Route::post('menus/{id}', ['as' => 'menus.restore', 'uses' => 'MenuController@restore']);
    Route::post('menus/forceDelete/{id}', ['as' => 'menus.forceDelete', 'uses' => 'MenuController@forceDelete']);
});

/*Route::get('/', [ 'as'=>'home','uses'=>'HomeController@index']);*/

Route::group(['prefix' => '/{lng?}', 'as' => 'home'], function () {
    Route::get('/', 'HomeController@index');
    Route::post('/', 'HomeController@contactUs');
    Route::post('member', ['as' => '.membermail', 'uses' => 'HomeController@member']);
    Route::get('membership', ['as' => 'membership', 'uses' => 'MembershipController@show']);
    Route::get('news', ['as' => '.news_detail', 'uses' => 'NewsController@index']);
    Route::get('contact', ['as' => '.contact', 'uses' => 'ContactController@index']);
    Route::get('e-books', ['as' => '.books', 'uses' => 'BooksController@index']);
    Route::get('books/read/{name}', ['as' => '.books.read', 'uses' => 'BooksController@read']);
    Route::get('books/download/{name}', ['as' => '.books.download', 'uses' => 'BooksController@download']);
    Route::get('news-detail/{name}', ['as' => '.news_detail', 'uses' => 'Admin\NewsController@show']);
    Route::get('contact-other', ['as' => '.contact_other', 'uses' => 'ContactOtherController@index']);
    Route::get('{page}', ['as' => '.page', 'uses' => 'PageController@page']);
});
Route::get('{lng}/search/{query?}', ['as' => 'search', 'uses' => 'SearchController@index']);
