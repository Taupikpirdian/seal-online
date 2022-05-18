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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/maintenance', 'HomeController@maintenance')->name('maintenance');

// SEAL ONLINE
// Route::get('/ranking', 'HomeController@rankingList');

Route::get('/ranking-couple', 'RankingController@couple');
Route::get('/ranking-fame', 'RankingController@fame');
Route::get('/ranking-top-kill', 'RankingController@topKill');

Route::get('/rank-couple', 'RankController@couple');
Route::get('/rank-reputasi', 'RankController@reputasi');
Route::get('/rank-level', 'RankController@level');
// Route::get('/ranking-guild-info', 'RankingController@guildInfo');

Route::get('/aturangame', 'HomeController@aturanGame');
Route::get('/forum', 'HomeController@forumGame');
Route::get('/guide-information', 'HomeController@guideInformation');
Route::get('/download-game', 'HomeController@downloadGame');
Route::get('/top-up', 'HomeController@topUp');

Route::get('/list-berita', 'HomeController@listBerita');
Route::get('/list-event', 'HomeController@listEvent');

Route::get('/account-settings', 'HomeController@accSetings');
Route::get('/change-email', 'HomeController@changeEmail');

Route::get('/user/login', ['as' => 'user-login', 'uses' => 'AccountController@login']);
Route::post('/user/login', ['as' => 'post-user-login', 'uses' => 'AccountController@postLogin']);
Route::post('/user/change/password', ['as' => 'post-change-password', 'uses' => 'AccountController@postChangePassword']);
Route::post('/user/change/pin', ['as' => 'post-change-pin', 'uses' => 'AccountController@postChangePin']);
Route::get('/profile', ['as' => 'profile', 'uses' => 'AccountController@profile']);
Route::get('/change-pin-code', ['as' => 'change-pin-code', 'uses' => 'AccountController@changePinkCode']);
// Route::get('/change-pin-code', 'HomeController@changePinkCode');
//END ROUTE SEAL ONLINE

Auth::routes();

