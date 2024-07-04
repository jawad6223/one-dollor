<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.login');
});
Route::prefix('admin')->group(function () {
/*-------------------------Admin Routes---------------------*/
Route::get('/', function () {
    return view('admin.login');
});
Route::get('login', function () {
    return view('admin.login');
});


route::post('loginaction',[adminController::class,'adminloginaction']);


Route::get('forget', function () {
    return view('admin.forget');
});
route::post('forget_action',[admincontroller::class,'forget']);

// Middleware
Route::group(['middleware' => 'admin'], function () {


// Group Controller

Route::controller(admincontroller::class)->group(function(){
// Dashboard
Route::get('dashboard','dashboard');
//profile
route::get('profile','profile');
route::post('profile_edit_action','profile_edit_action');

//update password
route::get('update_password','update_password');
route::post('update_password_action','update_password_action');

//Logout
route::get('logout','logout');

// Stripe Payment 
Route::get('add_card','add_card');
Route::post('stripe', [admincontroller::class, 'stripePost'])->name('admin/stripe.post');
// Card
Route::get('view_card','view_card');
Route::get('card_delete/{id}','card_delete');

// Card Transaction
Route::get('card_transaction','card_transaction');

// subscriber Transaction
    Route::get('subscriber_transaction','subscriber_transaction');
// Subscription Package
Route::get('subscription_package','subscription_package');
Route::post('edit_pkg_action','edit_pkg_action');

// subscriber
Route::get('active_subscriber','active_subscriber');
Route::get('blocked_subscriber','block_subscriber');


// Info
Route::get('info/{id}','info');
});
});
});


//  Uaer

Route::get('/user', function () {
    return view('user.login');
});
Route::prefix('user')->group(function () {
/*-------------------------User  Routes---------------------*/
Route::get('/', function () {
    return view('user.login');
});
Route::get('login', function () {
    return view('user.login');
});


route::post('login_action',[usercontroller::class,'user_login_action']);

//signup
route::get('signup', [usercontroller::class,'signup']);
route::post('signup_action', [usercontroller::class,'signup_action']);
// Verification

Route::get('verification/{id}', [userController::class,'verification']);
Route::post('verification_action', [usercontroller::class,'verification_action']);
Route::get('again_verification_action/{id}', [usercontroller::class,'again_verification_action']);

Route::get('forget', function () {
    return view('user.forget');
});
route::post('forget_action',[usercontroller::class,'forget']);


// Subscription
Route::get('subscription/{id}', [userController::class,'subscription']);

Route::post('stripe.post1', [usercontroller::class, 'stripePost1'])->name('user/stripe.post1');

// Middleware
Route::group(['middleware' => 'user'], function () {


// Group Controllee

Route::controller(usercontroller::class)->group(function(){
    // Dashboard
    Route::get('dashboard','dashboard');
    //profile
    route::get('profile','profile');
    route::post('profile_edit_action','profile_edit_action');
    
    //update password
    route::get('update_password','update_password');
    route::post('update_password_action','update_password_action');
    
    //Logout
    route::get('logout','logout');
    
    // Stripe Payment 
    Route::get('add_card','add_card');
    Route::post('stripe', [usercontroller::class, 'stripePost'])->name('user/stripe.post');
    // Card
    Route::get('view_card','view_card');
    Route::get('card_delete/{id}','card_delete');
    
    // Card Transaction
    Route::get('card_transaction','card_transaction');
    
    // Subscription Package
    Route::get('subscription_package','subscription_package');
    Route::post('edit_pkg_action','edit_pkg_action');

    // subscriber Transaction
    Route::get('subscriber_transaction','subscriber_transaction');

    // Docs

    Route::get('docs','docs');
    Route::get('docs_delete/{id}','docs_delete');
});
    
    });
    });

    Route::post('file-upload2', [usercontroller::class, 'dropzoneFileUpload1' ])->name('dropzoneFileUpload1');


    // Client

    Route::get('/', function () {
        return view('client.index');
    });

    Route::get('about', function () {
        return view('client.about');
    });
    
    Route::get('contact', function () {
        return view('client.contact');
    });
    
    Route::get('keep', function () {
        return view('client.keep');
    });
    
    Route::get('repair', function () {
        return view('client.repair');
    });

    
    Route::get('build', function () {
        return view('client.build');
    });

    Route::get('basic', function () {
        return view('client.basic');
    });
    
    Route::get('identity', function () {
        return view('client.identity');
    });
    
    Route::get('mange', function () {
        return view('client.mange');
    });
    
    Route::get('life', function () {
        return view('client.life');
    });
    
    
    
    Route::post('contact_action', [admincontroller::class, 'contact_action']);

