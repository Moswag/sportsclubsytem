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

Route::get(
    '/', function () {
        return redirect('start');
    }
)->name('home');

Route::group(
    ['namespace' => 'frontend', 'middleware' => ['web','guest']], function () {
    Route::get('/start', 'FrontendController@home')->name('start');
    Route::get('/sports', 'FrontendController@sports');
    Route::get('/register', 'FrontendController@registerview')->name('registerview');
    Route::post('/register', 'FrontendController@register')->name('register');

    Route::get('/quote', 'FrontendController@quoteget')->name('quote');
    Route::post('/quote', 'FrontendController@quote')->name('quoteadd');


});

Route::group(
    ['namespace' => 'frontend','middleware' => ['roles'],'roles' => ['admin']], function ()  {
        Route::get('/quote', 'FrontendController@quoteget')->name('quote');
        Route::post('/quote', 'FrontendController@quote')->name('quoteadd');
    });

Route::group(
    ['namespace' => 'admin', 'middleware' => ['web','guest']], function () {



}


);
Route::group(
    ['namespace' => 'backend','middleware' => ['roles'],'roles' => ['admin', 'user','hr','supervisor']], function () {
    Route::get('/viewroles', 'RoleController@index')->name('viewroles');
    Route::get('/addrole', 'RoleController@create')->name('addrole');
    Route::post('/addrole', 'RoleController@store');
    Route::get('/editrole/{id}', 'RoleController@edit')->name('editrole');
    Route::post('/updaterole/{id}', 'RoleController@update')->name('updaterole');
    Route::get('/deleterole/{id}', 'RoleController@destroy')->name('deleterole');
    Route::get('/assignrole', 'RoleController@assign')->name('assignrole');
    Route::post('/assign-roles', 'RoleController@postAssign');

    Route::get('/viewsport', 'SportsController@show')->name('viewsport');
    Route::get('/addsport', 'SportsController@index');
    Route::post('/addsport', 'SportsController@store');
    Route::get('/deletesport/{id}', 'SportsController@destroy')->name('deletesport');
    Route::get('/editsport/{id}', 'SportsController@edit')->name('editsport');
    Route::post('/updatesport/{id}', 'SportsController@update')->name('updatesport');


    Route::get('/viewsupervisor', 'SupervisorController@index')->name('viewsupervisor');
    Route::get('/addsupervisor', 'SupervisorController@create')->name('addsupervisor');

    Route::post('/createsupervisor', 'SupervisorController@store')->name('supervisorsport');






});

Route::group(
    ['namespace' => 'backend','middleware' => ['roles'],'roles' => ['hr']], function () {
    Route::get('/hrview', 'HRController@index')->name('hrview');
    Route::post('/deduct', 'HRController@update')->name('deduct');
    Route::get('/viewsportmembers', 'HRController@show')->name('viewsportmembers');


});

Route::group(
    ['namespace' => 'backend','middleware' => ['roles'],'roles' => ['supervisor']], function () {
    Route::get('/viewblog', 'BlogController@index')->name('viewblog');
    Route::get('/addblog', 'BlogController@create')->name('addblog');
    Route::post('/addblog', 'BlogController@store')->name('createblog');
    Route::get('/viewmembers', 'SupervisorController@show')->name('viewmembers');


});


Route::group(
    ['namespace' => 'backend','middleware' => ['roles'],'roles' => ['user']], function () {
    Route::get('/joinsport/{id}', 'UserController@joinsport')->name('joinsport');
    Route::get('/vs', 'SportsController@viewsports')->name('viewsports');
    Route::get('/mysports', 'SportsController@mysports')->name('mysports');

    Route::get('/joidepx/{id}', 'DependentsController@joinsport')->name('joinsportdep');
    Route::get('/joidep/{id}', 'SportsController@joindep')->name('joindep');
    Route::get('/deletedep/{id}', 'DependentsController@destroy')->name('deletedep');



    Route::get('/blog/{id}', 'SportsController@blog')->name('viewsportblog');
    Route::get('/vblog/{id}', 'SportsController@viewthisblog')->name('viewthisblog');
    Route::post('/vblog/{id}/comment', 'CommentsController@store')->name('comment');


    Route::get('/dadd', 'DependentsController@index')->name('adddependants');
    Route::get('/viewdependants', 'DependentsController@show')->name('viewdependants');
    Route::post('/dcreate', 'DependentsController@store');







});



Route::group(
    ['namespace' => 'backend', 'middleware' => ['web','guest']], function () {
        Route::get('/login', 'UserController@login')->name('login');
        Route::post('/login', 'UserController@authenticate')->name('loginpos');
        Route::get('/forgot', 'UserController@forgot')->name('forgot');        
        Route::post('/forgot', 'UserController@forgotPost')->name('forgot_post');        
        Route::get('/reset/{token}', 'UserController@reset')->name('reset');        
        Route::post('/reset/{token}', 'UserController@resetPost')->name('reset_post');        
    }
);

Route::group(
    ['namespace' => 'backend', 'middleware' => 'auth'], function () {
        Route::get('/logout', 'UserController@logout')->name('logout');
        Route::get('/lock', 'UserController@lock')->name('lockscreen');
        Route::resource('user', 'UserController');
        Route::get('/dashboard', 'UserController@dashboard')->name('user.dashboard');
        Route::get('/table', 'UserController@tableview')->name('user.table');
        Route::get('/adduser', 'UserController@adduser')->name('user.adduser');
        Route::get('/myprofile','UserController@myprofile')->name('myprofile');
        Route::get('/editprofile','UserController@editprofile')->name('editprofile');
        Route::post('/updateprofile','UserController@updateprofile')->name('updateprofile');
        Route::get('/changepassword','UserController@changepassword')->name('changepassword');
        Route::post('/updatepassword','UserController@updatepassword')->name('updatepassword');


    }
);

///        Route::get//            '/set-locale/{lang}', function ($lang) {
//                //set user wanted locale to session
//                session('user_locale', $lang);
//                dd(session('user_locale'));


//                return redirect()->back();