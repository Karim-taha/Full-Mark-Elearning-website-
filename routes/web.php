<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TeacherProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\FourmaxratingController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CogroupController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseTeacherController;
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

Auth::routes();

Route::get('/', [FourmaxratingController::class , 'index1'])->name('index');

Route::get('/about-us', function () {
    return view('about-us', ["title" => "About us"]);
})->name("about-us");

// Start Contact Us Routs :
Route::get('/contact-us', [ContactUsController::class, 'index'])->name("contact-us");
Route::post('/contactstore', [ContactUsController::class, 'store'])->name("contact.store");
// End Contact Us Routs

// Start Course Info Routs :
Route::get('/course-info/{id}', [GroupController::class, 'show'])->name("course-info");
// Start Course Info Routs :

Route::get('/privacy&policy', function () {
    return view('privacy&policy', ["title" => "Privacy&policy"]);
});
Route::get('/teacher-profile/{id}', [TeacherProfileController::class, 'show'])->name("teacher-profile")->middleware('auth');
Route::get('/student-profile/{id}', [StudentsController::class, 'show'])->name("student-profile");
Route::post('/student/update', [StudentsController::class, 'update'])->name("student.update");


Route::get('/search-courses', [App\Http\Controllers\CourseTeacherController::class, 'searchByName'])->name('courses.search');




Route::get('/payment', [PaymentController::class, 'index'])->name('payment')->middleware('auth');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// login with facebook
Route::get('/login/facebook', [LoginController::class, 'redirectToFacebbok']);

Route::get('/login/facebook/callback', [LoginController::class, 'handleFacebbokCallback']);


Route::get('/courses/search', [CourseTeacherController::class, 'extinsiveSearch']);
Route::get('courses/sale', [CourseTeacherController::class, 'onSaleSearch'])->name('search.sale');
//login with github
Route::get('/sign-in/github', 'App\Http\Controllers\LoginController@github');

Route::get('/sign-in/github/redirect', 'App\Http\Controllers\LoginController@githubRedirect');


//login with google
Route::get('/login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);


//payment with paypal

Route::get('paypal/checkout/{id}', [PaymentController::class, 'getExpressCheckout'])->name('paypal.checkout');
Route::get('paypal/checkout-success/{id}', [PaymentController::class, 'getExpressCheckoutSuccess'])->name('paypal.success');
Route::get('paypal/checkout-cancel', [PaymentController::class, 'cancelPage'])->name('paypal.cancel');
//Rating system

//start group route get and post
Route::get('/group', [GroupController::class, 'index'])->name('groups');
Route::post('/groupstore', [GroupController::class, 'store'])->name('group.store');


//end group route
Route::get('/allgroups/{id}', [GroupController::class, 'showGroup'])->name("allgroups");


//shoppingcart
Route::get('/shoppingcart', function () {
    return view('shoppingcart');
})->name('shoppingcart');

Route::get('/groups.data', [GroupController::class, 'shoppingCartData']);

Route::get('/payment', [PaymentController::class, 'index'])->middleware('auth')->name('payment');
Route::get('/payment/{id}', [PaymentController::class, 'store'])->middleware('auth')->name('payment.store');


// Start Videos routes :

Route::get('/lecture-live/{id}', [VideoController::class, 'lectureLive'])->name('lecture-live');

// Route::get('/upload', [VideoController::class, 'upload'])->name('upload');

Route::post('/lecture-live', [VideoController::class, 'store'])->name('lectureLive');
// Route::get('lecture-live/{id}', [VideoController::class, 'lectureLive'])->name('lecture-id');

// Route::get('/lectures', [VideoController::class, 'index'])->name('lectures');
Route::get('/lectures/{id}', [VideoController::class, 'show'])->name('show.lecture');
Route::get('/lectures/download/{file}', [VideoController::class, 'download'])->name('download.lecture');
Route::get('/lectures/delete/{id}', [VideoController::class, 'destroy'])->name('destroy.lecture');

// End Videos routes