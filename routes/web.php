<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::group(['middleware' => ['guest']], function () {

    Route::get('/', 'backend\Auth\LoginController@getLoginForm');
    // Route::get('/home', function () {
    //      return view('backend.home');
    //    // return view('frontend.home');
    // });

    // Route::get('/', function () {
    //     return view('home');
    // });
    // Route::get('/product', function () {
    //     return view('product');
    // });
    // Route::get('/subpage', function () {
    //     return view('subpage');
    // });


    // ADMIN
    Route::get('admin', 'backend\Auth\LoginController@getLoginForm');
    Route::get('admin/login', 'backend\Auth\LoginController@getLoginForm');
    Route::post('admin/authenticate', 'backend\Auth\LoginController@authenticate');

    // USER
    Route::get('user/login', 'frontend\Auth\LoginController@getLoginForm');
    Route::post('user/authenticate', 'frontend\Auth\LoginController@authenticate');

    Route::get('user/register', 'frontend\Auth\RegisterController@getRegisterForm');
    Route::post('user/saveregister', 'frontend\Auth\RegisterController@saveRegisterForm');

    

});




Route::group(['middleware' => ['user']], function () {

    Route::post('user/logout', 'frontend\Auth\LoginController@getLogout');
    Route::get('user/dashboard', 'frontend\UserController@dashboard');

    Route::get('user/dashboard1/', function () {

        return view('frontend.dashboard');
    });

});