// Route::get('gm/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::group(['middleware' => ['auth']], function() {
	// =========================================== User ==================================================================
	
	// ========================================== User End ===============================================================
	
	// ===========================================Admin==================================================================
	Route::get('/admin-dashboard', 'Admin\AdminController@index')->name('admin-dashboard');
	Route::get('/admin', 'Admin\AdminController@indexss')->name('admin-dashboard-admin');
	
	//User
	Route::get('/user/index', ['as' => 'index', 'uses' => 'Admin\UserController@index']);
	Route::get('/user/create', ['as' => 'create', 'uses' => 'Admin\UserController@create']);
	Route::post('/user/create', ['as' => 'store', 'uses' => 'Admin\UserController@store']);
	Route::get('/user/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\UserController@edit']);
	Route::put('/user/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\UserController@update']);
	Route::get('/user/show/{id}', ['as' => 'show', 'uses' => 'Admin\UserController@show']);
	Route::delete('/user/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\UserController@destroy']);
	Route::get('/searchuser', ['as' => 'searchjabatan', 'uses' => 'Admin\UserController@search']);

	// Role
	Route::resource('roles', 'Admin\RoleController');
	Route::get('search-roles','Admin\RoleController@search');
	Route::resource('user-groups', 'Admin\UserGroupController');
	Route::get('search-user-groups','Admin\UserGroupController@search');
	Route::resource('groups', 'Admin\GroupController');
	Route::get('search-groups','Admin\GroupController@search');
	Route::resource('group-roles', 'Admin\GroupRoleController');
	Route::get('search-group-roles','Admin\GroupRoleController@search');

	// Top Up
	Route::get('/top-up/index', ['as' => 'index', 'uses' => 'Admin\TopUpController@index']);
	Route::get('/top-up/create', ['as' => 'create', 'uses' => 'Admin\TopUpController@create']);
	Route::post('/top-up/create', ['as' => 'store', 'uses' => 'Admin\TopUpController@store']);
	Route::get('/top-up/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\TopUpController@edit']);
	Route::put('/top-up/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\TopUpController@update']);
	Route::get('/top-up/show/{id}', ['as' => 'show', 'uses' => 'Admin\TopUpController@show']);
	Route::delete('/top-up/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\TopUpController@destroy']);
	Route::get('/searchtop-up', ['as' => 'searchjabatan', 'uses' => 'Admin\TopUpController@search']);

	// Download
	Route::get('/download/index', ['as' => 'index', 'uses' => 'Admin\DownloadController@index']);
	Route::get('/download/create', ['as' => 'create', 'uses' => 'Admin\DownloadController@create']);
	Route::post('/download/create', ['as' => 'store', 'uses' => 'Admin\DownloadController@store']);
	Route::get('/download/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\DownloadController@edit']);
	Route::put('/download/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\DownloadController@update']);
	Route::get('/download/show/{id}', ['as' => 'show', 'uses' => 'Admin\DownloadController@show']);
	Route::delete('/download/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\DownloadController@destroy']);
	Route::get('/searchdownload', ['as' => 'searchjabatan', 'uses' => 'Admin\DownloadController@search']);

	// Rules
	Route::get('/rules/index', ['as' => 'index', 'uses' => 'Admin\RuleController@index']);
	Route::get('/rules/create', ['as' => 'create', 'uses' => 'Admin\RuleController@create']);
	Route::post('/rules/create', ['as' => 'store', 'uses' => 'Admin\RuleController@store']);
	Route::get('/rules/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\RuleController@edit']);
	Route::put('/rules/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\RuleController@update']);
	Route::get('/rules/show/{id}', ['as' => 'show', 'uses' => 'Admin\RuleController@show']);
	Route::delete('/rules/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\RuleController@destroy']);
	Route::get('/searchrules', ['as' => 'searchjabatan', 'uses' => 'Admin\RuleController@search']);

	// Forum
	Route::get('/forum/index', ['as' => 'index', 'uses' => 'Admin\ForumController@index']);
	Route::get('/forum/create', ['as' => 'create', 'uses' => 'Admin\ForumController@create']);
	Route::post('/forum/create', ['as' => 'store', 'uses' => 'Admin\ForumController@store']);
	Route::get('/forum/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ForumController@edit']);
	Route::put('/forum/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ForumController@update']);
	Route::get('/forum/show/{id}', ['as' => 'show', 'uses' => 'Admin\ForumController@show']);
	Route::delete('/forum/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\ForumController@destroy']);
	Route::get('/searchforum', ['as' => 'searchjabatan', 'uses' => 'Admin\ForumController@search']);

	// iklan
	Route::get('/iklan/index', ['as' => 'index', 'uses' => 'Admin\IklanController@index']);
	Route::get('/iklan/create', ['as' => 'create', 'uses' => 'Admin\IklanController@create']);
	Route::post('/iklan/create', ['as' => 'store', 'uses' => 'Admin\IklanController@store']);
	Route::get('/iklan/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\IklanController@edit']);
	Route::put('/iklan/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\IklanController@update']);
	Route::get('/iklan/show/{id}', ['as' => 'show', 'uses' => 'Admin\IklanController@show']);
	Route::delete('/iklan/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\IklanController@destroy']);
	Route::get('/searchiklan', ['as' => 'searchiklan', 'uses' => 'Admin\IklanController@search']);

	// sponsor
	Route::get('/sponsor/index', ['as' => 'index', 'uses' => 'Admin\SponsorController@index']);
	Route::get('/sponsor/create', ['as' => 'create', 'uses' => 'Admin\SponsorController@create']);
	Route::post('/sponsor/create', ['as' => 'store', 'uses' => 'Admin\SponsorController@store']);
	Route::get('/sponsor/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SponsorController@edit']);
	Route::put('/sponsor/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SponsorController@update']);
	Route::get('/sponsor/show/{id}', ['as' => 'show', 'uses' => 'Admin\SponsorController@show']);
	Route::delete('/sponsor/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\SponsorController@destroy']);
	Route::get('/searchsponsor', ['as' => 'searchsponsor', 'uses' => 'Admin\SponsorController@search']);

	// contact-info
	Route::get('/contact-info/index', ['as' => 'index', 'uses' => 'Admin\ContactInfoController@index']);
	Route::get('/contact-info/create', ['as' => 'create', 'uses' => 'Admin\ContactInfoController@create']);
	Route::post('/contact-info/create', ['as' => 'store', 'uses' => 'Admin\ContactInfoController@store']);
	Route::get('/contact-info/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ContactInfoController@edit']);
	Route::put('/contact-info/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ContactInfoController@update']);
	Route::get('/contact-info/show/{id}', ['as' => 'show', 'uses' => 'Admin\ContactInfoController@show']);
	Route::delete('/contact-info/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\ContactInfoController@destroy']);
	Route::get('/searchcontact-info', ['as' => 'searchcontact-info', 'uses' => 'Admin\ContactInfoController@search']);

	// slider
	Route::get('/slider/index', ['as' => 'index', 'uses' => 'Admin\SliderController@index']);
	Route::get('/slider/create', ['as' => 'create', 'uses' => 'Admin\SliderController@create']);
	Route::post('/slider/create', ['as' => 'store', 'uses' => 'Admin\SliderController@store']);
	Route::get('/slider/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SliderController@edit']);
	Route::put('/slider/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SliderController@update']);
	Route::get('/slider/show/{id}', ['as' => 'show', 'uses' => 'Admin\SliderController@show']);
	Route::delete('/slider/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\SliderController@destroy']);
	Route::get('/searchslider', ['as' => 'searchslider', 'uses' => 'Admin\SliderController@search']);

	// category
	Route::get('/category/index', ['as' => 'index', 'uses' => 'Admin\CategoryController@index']);
	Route::get('/category/create', ['as' => 'create', 'uses' => 'Admin\CategoryController@create']);
	Route::post('/category/create', ['as' => 'store', 'uses' => 'Admin\CategoryController@store']);
	Route::get('/category/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\CategoryController@edit']);
	Route::put('/category/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\CategoryController@update']);
	Route::get('/category/show/{id}', ['as' => 'show', 'uses' => 'Admin\CategoryController@show']);
	Route::delete('/category/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\CategoryController@destroy']);
	Route::get('/searchcategory', ['as' => 'searchcategory', 'uses' => 'Admin\CategoryController@search']);

	// berita
	Route::get('/berita/index', ['as' => 'index', 'uses' => 'Admin\BeritaController@index']);
	Route::get('/berita/create', ['as' => 'create', 'uses' => 'Admin\BeritaController@create']);
	Route::post('/berita/create', ['as' => 'store', 'uses' => 'Admin\BeritaController@store']);
	Route::get('/berita/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BeritaController@edit']);
	Route::put('/berita/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BeritaController@update']);
	Route::get('/berita/show/{id}', ['as' => 'show', 'uses' => 'Admin\BeritaController@show']);
	Route::delete('/berita/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\BeritaController@destroy']);
	Route::get('/searchberita', ['as' => 'searchberita', 'uses' => 'Admin\BeritaController@search']);

	// event
	Route::get('/event/index', ['as' => 'index', 'uses' => 'Admin\EventController@index']);
	Route::get('/event/create', ['as' => 'create', 'uses' => 'Admin\EventController@create']);
	Route::post('/event/create', ['as' => 'store', 'uses' => 'Admin\EventController@store']);
	Route::get('/event/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\EventController@edit']);
	Route::put('/event/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\EventController@update']);
	Route::get('/event/show/{id}', ['as' => 'show', 'uses' => 'Admin\EventController@show']);
	Route::delete('/event/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\EventController@destroy']);
	Route::get('/searchevent', ['as' => 'searchevent', 'uses' => 'Admin\EventController@search']);

	// guide
	Route::get('/guide/index', ['as' => 'index', 'uses' => 'Admin\GuideController@index']);
	Route::get('/guide/create', ['as' => 'create', 'uses' => 'Admin\GuideController@create']);
	Route::post('/guide/create', ['as' => 'store', 'uses' => 'Admin\GuideController@store']);
	Route::get('/guide/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\GuideController@edit']);
	Route::put('/guide/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\GuideController@update']);
	Route::get('/guide/show/{id}', ['as' => 'show', 'uses' => 'Admin\GuideController@show']);
	Route::delete('/guide/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\GuideController@destroy']);
	Route::get('/searchguide', ['as' => 'searchguide', 'uses' => 'Admin\GuideController@search']);

	// Background
	Route::get('/background/index', ['as' => 'index', 'uses' => 'Admin\BackgroundController@index']);
	Route::get('/background/create', ['as' => 'create', 'uses' => 'Admin\BackgroundController@create']);
	Route::post('/background/create', ['as' => 'store', 'uses' => 'Admin\BackgroundController@store']);
	Route::get('/background/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BackgroundController@edit']);
	Route::put('/background/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BackgroundController@update']);
	Route::delete('/background/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\BackgroundController@destroy']);

	// Button home
	Route::get('/button-home/index', ['as' => 'index', 'uses' => 'Admin\HomeButtonController@index']);
	Route::get('/button-home/create', ['as' => 'create', 'uses' => 'Admin\HomeButtonController@create']);
	Route::post('/button-home/create', ['as' => 'store', 'uses' => 'Admin\HomeButtonController@store']);
	Route::get('/button-home/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\HomeButtonController@edit']);
	Route::put('/button-home/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\HomeButtonController@update']);
	Route::delete('/button-home/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\HomeButtonController@destroy']);

	// Setup Web
	Route::get('/setup-web/index', ['as' => 'index', 'uses' => 'Admin\SetupWebController@index']);
	Route::get('/setup-web/create', ['as' => 'create', 'uses' => 'Admin\SetupWebController@create']);
	Route::post('/setup-web/create', ['as' => 'store', 'uses' => 'Admin\SetupWebController@store']);
	Route::get('/setup-web/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SetupWebController@edit']);
	Route::put('/setup-web/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SetupWebController@update']);
	Route::delete('/setup-web/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\SetupWebController@destroy']);
	
	// content
	Route::get('/content/index', ['as' => 'index', 'uses' => 'Admin\ContenController@index']);
	Route::get('/content/create', ['as' => 'create', 'uses' => 'Admin\ContenController@create']);
	Route::post('/content/create', ['as' => 'store', 'uses' => 'Admin\ContenController@store']);
	Route::get('/content/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ContenController@edit']);
	Route::put('/content/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ContenController@update']);
	Route::get('/content/show/{id}', ['as' => 'show', 'uses' => 'Admin\ContenController@show']);
	Route::delete('/content/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\ContenController@destroy']);
	Route::get('/searchcontent', ['as' => 'searchcontent', 'uses' => 'Admin\ContenController@search']);

	// running text
	Route::get('/running-text/index', ['as' => 'index', 'uses' => 'Admin\RunningTextController@index']);
	Route::get('/running-text/create', ['as' => 'create', 'uses' => 'Admin\RunningTextController@create']);
	Route::post('/running-text/create', ['as' => 'store', 'uses' => 'Admin\RunningTextController@store']);
	Route::get('/running-text/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\RunningTextController@edit']);
	Route::put('/running-text/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\RunningTextController@update']);
	Route::get('/running-text/show/{id}', ['as' => 'show', 'uses' => 'Admin\RunningTextController@show']);
	Route::delete('/running-text/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\RunningTextController@destroy']);

	// galley
	Route::get('/gallery/index', ['as' => 'index', 'uses' => 'Admin\GalleryController@index']);
	Route::get('/gallery/create', ['as' => 'create', 'uses' => 'Admin\GalleryController@create']);
	Route::post('/gallery/create', ['as' => 'store', 'uses' => 'Admin\GalleryController@store']);
	Route::get('/gallery/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\GalleryController@edit']);
	Route::put('/gallery/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\GalleryController@update']);
	Route::get('/gallery/show/{id}', ['as' => 'show', 'uses' => 'Admin\GalleryController@show']);
	Route::delete('/gallery/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\GalleryController@destroy']);

	// intro
	Route::get('/intro/index', ['as' => 'index', 'uses' => 'Admin\IntroController@index']);
	Route::get('/intro/create', ['as' => 'create', 'uses' => 'Admin\IntroController@create']);
	Route::post('/intro/create', ['as' => 'store', 'uses' => 'Admin\IntroController@store']);
	Route::get('/intro/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\IntroController@edit']);
	Route::put('/intro/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\IntroController@update']);
	Route::get('/intro/show/{id}', ['as' => 'show', 'uses' => 'Admin\IntroController@show']);
	Route::delete('/intro/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\IntroController@destroy']);

	// fiturs
	Route::get('/fitur/index', ['as' => 'index', 'uses' => 'Admin\FiturController@index']);
	Route::get('/fitur/create', ['as' => 'create', 'uses' => 'Admin\FiturController@create']);
	Route::post('/fitur/create', ['as' => 'store', 'uses' => 'Admin\FiturController@store']);
	Route::get('/fitur/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\FiturController@edit']);
	Route::put('/fitur/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\FiturController@update']);
	Route::get('/fitur/show/{id}', ['as' => 'show', 'uses' => 'Admin\FiturController@show']);
	Route::delete('/fitur/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\FiturController@destroy']);

	// update-seal
	Route::get('/update-seal/index', ['as' => 'index', 'uses' => 'Admin\UpdateSealController@index']);
	Route::get('/update-seal/create', ['as' => 'create', 'uses' => 'Admin\UpdateSealController@create']);
	Route::post('/update-seal/create', ['as' => 'store', 'uses' => 'Admin\UpdateSealController@store']);
	Route::get('/update-seal/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\UpdateSealController@edit']);
	Route::put('/update-seal/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\UpdateSealController@update']);
	Route::get('/update-seal/show/{id}', ['as' => 'show', 'uses' => 'Admin\UpdateSealController@show']);
	Route::delete('/update-seal/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\UpdateSealController@destroy']);

	// update-seal-part
	Route::get('/update-seal-carnival-city/index', ['as' => 'index', 'uses' => 'Admin\UpdateSealPartController@indexCarnivalCity']);
	Route::get('/update-seal-guild-wars/index', ['as' => 'index', 'uses' => 'Admin\UpdateSealPartController@indexGuildWars']);
	Route::get('/update-seal-service/index', ['as' => 'index', 'uses' => 'Admin\UpdateSealPartController@indexService']);
	Route::get('/update-seal-carnival-city/create', ['as' => 'create', 'uses' => 'Admin\UpdateSealPartController@createCarnivalCity']);
	Route::get('/update-seal-guild-wars/create', ['as' => 'create', 'uses' => 'Admin\UpdateSealPartController@createGuildWars']);
	Route::get('/update-seal-service/create', ['as' => 'create', 'uses' => 'Admin\UpdateSealPartController@createService']);
	Route::post('/update-seal-part/create', ['as' => 'store', 'uses' => 'Admin\UpdateSealPartController@store']);
	Route::get('/update-seal-part/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\UpdateSealPartController@edit']);
	Route::put('/update-seal-part/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\UpdateSealPartController@update']);
	Route::get('/update-seal-part/show/{id}', ['as' => 'show', 'uses' => 'Admin\UpdateSealPartController@show']);
	Route::delete('/update-seal-part/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\UpdateSealPartController@destroy']);

	// background-update-seal
	Route::get('/background-update-seal/index', ['as' => 'index', 'uses' => 'Admin\BackgroundUpdateSealController@index']);
	Route::get('/background-update-seal/create', ['as' => 'create', 'uses' => 'Admin\BackgroundUpdateSealController@create']);
	Route::post('/background-update-seal/create', ['as' => 'store', 'uses' => 'Admin\BackgroundUpdateSealController@store']);
	Route::get('/background-update-seal/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BackgroundUpdateSealController@edit']);
	Route::put('/background-update-seal/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BackgroundUpdateSealController@update']);
	Route::get('/background-update-seal/show/{id}', ['as' => 'show', 'uses' => 'Admin\BackgroundUpdateSealController@show']);
	Route::delete('/background-update-seal/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\BackgroundUpdateSealController@destroy']);

	// installation
	Route::get('/installation/index', ['as' => 'index', 'uses' => 'Admin\InstallationController@index']);
	Route::get('/installation/create', ['as' => 'create', 'uses' => 'Admin\InstallationController@create']);
	Route::post('/installation/create', ['as' => 'store', 'uses' => 'Admin\InstallationController@store']);
	Route::get('/installation/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\InstallationController@edit']);
	Route::put('/installation/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\InstallationController@update']);
	Route::get('/installation/show/{id}', ['as' => 'show', 'uses' => 'Admin\InstallationController@show']);
	Route::delete('/installation/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\InstallationController@destroy']);

	// non-player-character
	Route::get('/non-player-character/index', ['as' => 'index', 'uses' => 'Admin\NonPlayerCharacterController@index']);
	Route::get('/non-player-character/create', ['as' => 'create', 'uses' => 'Admin\NonPlayerCharacterController@create']);
	Route::post('/non-player-character/create', ['as' => 'store', 'uses' => 'Admin\NonPlayerCharacterController@store']);
	Route::get('/non-player-character/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\NonPlayerCharacterController@edit']);
	Route::put('/non-player-character/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\NonPlayerCharacterController@update']);
	Route::get('/non-player-character/show/{id}', ['as' => 'show', 'uses' => 'Admin\NonPlayerCharacterController@show']);
	Route::delete('/non-player-character/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\NonPlayerCharacterController@destroy']);

	// part-download
	Route::get('/part-download/index', ['as' => 'index', 'uses' => 'Admin\PartDownloadController@index']);
	Route::get('/part-download/create', ['as' => 'create', 'uses' => 'Admin\PartDownloadController@create']);
	Route::post('/part-download/create', ['as' => 'store', 'uses' => 'Admin\PartDownloadController@store']);
	Route::get('/part-download/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\PartDownloadController@edit']);
	Route::put('/part-download/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\PartDownloadController@update']);
	Route::get('/part-download/show/{id}', ['as' => 'show', 'uses' => 'Admin\PartDownloadController@show']);
	Route::delete('/part-download/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\PartDownloadController@destroy']);

	// content-register
	Route::get('/content-register/index', ['as' => 'index', 'uses' => 'Admin\ContentRegisterController@index']);
	Route::get('/content-register/create', ['as' => 'create', 'uses' => 'Admin\ContentRegisterController@create']);
	Route::post('/content-register/create', ['as' => 'store', 'uses' => 'Admin\ContentRegisterController@store']);
	Route::get('/content-register/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ContentRegisterController@edit']);
	Route::put('/content-register/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\ContentRegisterController@update']);
	Route::get('/content-register/show/{id}', ['as' => 'show', 'uses' => 'Admin\ContentRegisterController@show']);
	Route::delete('/content-register/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\ContentRegisterController@destroy']);

	// sponsor-logo
	Route::get('/sponsor-logo/index', ['as' => 'index', 'uses' => 'Admin\SponsorLogoController@index']);
	Route::get('/sponsor-logo/create', ['as' => 'create', 'uses' => 'Admin\SponsorLogoController@create']);
	Route::post('/sponsor-logo/create', ['as' => 'store', 'uses' => 'Admin\SponsorLogoController@store']);
	Route::get('/sponsor-logo/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SponsorLogoController@edit']);
	Route::put('/sponsor-logo/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\SponsorLogoController@update']);
	Route::get('/sponsor-logo/show/{id}', ['as' => 'show', 'uses' => 'Admin\SponsorLogoController@show']);
	Route::delete('/sponsor-logo/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\SponsorLogoController@destroy']);

	// bale-monster
	Route::get('/bale-monster/index', ['as' => 'index', 'uses' => 'Admin\BaleMonsterController@index']);
	Route::get('/bale-monster/create', ['as' => 'create', 'uses' => 'Admin\BaleMonsterController@create']);
	Route::post('/bale-monster/create', ['as' => 'store', 'uses' => 'Admin\BaleMonsterController@store']);
	Route::get('/bale-monster/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BaleMonsterController@edit']);
	Route::put('/bale-monster/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\BaleMonsterController@update']);
	Route::get('/bale-monster/show/{id}', ['as' => 'show', 'uses' => 'Admin\BaleMonsterController@show']);
	Route::delete('/bale-monster/destroy/{id}', ['as' => 'destroy', 'uses' => 'Admin\BaleMonsterController@destroy']);
	// intro bale
	Route::get('/intro-bale/create', ['as' => 'create-intro-bale', 'uses' => 'Admin\BaleMonsterController@createIntro']);
	Route::post('/intro-bale/create', ['as' => 'store-intro-bale', 'uses' => 'Admin\BaleMonsterController@storeIntro']);
	Route::get('/intro-bale/edit/{id}', ['as' => 'edit-intro-bale', 'uses' => 'Admin\BaleMonsterController@editIntro']);
	Route::put('/intro-bale/edit/{id}', ['as' => 'edit-intro-bale', 'uses' => 'Admin\BaleMonsterController@updateIntro']);
	Route::get('/intro-bale/show/{id}', ['as' => 'show-intro-bale', 'uses' => 'Admin\BaleMonsterController@showIntro']);
	Route::delete('/intro-bale/destroy/{id}', ['as' => 'destroy-intro-bale', 'uses' => 'Admin\BaleMonsterController@destroyIntro']);
	// contact-us
	Route::get('/contact-us/index', ['as' => 'index', 'uses' => 'Admin\ContactUsController@index']);
	Route::get('/contact-us/create', ['as' => 'create-contact-us', 'uses' => 'Admin\ContactUsController@create']);
	Route::post('/contact-us/create', ['as' => 'store-contact-us', 'uses' => 'Admin\ContactUsController@store']);
	Route::get('/contact-us/edit/{id}', ['as' => 'edit-contact-us', 'uses' => 'Admin\ContactUsController@edit']);
	Route::put('/contact-us/edit/{id}', ['as' => 'edit-contact-us', 'uses' => 'Admin\ContactUsController@update']);
	Route::get('/contact-us/show/{id}', ['as' => 'show-contact-us', 'uses' => 'Admin\ContactUsController@show']);
	Route::delete('/contact-us/destroy/{id}', ['as' => 'destroy-contact-us', 'uses' => 'Admin\ContactUsController@destroy']);

	// persetujuan
	Route::get('/persetujuan/index', ['as' => 'index', 'uses' => 'Admin\PersetujuanController@index']);
	Route::get('/persetujuan/create', ['as' => 'create-persetujuan', 'uses' => 'Admin\PersetujuanController@create']);
	Route::post('/persetujuan/create', ['as' => 'store-persetujuan', 'uses' => 'Admin\PersetujuanController@store']);
	Route::get('/persetujuan/edit/{id}', ['as' => 'edit-persetujuan', 'uses' => 'Admin\PersetujuanController@edit']);
	Route::put('/persetujuan/edit/{id}', ['as' => 'edit-persetujuan', 'uses' => 'Admin\PersetujuanController@update']);
	Route::get('/persetujuan/show/{id}', ['as' => 'show-persetujuan', 'uses' => 'Admin\PersetujuanController@show']);
	Route::delete('/persetujuan/destroy/{id}', ['as' => 'destroy-persetujuan', 'uses' => 'Admin\PersetujuanController@destroy']);

	// video-download
	Route::get('/video-download/index', ['as' => 'index', 'uses' => 'Admin\VideoDownloadController@index']);
	Route::get('/video-download/create', ['as' => 'create-video-download', 'uses' => 'Admin\VideoDownloadController@create']);
	Route::post('/video-download/create', ['as' => 'store-video-download', 'uses' => 'Admin\VideoDownloadController@store']);
	Route::get('/video-download/edit/{id}', ['as' => 'edit-video-download', 'uses' => 'Admin\VideoDownloadController@edit']);
	Route::put('/video-download/edit/{id}', ['as' => 'edit-video-download', 'uses' => 'Admin\VideoDownloadController@update']);
	Route::get('/video-download/show/{id}', ['as' => 'show-video-download', 'uses' => 'Admin\VideoDownloadController@show']);
	Route::delete('/video-download/destroy/{id}', ['as' => 'destroy-video-download', 'uses' => 'Admin\VideoDownloadController@destroy']);

	// emotikon-download
	Route::get('/emotikon-download/index', ['as' => 'index', 'uses' => 'Admin\EmotikonDownloadController@index']);
	Route::get('/emotikon-download/create', ['as' => 'create-emotikon-download', 'uses' => 'Admin\EmotikonDownloadController@create']);
	Route::post('/emotikon-download/create', ['as' => 'store-emotikon-download', 'uses' => 'Admin\EmotikonDownloadController@store']);
	Route::get('/emotikon-download/edit/{id}', ['as' => 'edit-emotikon-download', 'uses' => 'Admin\EmotikonDownloadController@edit']);
	Route::put('/emotikon-download/edit/{id}', ['as' => 'edit-emotikon-download', 'uses' => 'Admin\EmotikonDownloadController@update']);
	Route::get('/emotikon-download/show/{id}', ['as' => 'show-emotikon-download', 'uses' => 'Admin\EmotikonDownloadController@show']);
	Route::delete('/emotikon-download/destroy/{id}', ['as' => 'destroy-emotikon-download', 'uses' => 'Admin\EmotikonDownloadController@destroy']);

	// screen-shot
	Route::get('/screen-shot/index', ['as' => 'index', 'uses' => 'Admin\ScreenshotController@index']);
	Route::get('/screen-shot/create', ['as' => 'create-screen-shot', 'uses' => 'Admin\ScreenshotController@create']);
	Route::post('/screen-shot/create', ['as' => 'store-screen-shot', 'uses' => 'Admin\ScreenshotController@store']);
	Route::get('/screen-shot/edit/{id}', ['as' => 'edit-screen-shot', 'uses' => 'Admin\ScreenshotController@edit']);
	Route::put('/screen-shot/edit/{id}', ['as' => 'edit-screen-shot', 'uses' => 'Admin\ScreenshotController@update']);
	Route::delete('/screen-shot/destroy/{id}', ['as' => 'destroy-screen-shot', 'uses' => 'Admin\ScreenshotController@destroy']);

	// intro-game-master
	Route::get('/intro-game-master/create', ['as' => 'create-intro-game-master', 'uses' => 'Admin\IntroGameMasterController@create']);
	Route::post('/intro-game-master/create', ['as' => 'store-intro-game-master', 'uses' => 'Admin\IntroGameMasterController@store']);
	Route::get('/intro-game-master/edit/{id}', ['as' => 'edit-intro-game-master', 'uses' => 'Admin\IntroGameMasterController@edit']);
	Route::put('/intro-game-master/edit/{id}', ['as' => 'edit-intro-game-master', 'uses' => 'Admin\IntroGameMasterController@update']);
	Route::get('/intro-game-master/show/{id}', ['as' => 'show-intro-game-master', 'uses' => 'Admin\IntroGameMasterController@show']);
	Route::delete('/intro-game-master/destroy/{id}', ['as' => 'destroy-intro-game-master', 'uses' => 'Admin\IntroGameMasterController@destroy']);

	// intro-hindari-penipuan
	Route::get('/intro-hindari-penipuan/create', ['as' => 'create-intro-hindari-penipuan', 'uses' => 'Admin\IntroHindariPenipuanController@create']);
	Route::post('/intro-hindari-penipuan/create', ['as' => 'store-intro-hindari-penipuan', 'uses' => 'Admin\IntroHindariPenipuanController@store']);
	Route::get('/intro-hindari-penipuan/edit/{id}', ['as' => 'edit-intro-hindari-penipuan', 'uses' => 'Admin\IntroHindariPenipuanController@edit']);
	Route::put('/intro-hindari-penipuan/edit/{id}', ['as' => 'edit-intro-hindari-penipuan', 'uses' => 'Admin\IntroHindariPenipuanController@update']);
	Route::get('/intro-hindari-penipuan/show/{id}', ['as' => 'show-intro-hindari-penipuan', 'uses' => 'Admin\IntroHindariPenipuanController@show']);
	Route::delete('/intro-hindari-penipuan/destroy/{id}', ['as' => 'destroy-intro-hindari-penipuan', 'uses' => 'Admin\IntroHindariPenipuanController@destroy']);

	// hindari-penipuan
	Route::get('/hindari-penipuan/index', ['as' => 'index', 'uses' => 'Admin\HindariPenipuanController@index']);
	Route::get('/hindari-penipuan/create', ['as' => 'create-hindari-penipuan', 'uses' => 'Admin\HindariPenipuanController@create']);
	Route::post('/hindari-penipuan/create', ['as' => 'store-hindari-penipuan', 'uses' => 'Admin\HindariPenipuanController@store']);
	Route::get('/hindari-penipuan/edit/{id}', ['as' => 'edit-hindari-penipuan', 'uses' => 'Admin\HindariPenipuanController@edit']);
	Route::put('/hindari-penipuan/edit/{id}', ['as' => 'edit-hindari-penipuan', 'uses' => 'Admin\HindariPenipuanController@update']);
	Route::get('/hindari-penipuan/show/{id}', ['as' => 'show-hindari-penipuan', 'uses' => 'Admin\HindariPenipuanController@show']);
	Route::delete('/hindari-penipuan/destroy/{id}', ['as' => 'destroy-hindari-penipuan', 'uses' => 'Admin\HindariPenipuanController@destroy']);

	// game-master
	Route::get('/game-master/index', ['as' => 'index', 'uses' => 'Admin\GameMasterController@index']);
	Route::get('/game-master/create', ['as' => 'create-game-master', 'uses' => 'Admin\GameMasterController@create']);
	Route::post('/game-master/create', ['as' => 'store-game-master', 'uses' => 'Admin\GameMasterController@store']);
	Route::get('/game-master/edit/{id}', ['as' => 'edit-game-master', 'uses' => 'Admin\GameMasterController@edit']);
	Route::put('/game-master/edit/{id}', ['as' => 'edit-game-master', 'uses' => 'Admin\GameMasterController@update']);
	Route::get('/game-master/show/{id}', ['as' => 'show-game-master', 'uses' => 'Admin\GameMasterController@show']);
	Route::delete('/game-master/destroy/{id}', ['as' => 'destroy-game-master', 'uses' => 'Admin\GameMasterController@destroy']);

	// komik
	Route::get('/komik/index', ['as' => 'index', 'uses' => 'Admin\KomikController@index']);
	Route::get('/komik/create', ['as' => 'create-komik', 'uses' => 'Admin\KomikController@create']);
	Route::post('/komik/create', ['as' => 'store-komik', 'uses' => 'Admin\KomikController@store']);
	Route::get('/komik/edit/{id}', ['as' => 'edit-komik', 'uses' => 'Admin\KomikController@edit']);
	Route::put('/komik/edit/{id}', ['as' => 'edit-komik', 'uses' => 'Admin\KomikController@update']);
	Route::get('/komik/show/{id}', ['as' => 'show-komik', 'uses' => 'Admin\KomikController@show']);
	Route::delete('/komik/destroy/{id}', ['as' => 'destroy-komik', 'uses' => 'Admin\KomikController@destroy']);
	Route::get('/komik-page/create/{id}', ['as' => 'create-komik-page', 'uses' => 'Admin\KomikController@createPage']);
	Route::post('/komik-page/create/{id}', ['as' => 'store-komik-page', 'uses' => 'Admin\KomikController@storePage']);
	Route::delete('/komik-page/destroy/{id}', ['as' => 'destroy-komik-page', 'uses' => 'Admin\KomikController@destroyPage']);

	// profesi
	Route::get('/profesi/index', ['as' => 'index', 'uses' => 'Admin\ProfesiController@index']);
	Route::get('/profesi/create', ['as' => 'create-profesi', 'uses' => 'Admin\ProfesiController@create']);
	Route::post('/profesi/create', ['as' => 'store-profesi', 'uses' => 'Admin\ProfesiController@store']);
	Route::get('/profesi/edit/{id}', ['as' => 'edit-profesi', 'uses' => 'Admin\ProfesiController@edit']);
	Route::put('/profesi/edit/{id}', ['as' => 'edit-profesi', 'uses' => 'Admin\ProfesiController@update']);
	Route::get('/profesi/show/{id}', ['as' => 'show-profesi', 'uses' => 'Admin\ProfesiController@show']);
	Route::delete('/profesi/destroy/{id}', ['as' => 'destroy-profesi', 'uses' => 'Admin\ProfesiController@destroy']);

	// skill
	Route::get('/skill/create', ['as' => 'create-skill', 'uses' => 'Admin\SkillController@create']);
	Route::post('/skill/create', ['as' => 'store-skill', 'uses' => 'Admin\SkillController@store']);
	Route::get('/skill/edit/{id}', ['as' => 'edit-skill', 'uses' => 'Admin\SkillController@edit']);
	Route::put('/skill/edit/{id}', ['as' => 'edit-skill', 'uses' => 'Admin\SkillController@update']);
	Route::get('/skill/show/{id}', ['as' => 'show-skill', 'uses' => 'Admin\SkillController@show']);
	Route::delete('/skill/destroy/{id}', ['as' => 'destroy-skill', 'uses' => 'Admin\SkillController@destroy']);

		// skill-level
	Route::get('/skill-level/create/{id}', ['as' => 'create-skill-level', 'uses' => 'Admin\SkillLevelController@create']);
	Route::post('/skill-level/create/{id}', ['as' => 'store-skill-level', 'uses' => 'Admin\SkillLevelController@store']);
	Route::delete('/skill-level/destroy/{id}', ['as' => 'destroy-skill-level', 'uses' => 'Admin\SkillLevelController@destroy']);

	// event-seal
	Route::get('/event-seal/index', ['as' => 'index', 'uses' => 'Admin\EventSealController@index']);
	Route::get('/event-seal/create', ['as' => 'create-event-seal', 'uses' => 'Admin\EventSealController@create']);
	Route::post('/event-seal/create', ['as' => 'store-event-seal', 'uses' => 'Admin\EventSealController@store']);
	Route::get('/event-seal/edit/{id}', ['as' => 'edit-event-seal', 'uses' => 'Admin\EventSealController@edit']);
	Route::put('/event-seal/edit/{id}', ['as' => 'edit-event-seal', 'uses' => 'Admin\EventSealController@update']);
	Route::get('/event-seal/show/{id}', ['as' => 'show-event-seal', 'uses' => 'Admin\EventSealController@show']);
	Route::delete('/event-seal/destroy/{id}', ['as' => 'destroy-event-seal', 'uses' => 'Admin\EventSealController@destroy']);

	// event-seal-detail
	Route::get('/event-seal-detail/create/{id}', ['as' => 'create-event-seal-detail', 'uses' => 'Admin\EventSealListController@create']);
	Route::post('/event-seal-detail/create/{id}', ['as' => 'store-event-seal-detail', 'uses' => 'Admin\EventSealListController@store']);
	Route::get('/event-seal-detail/edit/{id}', ['as' => 'edit-event-seal-detail', 'uses' => 'Admin\EventSealListController@edit']);
	Route::put('/event-seal-detail/edit/{id}', ['as' => 'edit-event-seal-detail', 'uses' => 'Admin\EventSealListController@update']);
	Route::get('/event-seal-detail/show/{id}', ['as' => 'show-event-seal-detail', 'uses' => 'Admin\EventSealListController@show']);
	Route::delete('/event-seal-detail/destroy/{id}', ['as' => 'destroy-event-seal-detail', 'uses' => 'Admin\EventSealListController@destroy']);

	// dating
	Route::get('/dating/index', ['as' => 'index', 'uses' => 'Admin\DatingController@index']);
	Route::get('/dating/create', ['as' => 'create-dating', 'uses' => 'Admin\DatingController@create']);
	Route::post('/dating/create', ['as' => 'store-dating', 'uses' => 'Admin\DatingController@store']);
	Route::get('/dating/edit/{id}', ['as' => 'edit-dating', 'uses' => 'Admin\DatingController@edit']);
	Route::put('/dating/edit/{id}', ['as' => 'edit-dating', 'uses' => 'Admin\DatingController@update']);
	Route::delete('/dating/destroy/{id}', ['as' => 'destroy-dating', 'uses' => 'Admin\DatingController@destroy']);
	Route::get('/dating/create-gift', ['as' => 'create-dating-gift', 'uses' => 'Admin\DatingController@createGift']);
	Route::get('/dating/create-dating', ['as' => 'create-dating-data', 'uses' => 'Admin\DatingController@createDating']);
	Route::post('/dating/create-dating', ['as' => 'store-dating-data', 'uses' => 'Admin\DatingController@storeDating']);
	Route::get('/dating/edit-dating/{id}', ['as' => 'edit-dating-data', 'uses' => 'Admin\DatingController@editDating']);
	Route::put('/dating/edit-dating/{id}', ['as' => 'edit-dating-data', 'uses' => 'Admin\DatingController@updateDating']);
	Route::get('/dating/show/{id}', ['as' => 'show-dating', 'uses' => 'Admin\DatingController@show']);
	Route::delete('/dating-data/destroy/{id}', ['as' => 'destroy-dating-data', 'uses' => 'Admin\DatingController@destroyDating']);

	// refine
	Route::get('/refine/index', ['as' => 'index', 'uses' => 'Admin\RefineController@index']);
	Route::get('/refine/create', ['as' => 'create-refine', 'uses' => 'Admin\RefineController@create']);
	Route::get('/refine/create-risk', ['as' => 'create-risk', 'uses' => 'Admin\RefineController@createRisk']);
	Route::get('/refine/create-return', ['as' => 'create-return', 'uses' => 'Admin\RefineController@createReturn']);
	Route::post('/refine/create', ['as' => 'store-refine', 'uses' => 'Admin\RefineController@store']);
	Route::get('/refine/edit/{id}', ['as' => 'edit-refine', 'uses' => 'Admin\RefineController@edit']);
	Route::get('/refine/edit-risk/{id}', ['as' => 'edit-return', 'uses' => 'Admin\RefineController@editRisk']);
	Route::get('/refine/edit-return/{id}', ['as' => 'edit-return', 'uses' => 'Admin\RefineController@editReturn']);
	Route::put('/refine/edit/{id}', ['as' => 'edit-refine', 'uses' => 'Admin\RefineController@update']);
	Route::get('/refine/show/{id}', ['as' => 'show-refine', 'uses' => 'Admin\RefineController@show']);
	Route::delete('/refine/destroy/{id}', ['as' => 'destroy-refine', 'uses' => 'Admin\RefineController@destroy']);

		// emotikon-content
	Route::get('/emotikon-content/index', ['as' => 'index', 'uses' => 'Admin\EmotikonContentController@index']);
	Route::get('/emotikon-content/create', ['as' => 'create-emotikon-content', 'uses' => 'Admin\EmotikonContentController@create']);
	Route::post('/emotikon-content/create', ['as' => 'store-emotikon-content', 'uses' => 'Admin\EmotikonContentController@store']);
	Route::get('/emotikon-content/edit/{id}', ['as' => 'edit-emotikon-content', 'uses' => 'Admin\EmotikonContentController@edit']);
	Route::put('/emotikon-content/edit/{id}', ['as' => 'edit-emotikon-content', 'uses' => 'Admin\EmotikonContentController@update']);
	Route::get('/emotikon-content/show/{id}', ['as' => 'show-emotikon-content', 'uses' => 'Admin\EmotikonContentController@show']);
	Route::delete('/emotikon-content/destroy/{id}', ['as' => 'destroy-emotikon-content', 'uses' => 'Admin\EmotikonContentController@destroy']);

	// pet
	Route::get('/pet/index', ['as' => 'index', 'uses' => 'Admin\PetController@index']);
	Route::get('/pet/create', ['as' => 'create-pet', 'uses' => 'Admin\PetController@create']);
	Route::get('/pet/create-seed', ['as' => 'create-risk', 'uses' => 'Admin\PetController@createSeed']);
	Route::get('/pet/create-piya', ['as' => 'create-return', 'uses' => 'Admin\PetController@createPiya']);
	Route::get('/pet/create-bird', ['as' => 'create-return', 'uses' => 'Admin\PetController@createBird']);
	Route::get('/pet/create-heaven', ['as' => 'create-return', 'uses' => 'Admin\PetController@createHeaven']);
	Route::post('/pet/create', ['as' => 'store-pet', 'uses' => 'Admin\PetController@store']);
	Route::get('/pet/edit/{id}', ['as' => 'edit-pet', 'uses' => 'Admin\PetController@edit']);
	Route::get('/pet/edit-seed/{id}', ['as' => 'edit-return', 'uses' => 'Admin\PetController@editSeed']);
	Route::get('/pet/edit-piya/{id}', ['as' => 'edit-return', 'uses' => 'Admin\PetController@editPiya']);
	Route::get('/pet/edit-bird/{id}', ['as' => 'edit-return', 'uses' => 'Admin\PetController@editBird']);
	Route::get('/pet/edit-heaven/{id}', ['as' => 'edit-return', 'uses' => 'Admin\PetController@editHeaven']);
	Route::put('/pet/edit/{id}', ['as' => 'edit-pet', 'uses' => 'Admin\PetController@update']);
	Route::get('/pet/show/{id}', ['as' => 'show-pet', 'uses' => 'Admin\PetController@show']);
	Route::delete('/pet/destroy/{id}', ['as' => 'destroy-pet', 'uses' => 'Admin\PetController@destroy']);

	// mulai-bermain
	Route::get('/mulai-bermain/index', ['as' => 'index', 'uses' => 'Admin\MulaiBermainController@index']);
	Route::get('/mulai-bermain/create', ['as' => 'create-mulai-bermain', 'uses' => 'Admin\MulaiBermainController@create']);
	Route::get('/mulai-bermain/create-client', ['as' => 'create-client', 'uses' => 'Admin\MulaiBermainController@createClient']);
	Route::get('/mulai-bermain/create-karakter', ['as' => 'create-karakter', 'uses' => 'Admin\MulaiBermainController@createKarakter']);
	Route::get('/mulai-bermain/create-in-game', ['as' => 'create-in-game', 'uses' => 'Admin\MulaiBermainController@createInGame']);
	Route::get('/mulai-bermain/create-kontrol', ['as' => 'create-kontrol', 'uses' => 'Admin\MulaiBermainController@createKontrol']);
	Route::get('/mulai-bermain/create-teman', ['as' => 'create-teman', 'uses' => 'Admin\MulaiBermainController@createTeman']);
	Route::get('/mulai-bermain/create-lain-lain', ['as' => 'create-lain-lain', 'uses' => 'Admin\MulaiBermainController@createLain']);
	Route::post('/mulai-bermain/create', ['as' => 'store-mulai-bermain', 'uses' => 'Admin\MulaiBermainController@store']);
	Route::get('/mulai-bermain/edit/{id}', ['as' => 'edit-mulai-bermain', 'uses' => 'Admin\MulaiBermainController@edit']);
	Route::get('/mulai-bermain/edit-client/{id}', ['as' => 'edit-client', 'uses' => 'Admin\MulaiBermainController@editClient']);
	Route::get('/mulai-bermain/edit-karakter/{id}', ['as' => 'edit-karakter', 'uses' => 'Admin\MulaiBermainController@editKarakter']);
	Route::get('/mulai-bermain/edit-in-game/{id}', ['as' => 'edit-in-game', 'uses' => 'Admin\MulaiBermainController@editInGame']);
	Route::get('/mulai-bermain/edit-kontrol/{id}', ['as' => 'edit-kontrol', 'uses' => 'Admin\MulaiBermainController@editKontrol']);
	Route::get('/mulai-bermain/edit-teman/{id}', ['as' => 'edit-teman', 'uses' => 'Admin\MulaiBermainController@editTeman']);
	Route::get('/mulai-bermain/edit-lain-lain/{id}', ['as' => 'edit-lain-lain', 'uses' => 'Admin\MulaiBermainController@editLain']);
	Route::put('/mulai-bermain/edit/{id}', ['as' => 'edit-mulai-bermain', 'uses' => 'Admin\MulaiBermainController@update']);
	Route::get('/mulai-bermain/show/{id}', ['as' => 'show-mulai-bermain', 'uses' => 'Admin\MulaiBermainController@show']);
	Route::delete('/mulai-bermain/destroy/{id}', ['as' => 'destroy-mulai-bermain', 'uses' => 'Admin\MulaiBermainController@destroy']);

	// barang
	Route::get('/barang/index', ['as' => 'index', 'uses' => 'Admin\BarangController@index']);
	Route::get('/barang/create', ['as' => 'create-barang', 'uses' => 'Admin\BarangController@create']);
	Route::get('/barang/create-kepala', ['as' => 'create-client', 'uses' => 'Admin\BarangController@createKepala']);
	Route::get('/barang/create-baju', ['as' => 'create-karakter', 'uses' => 'Admin\BarangController@createBaju']);
	Route::get('/barang/create-sepatu', ['as' => 'create-in-game', 'uses' => 'Admin\BarangController@createSepatu']);
	Route::get('/barang/create-perisai', ['as' => 'create-kontrol', 'uses' => 'Admin\BarangController@createPerisai']);
	Route::get('/barang/create-senjata', ['as' => 'create-teman', 'uses' => 'Admin\BarangController@createSenjata']);
	Route::get('/barang/create-kostum', ['as' => 'create-lain-lain', 'uses' => 'Admin\BarangController@createKostum']);
	Route::get('/barang/create-aksesoris', ['as' => 'create-lain-lain', 'uses' => 'Admin\BarangController@createAksesoris']);
	Route::post('/barang/create', ['as' => 'store-barang', 'uses' => 'Admin\BarangController@store']);
	Route::get('/barang/edit/{id}', ['as' => 'edit-barang', 'uses' => 'Admin\BarangController@edit']);
	Route::get('/barang/edit-kepala/{id}', ['as' => 'edit-client', 'uses' => 'Admin\BarangController@editKepala']);
	Route::get('/barang/edit-baju/{id}', ['as' => 'edit-karakter', 'uses' => 'Admin\BarangController@editBaju']);
	Route::get('/barang/edit-sepatu/{id}', ['as' => 'edit-in-game', 'uses' => 'Admin\BarangController@editSepatu']);
	Route::get('/barang/edit-perisai/{id}', ['as' => 'edit-kontrol', 'uses' => 'Admin\BarangController@editPerisai']);
	Route::get('/barang/edit-senjata/{id}', ['as' => 'edit-teman', 'uses' => 'Admin\BarangController@editSenjata']);
	Route::get('/barang/edit-kostum/{id}', ['as' => 'edit-lain-lain', 'uses' => 'Admin\BarangController@editKostum']);
	Route::get('/barang/edit-aksesoris/{id}', ['as' => 'edit-lain-lain', 'uses' => 'Admin\BarangController@editAksesoris']);
	Route::put('/barang/edit/{id}', ['as' => 'edit-barang', 'uses' => 'Admin\BarangController@update']);
	Route::get('/barang/show/{id}', ['as' => 'show-barang', 'uses' => 'Admin\BarangController@show']);
	Route::delete('/barang/destroy/{id}', ['as' => 'destroy-barang', 'uses' => 'Admin\BarangController@destroy']);
	
	// Player Prastige
	Route::get('/player-prestige', 'HomeController@playerPrestige');
	// Ckeditor Upload Images
	Route::post('/ckeditor/upload-images', 'Admin\CkeditorController@uploadImage')->name('post.image.ckeditor');
	// ===========================================Admin end==================================================================

	// Peta 
	Route::get('/peta/index', 'Admin\PetaController@index');
	Route::get('/peta/create', 'Admin\PetaController@create');
	Route::post('/peta/create', 'Admin\PetaController@store');
	Route::get('/peta/show/{id}', 'Admin\PetaController@show');
	Route::delete('/peta/destroy/{id}', 'Admin\PetaController@destroy');
	Route::get('/peta/edit/{id}', 'Admin\PetaController@edit');
	Route::put('/peta/edit/{id}', 'Admin\PetaController@update');

});

