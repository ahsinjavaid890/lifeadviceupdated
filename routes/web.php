<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StaffPermissionController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\JobController; 
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

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Site Routes

Route::get('/', [SiteController::class, 'index']);

Route::get('/aboutus', [SiteController::class, 'aboutus']);
Route::get('/contactus', [SiteController::class, 'contactus']);
Route::get('/privacypolicy', [SiteController::class, 'privacypolicy']);
Route::get('/faq', [SiteController::class, 'faq']);
Route::get('/login', [SiteController::class, 'login']);
Route::get('/signup', [SiteController::class, 'signup']);











Route::get('/carrier/{id}', [SiteController::class, 'carrierprofile']);
Route::get('/job-detail/{id}', [SiteController::class, 'jobdetail']);



// Register Routes
Route::POST('/checkemail', [RegisterController::class, 'checkemail'])->name('checkemail');
Route::get('/checkcompanyname/{id}', [RegisterController::class, 'checkcompanyname']);
Route::get('/checkdotnumber/{id}', [RegisterController::class, 'checkdotnumber']);
Route::POST('/carrierregister', [RegisterController::class, 'carrierregister']);

Route::get('/registeralert', [RegisterController::class, 'registeralert'])->name('registeralert');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [CarrierController::class, 'index']);





// carrier-profile
Route::get('/carrier-profile', [CarrierController::class, 'carrierprofile']);
Route::POST('/updatecarrierlogo', [CarrierController::class, 'updatecarrierlogo']);
Route::POST('/changecoverphoto', [CarrierController::class, 'changecoverphoto']);
Route::POST('/updatecarrierprofile', [CarrierController::class, 'updatecarrierprofile']);
Route::get('/profile-settings', [CarrierController::class, 'profilesettings']);
Route::POST('/updateprofilepicture', [CarrierController::class, 'updateprofilepicture']);
Route::POST('/updateuserprofile', [CarrierController::class, 'updateuserprofile']);
Route::POST('/securetycredentials', [CarrierController::class, 'securetycredentials']);
Route::POST('/updatepetpolicy', [CarrierController::class, 'updatepetpolicy']);
Route::POST('/updateriderpolicy', [CarrierController::class, 'updateriderpolicy']);
Route::get('/companyinfo/{id}', [CarrierController::class, 'companyinfo']);
Route::POST('/updatecompanyinfo', [CarrierController::class, 'updatecompanyinfo']);
Route::get('/help', [CarrierController::class, 'carrierhelp']);
Route::get('/add-new-post', [CarrierController::class, 'addnewpost']);
Route::get('/all-posts', [CarrierController::class, 'allposts']);
Route::get('/editpost/{id}', [CarrierController::class, 'editpost']);
Route::post('/addneweducationarticle', [CarrierController::class, 'addneweducationarticle']);
Route::get('/education-center', [CarrierController::class, 'educationcenter']);
Route::post('/updateeducationarticle', [CarrierController::class, 'updateeducationarticle']);
Route::get('/detail/{id}', [CarrierController::class, 'detailpost']);
Route::get('/map/add-new', [CarrierController::class, 'addnewmap']);
Route::get('/savemaplocations/{one}/{two}/{three}/{four}', [CarrierController::class, 'savemaplocations']);
Route::post('/addnewhiringmap', [CarrierController::class, 'addnewhiringmap']);
Route::get('/hirig-maps', [CarrierController::class, 'hiringmaps']);
Route::get('/deletemap/{id}', [CarrierController::class, 'deletemap']);
Route::get('/changestatusofmap/{id}', [CarrierController::class, 'changestatusofmap']);
Route::get('/editmap/{id}', [CarrierController::class, 'editmap']);
Route::post('/updatehiringmap', [CarrierController::class, 'updatehiringmap']);