Route::group(['middleware' => ['admin']], function () {

    Route::get('admin/home', 'backend\AdminController@home');
    Route::get('admin/logout', 'backend\Auth\LoginController@getLogout');
    Route::post('admin/logout', 'backend\Auth\LoginController@getLogout');
    Route::get('admin/setting', 'backend\SettingController@index');
    Route::post('/admin/setting/store', 'backend\SettingController@store');
    Route::get('admin/change_password', 'backend\ChangePassController@index');
    Route::post('/admin/change_password/store', 'backend\ChangePassController@store');
    Route::post('/admin/change_password/password_check', 'backend\ChangePassController@OldPasswordCheck');

    // cms Route
    // Route::get('admin/cms', 'backend\CmsController@index');
    // Route::get('admin/cms/add', 'backend\CmsController@create');
    // Route::post('admin/cms/store', 'backend\CmsController@store');
    // Route::get('admin/cms/edit/{id}', 'backend\CmsController@edit');
    // Route::get('admin/cms/show/{id}','backend\CmsController@show');
    // Route::post('admin/cms/update', 'backend\CmsController@update');
    // Route::post('admin/cms/actionupdate','backend\CmsController@actionupdate');

    // Menu Route
    // Route::get('admin/menu', 'backend\MenuController@index');
    // Route::get('admin/menu/add', 'backend\MenuController@create');
    // Route::post('admin/menu/store', 'backend\MenuController@store');
    // Route::get('admin/menu/edit/{id}', 'backend\MenuController@edit');
    // Route::get('admin/menu/show/{id}','backend\MenuController@show');
    // Route::post('admin/menu/update', 'backend\MenuController@update');
    // Route::post('admin/menu/actionupdate','backend\MenuController@actionupdate');
    // Route::post('admin/menu/actionupdate','backend\MenuController@actionupdate');
    // Route::post('admin/check_user', 'backend\MenuController@check_name');

    // User Route
    Route::get('admin/user', 'backend\UserController@index');
    Route::post('admin/user/actionupdate', 'backend\UserController@actionupdate');

    // customer Route
    Route::get('admin/customer', 'backend\CustomerController@index');
    Route::get('admin/customer/add', 'backend\CustomerController@create');
    Route::post('admin/customer/store', 'backend\CustomerController@store');
    Route::get('admin/customer/edit/{id}', 'backend\CustomerController@edit');
    Route::post('admin/customer/update', 'backend\CustomerController@update');
    Route::post('admin/customer/actionupdate','backend\CustomerController@actionupdate');
    Route::post('admin/customer/check_mail', 'backend\CustomerController@check_mail');


    // key customer Route
    Route::get('admin/keycustomer', 'backend\KeyCustomerController@index');
    Route::get('admin/keycustomer/add', 'backend\KeyCustomerController@create');
    Route::post('admin/keycustomer/store', 'backend\KeyCustomerController@store');
    Route::get('admin/keycustomer/show/{id}','backend\KeyCustomerController@show');
    Route::get('admin/keycustomer/edit/{id}', 'backend\KeyCustomerController@edit');
    Route::any('admin/keycustomer/update', 'backend\KeyCustomerController@update');
    Route::post('admin/keycustomer/actionupdate','backend\KeyCustomerController@actionupdate');
    Route::post('admin/keycustomer/check_mail', 'backend\KeyCustomerController@check_mail');

    //School Create Route

    Route::get('admin/school', 'backend\SchoolController@index');
    Route::get('admin/school/add', 'backend\SchoolController@create');
    Route::post('admin/school/store', 'backend\SchoolController@store');
    Route::get('admin/school/show/{id}','backend\SchoolController@show');
    Route::get('admin/school/edit/{id}', 'backend\SchoolController@edit');
    Route::any('admin/school/update', 'backend\SchoolController@update');
    Route::post('admin/school/actionupdate','backend\SchoolController@actionupdate');
   
    


    // Testimonials Route
    // Route::get('admin/testimonials', 'backend\TestimonialsController@index');
    // Route::get('admin/testimonials/add', 'backend\TestimonialsController@create');
    // Route::post('admin/testimonials/store', 'backend\TestimonialsController@store');
    // Route::get('admin/testimonials/edit/{id}', 'backend\TestimonialsController@edit');
    // Route::get('admin/testimonials/show/{id}','backend\TestimonialsController@show');
    // Route::post('admin/testimonials/update', 'backend\TestimonialsController@update');
    // Route::post('admin/testimonials/actionupdate','backend\TestimonialsController@actionupdate');
    // Route::post('admin/check_name', 'backend\TestimonialsController@check_name');

    // Category Route
    // Route::get('admin/category', 'backend\CategoryController@index');
    // Route::get('admin/category/add', 'backend\CategoryController@create');
    // Route::post('admin/category/store', 'backend\CategoryController@store');
    // Route::post('admin/category/exist_check', 'backend\CategoryController@exist_check');
    // Route::get('admin/category/edit/{id}', 'backend\CategoryController@edit');
    // Route::post('admin/category/update', 'backend\CategoryController@update');
    // Route::post('admin/category/actionupdate','backend\CategoryController@actionupdate');

    // Sub Category Route
    // Route::get('admin/sub_category/{id}', 'backend\SubCategoryController@index');
    // Route::get('admin/sub_category/{id}/add', 'backend\SubCategoryController@create');
    // Route::post('admin/sub_category/{id}/store', 'backend\SubCategoryController@store');
    // Route::post('admin/sub_category/exist_check', 'backend\SubCategoryController@exist_check');
    // Route::get('admin/sub_category/{id}/edit/{sub_id}', 'backend\SubCategoryController@edit');
    // Route::post('admin/sub_category/{id}/update', 'backend\SubCategoryController@update');
    // Route::post('admin/sub_category/{id}/actionupdate','backend\SubCategoryController@actionupdate');

    // Banner Route
    // Route::get('admin/banner', 'backend\BannerController@index');
    // Route::get('admin/banner/add', 'backend\BannerController@create');
    // Route::post('admin/banner/store', 'backend\BannerController@store');
    // Route::get('admin/banner/edit/{id}', 'backend\BannerController@edit');
    // Route::post('admin/banner/update', 'backend\BannerController@update');
    // Route::post('admin/banner/actionupdate','backend\BannerController@actionupdate');
    // Route::post('admin/banner/banner_attachment', 'backend\BannerController@banner_attachment');

    //create customer



});

//Api controller for CDN
    Route::post('/generateotp','backend\APIController@cdnTest');