/** Done BE */
// Dunia Seal 
Route::get('/berita', 'HomeController@listBerita');
Route::get('/acara', 'HomeController@listEvent');
Route::get('/info', 'HomeController@info');
Route::get('/game-update', 'HomeController@gameUpdate');
Route::get('/pengenalan', 'HomeController@pengenalan');
Route::get('/feature', 'HomeController@fitur');
Route::get('/update-seal', 'HomeController@updateSeal');
Route::get('/carnival-city', 'HomeController@carnivalCity');
Route::get('/guild-wars', 'HomeController@guildWars');
Route::get('/service', 'HomeController@service');

// Panduan 
Route::get('/instalation', 'PanduanController@instalation');
Route::get('/npc', 'PanduanController@npc');
Route::get('/bale-monster', 'PanduanController@bale');
Route::get('/game-master', 'PanduanController@gameMaster');

// Member
Route::get('/persetujuan-member', 'MemberController@index');

// Detail
Route::get('/detail/{slug}', 'HomeController@detailBerita');
// Route::get('/detail-acara', 'detailFeatureController@acara');
// Route::get('/detail-gameUpdate', 'detailFeatureController@gameUpdate');
// Route::get('/detail-aturanMain', 'detailFeatureController@aturanMain');
// Route::get('/detail-rangking', 'detailFeatureController@rangking');
// Route::get('/detail-guide', 'detailFeatureController@guide');

