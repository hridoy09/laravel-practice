<?php

use App\Models\SubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('admin\Auth')->prefix('admin/')->name('admin.')->group(function(){
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
    Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'ConfirmPasswordController@confirm');
    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');

});
Route::middleware('admin.auth')->namespace('admin')->prefix('admin/')->name('admin.')->group(function (){

    Route::get('dashboard','AdminController@index')->name('dashboard');

// for category
    Route::get('category','CategoryController@index')->name('category');
    Route::post('save/{id?}','CategoryController@save')->name('category.save');
    Route::get('delete-category/{id}','CategoryController@destroy')->name('delete.category');

    // for SubCategory

    Route::get('subcategory','SubCategoryController@index')->name('subcategory');
    Route::post('save/{id?}','SubCategoryController@save')->name('subcategory.save');
    Route::get('delete-category/{id}','SubCategoryController@destroy')->name('delete.subcategory');

    // for product

    Route::get('add-product', 'ProductController@create')->name('add.product');

});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
