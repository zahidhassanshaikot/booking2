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


Route::get('/', [
    'uses'  =>'PartyCenterController@index',
    'as'    =>'/'
]);
Route::get('/about-us', [
    'uses'  =>'PartyCenterController@aboutUs',
    'as'    =>'about-us'
]);

Route::get('/contact-us', [
    'uses'  =>'PartyCenterController@contactUs',
    'as'    =>'contact-us'
]);
Route::post('/contact-us/message', [
    'uses'  =>'PartyCenterController@contactUsMessage',
    'as'    =>'contact-message'
]);



Route::group(['middleware' => 'Admin'], function () {

    Route::get('/view/contact-us/message', [
        'uses'  =>'PartyCenterController@viewContactUsMessage',
        'as'    =>'view-contact-message'
    ]);
    Route::get('/delete/contact-us/message/{id}', [
        'uses'  =>'PartyCenterController@deleteContactUsMessage',
        'as'    =>'delete-contact-message'
    ]);


    Route::get('/add/post',[
        'uses' => 'PartyCenterController@addPost',
        'as'=>'add-post'
    ]);
    Route::post('/post/save',[
        'uses' => 'PartyCenterController@saveNewPostInfo',
        'as'=>'new-post'
    ]);


    Route::get('/post/manage',[
    'uses' => 'PartyCenterController@managePostInfo',
    'as'=>'manage-post'
    ]);

    Route::get('/post/unpublished/{id}',[
        'uses' => 'PartyCenterController@unpublishedPostInfo',
        'as'=>'unpublished-post'
    ]);


    Route::get('/post/published/{id}',[
        'uses' => 'PartyCenterController@publishedPostInfo',
        'as'=>'published-post'
    ]);

    Route::get('/post/edit/{id}',[
        'uses' => 'PartyCenterController@editPostInfo',
        'as'=>'edit-post'
    ]);
    Route::get('/post/delete/{id}',[
        'uses' => 'PartyCenterController@deletePostInfo',
        'as'=>'delete-post'
    ]);
    Route::post('/post/update',[
        'uses' => 'PartyCenterController@updatePostInfo',
        'as'=>'update-app-post'
    ]);
    Route::get('/post/view/{id}',[
        'uses' => 'PartyCenterController@viewPostByAdmin',
        'as'=>'view-post-by-admin'
    ]);



//---post-booking

    Route::get('/admin/post/customize-booking/request-info', [
        'uses'  =>  'PostController@customizeBookingRequestViewByAdmin',
        'as'    =>  'view-customize-booking-request-by-admin'
    ]);
    Route::get('/admin/post/booking/request-info', [
        'uses'  =>  'PostController@bookingRequestViewByAdmin',
        'as'    =>  'view-booking-request-by-admin'
    ]);

    Route::get('/admin/post/booking/accepted-request-info', [
        'uses'  =>  'PostController@acceptedBookingRequestViewByAdmin',
        'as'    =>  'view-accepted-booking-request-by-admin'
    ]);

    Route::get('/admin/post/booking/Checkout-request-info', [
        'uses'  =>  'PostController@CheckoutBookingRequestViewByAdmin',
        'as'    =>  'view-Checkout-booking-request-by-admin'
    ]);

    Route::get('/admin/post/booking/rejected-request-info', [
        'uses'  =>  'PostController@rejectedBookingRequestViewByAdmin',
        'as'    =>  'view-rejected-booking-request-by-admin'
    ]);



    Route::get('/post/booking/change/admin/{id}/{status}', [
        'uses'  =>  'PostController@changeBookingStatus',
        'as'    =>  'booking-status-change'
    ]);

    Route::get('/post/customize/booking/change/admin/{id}/{status}', [
        'uses'  =>  'PostController@changeCustomizeBookingStatus',
        'as'    =>  'customizeBooking-status-change'
    ]);

    Route::get('/super-admin/add/user', [
        'uses'  =>  'UserController@addUserBySAdmin',
        'as'    =>  'add-new-user-by-admin'
    ]);
    Route::post('admin/registration/new-user', 'UserController@addNewUser')->name('register-new-user');
    Route::post('search/request/date', 'PostController@searchRequestByDate')->name('search-request-by-date');

});


Route::get('/user/register',[
    'uses' => 'UserController@index',
    'as' => 'user-registration'
]);
Route::post('/save/user/registration-info',[
    'uses' => 'UserController@saveUserRegistrationInfo',
    'as' => 'new-user'
]);

Route::get('/user/login',[
    'uses' => 'UserController@userLogin',
    'as' => 'user-login'
]);
Route::post('/user/login/check',[
    'uses' => 'UserController@userLoginCheck',
    'as' => 'user-login-check'
]);

Route::get('/admin/login',[
    'uses' => 'UserController@adminLogin',
    'as' => 'admin-login'
]);

Route::post('/admin/login/check',[
    'uses' => 'UserController@adminLoginCheck',
    'as' => 'admin-login-check'
]);

Route::post('/user-logout', [
    'uses'  =>  'UserController@userLogout',
    'as'    =>  'user-logout'
]);

Route::post('/post/search', [
    'uses'  =>  'PartyCenterController@postSearch',
    'as'    =>  'search-post'
]);



//----post controller
Route::get('/post/details/{id}', [
    'uses'  =>  'PostController@postDetails',
    'as'    =>  'post-details'
]);
Route::get('/post/type/{name}', [
    'uses'  =>  'PostController@typePost',
    'as'    =>  'type-post'
]);
Route::post('/post/comment', [
    'uses'  =>  'PostController@postComment',
    'as'    =>  'post-comment'
]);


Route::get('/post/booking/{id}', [
    'uses'  =>  'PostController@bookingRequest',
    'as'    =>  'booking-now'
]);

Route::post('/post/booking/request/transection/', [
    'uses'  =>  'PostController@bookingRequestTransection_id',
    'as'    =>  'transection_id'
]);

Route::post('/post/booking/request', [
    'uses'  =>  'PostController@bookingRequestSend',
    'as'    =>  'send-post-booking-request'
]);
Route::post('/checkout/booking/request', [
    'uses'  =>  'PostController@checkoutBookingRequest',
    'as'    =>  'checkout-booking-request'
]);
Route::post('/transactionId/booking/request', [
    'uses'  =>  'PostController@saveTransactionId',
    'as'    =>  'save-post-booking-transactionId'
]);

Route::get('/post/booking/request-status/user', [
    'uses'  =>  'PostController@bookingRequestStatusByUser',
    'as'    =>  'booking-request-status-by-user'
]);

Route::get('/post/booking/delete/user/{id}', [
    'uses'  =>  'PostController@bookingRequestDeleteByUser',
    'as'    =>  'delete-booking-history'
]);


Route::get('/customize-booking', [
    'uses'  =>  'PostController@customizeBooking',
    'as'    =>  'customize-booking'
]);
Route::post('/post/customize-booking-request', [
    'uses'  =>  'PostController@postCustomizeBooking',
    'as'    =>  'post-customize-booking-request'
]);



//----user controller
Route::get('/app/user/profile', [
    'uses'  =>  'UserController@userProfile',
    'as'    =>  'app-user-profile'
]);
Route::get('/user/profile/edit/{id}', [
    'uses'  =>  'UserController@editUserInfo',
    'as'    =>  'edit-user-info'
]);
Route::post('/user/profile/update', [
    'uses'  =>  'UserController@updateUserInfo',
    'as'    =>  'update-user-info'
]);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