// Staff Permissions
Route::get('/staff-permissions', [StaffPermissionController::class, 'allpermissions']);
Route::get('/edit-staff-permission/{id}', [StaffPermissionController::class, 'editstaffpermission']);
Route::get('/add-staff-permission', [StaffPermissionController::class, 'addstaffpermission']);
Route::POST('/addnewstaffpermission', [StaffPermissionController::class, 'addnewstaffpermission']);
Route::POST('/updatestaffpermission', [StaffPermissionController::class, 'updatestaffpermission']);
Route::get('/members', [StaffPermissionController::class, 'allmembers']);
Route::POST('/addnewcarrierstaff', [StaffPermissionController::class, 'addnewcarrierstaff']);






Route::get('/carrier-profile/reviews', function () {
    return view('carrier/carrier-profile/reviews');
});



// Jobs Routes
Route::get('/jobs', [JobController::class, 'allcarrierjobs']);
Route::get('/searchjobs', [JobController::class, 'searchjobs']);
Route::get('/job/add', [JobController::class, 'addnewjob']);
Route::get('/job/published', [JobController::class, 'publishedjobstatus']);
Route::post('/job/submitone', [JobController::class, 'submitone']);
Route::post('/job/adddadvancedetails', [JobController::class, 'adddadvancedetails']);
Route::post('/job/addpayoutschedule', [JobController::class, 'addpayoutschedule']);
Route::post('/job/addadvancepayoutdetails', [JobController::class, 'addadvancepayoutdetails']);
Route::post('/job/hiringreq', [JobController::class, 'hiringreq']);
Route::post('/job/addnewcompanyemal', [JobController::class, 'addnewcompanyemal']);
Route::post('/job/routingandtrans', [JobController::class, 'routingandtrans']);
Route::post('/job/subscription', [JobController::class, 'subscription']);
Route::post('/job/jobsubmitlast', [JobController::class, 'jobsubmitlast']);
Route::post('/job/advanceequipment', [JobController::class, 'advanceequipment']);
Route::get('/deletejob/{id}', [JobController::class, 'deletejob']);
Route::get('/jobedit/{id}', [JobController::class, 'jobedit']);
Route::get('/carrierjobdetail/{id}', [JobController::class, 'carrierjobdetail']);
Route::get('/hiring-templates', [JobController::class, 'hiringtemplates']);
Route::get('/deletehiringtemplate/{id}', [JobController::class, 'deletehiringtemplate']);






// Hiring Maps





// Staff





Route::get('/integrations', function () {
    return view('carrier/integrations/index');
});






Route::get('/advertise', function () {
    return view('carrier/advertise/index');
});



Route::get('/billing', function () {
    return view('carrier/billing/index');
});




Route::get('/change-password', function () {
    return view('carrier/profile-settings/change-password');
});










Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('/login',[LoginController::class, 'login'])->name('login');
    Route::post('/login-process',[LoginController::class, 'login_process'])->name('login_process');
    Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
});


Route::name('admin.')->prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware('admin')->group(function(){
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');


    Route::name('pages.')->prefix('pages')->group(function(){
        Route::get('/homepage','CmsController@homepageshow');
        Route::get('/homepage','CmsController@supervisashow');     

    });
Route::name('pages.')->prefix('pages')->group(function(){
        Route::get('/homepage','CmsController@homepageshow');
        Route::get('/supervisa','CmsController@supervisashow');     

    });


    Route::name('sales.')->prefix('sales')->group(function(){
        Route::get('/allsale','AdminController@allsale');
        
        Route::get('/viewsale/{id}','AdminController@viewsale');
    });

    Route::name('faq.')->prefix('faq')->group(function(){
        Route::get('/faqcategories','CmsController@faqcategories');
        Route::post('/addnewfaqcategory','CmsController@addnewfaqcategory');
        Route::post('/updatfaqcategory','CmsController@updatfaqcategory');
        Route::get('/deletefaqcategory/{id}','CmsController@deletefaqcategory');
        Route::get('/allfaq','CmsController@allfaq');
        Route::post('/addnewfaq','CmsController@addnewfaq');
        Route::post('/updatfaq','CmsController@updatfaq');
        Route::get('/deletefaq/{id}','CmsController@deletefaq');
    });




});