// Komunitas
Route::get('/guild-rank', 'KomunitasController@guildRank');
Route::get('/fansite', 'KomunitasController@fansite');
Route::get('/aturan-bermain', 'KomunitasController@rule');

// Download
Route::get('/download-game', 'DownloadController@downloadGame');
Route::get('/download-gallery', 'DownloadController@downloadGallery');
Route::get('/download-image-800x600/{id}', 'DownloadController@downloadImage800');
Route::get('/download-image-1024x768/{id}', 'DownloadController@downloadImage1024');
Route::get('/download-emotikon', 'DownloadController@downloadEmotikon');
Route::get('/download-emotikon-file/{id}', 'DownloadController@downloadEmotikonFile');
Route::get('/download-video', 'DownloadController@downloadVideo');

// Layanan 
Route::get('/layanan-kontak', 'LayananController@kontak');

// koin 
Route::get('/panduan-beli-koin', 'HomeController@beliCoin');
/** End Done BE */

Route::get('/mulai-Bermain', 'PanduanController@mulaiBermain');
Route::get('/peta', 'PanduanController@peta');
Route::get('/pet', 'PanduanController@pet');
Route::get('/pacaran', 'PanduanController@pacaran');
Route::get('/guildWars', 'PanduanController@guildWars');
Route::get('/refine', 'PanduanController@refine');
Route::get('/barang', 'PanduanController@barang');
Route::get('/guildwar', 'PanduanController@guildwar');
Route::get('/profesi', 'PanduanController@profesi');
Route::get('/emotikon', 'PanduanController@emotikon');
Route::get('/hindari-penipuan', 'PanduanController@hindariPenipuan');

// komunitas 
Route::get('/komik', 'KomunitasController@komik');
Route::get('/screenshot', 'KomunitasController@screenshot');
Route::get('/event', 'KomunitasController@event');