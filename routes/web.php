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
Route::POST('/attemptlogin', [SiteController::class, 'attemptlogin']);


Route::name('user.')->prefix('user')->group(function(){
    Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
    
});


// Site Routes

Route::get('/', [SiteController::class, 'index']);
Route::get('/profile', [SiteController::class, 'profile']);
Route::get('/security-settings', [SiteController::class, 'securitysettings']);
Route::get('/qoutes', [SiteController::class, 'qoutes']);
Route::get('/udashboard', [SiteController::class, 'udashboard']);
Route::get('/qoutes-detail', [SiteController::class, 'qoutesdetail']);
Route::get('/super-visa-insurance', [SiteController::class, 'supervisa']);
Route::get('/travel-insurance', [SiteController::class, 'travel']);
Route::get('/visitor-insurance', [SiteController::class, 'visitorinsurance']);
Route::get('/student-insurance', [SiteController::class, 'studentinsurance']);


Route::get('/life-insurance', [SiteController::class, 'lifeinsurance']);
Route::get('/desability', [SiteController::class, 'desability']);
Route::get('/critical-illness', [SiteController::class, 'criticalillness']);
Route::get('/health-insurance', [SiteController::class, 'health']);
Route::get('/product', [SiteController::class, 'product']);
Route::get('/claim', [SiteController::class, 'claim']);
Route::get('/resp', [SiteController::class, 'resp']);
Route::get('/rrsp', [SiteController::class, 'rrsp']);
Route::get('/nonmedical', [SiteController::class, 'nonmedical']);
Route::get('/aboutus', [SiteController::class, 'aboutus']);
Route::get('/contactus', [SiteController::class, 'contactus']);
Route::POST('/contactus', [SiteController::class, 'contacts']);
Route::get('/privacypolicy', [SiteController::class, 'privacypolicy']);
Route::get('/blogs', [SiteController::class, 'blogs']);
Route::get('/faq', [SiteController::class, 'faq']);
Route::get('/login', [SiteController::class, 'login']);

Route::get('/blog/{id}', [SiteController::class, 'blogdetail']);
Route::get('/category/{id}', [SiteController::class, 'blogbycategory']);
Route::get('/compareplans', [SiteController::class, 'compareplans']);
Route::POST('/apply', [SiteController::class, 'applyplan']);
Route::POST('/applyqoute', [SiteController::class, 'applyqoute']);
Route::get('/conferm', [SiteController::class, 'confermquote']);



Route::get('/product/{id}', [SiteController::class, 'productdetail']);


Route::POST('/quotes', [SiteController::class, 'quotes'])->name('quotes');





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
    Route::get('/profile','AdminController@profile')->name('profile');
    Route::post('/updateuserprofile','AdminController@updateuserprofile');
    Route::post('/updateusersecurity','AdminController@updateusersecurity');

    Route::name('blogs.')->prefix('blogs')->group(function(){
        Route::get('/blogcategories','AdminController@blogcategories');
        Route::post('/addnewblogcategory','AdminController@addnewblogcategory');
        Route::post('/updatblogcategory','AdminController@updatblogcategory');
        Route::get('/deleteblogcategory/{id}','AdminController@deleteblogcategory');
        Route::get('/allblogs','AdminController@allblogs');
        Route::post('/addnewfaq','AdminController@addnewfaq');
        Route::post('/updateblog','AdminController@updateblog');
        Route::get('/deleteblog/{id}','AdminController@deleteblog');
    });
    Route::name('website.')->prefix('website')->group(function(){
        Route::get('/settings','SettingsController@appearance');
        Route::post('/settingsupdate','SettingsController@appearance_update');
        Route::post('/updatelogos','SettingsController@updatelogos');
    });
    Route::name('companies.')->prefix('companies')->group(function(){
        Route::get('/allcompanies','AdminController@allcompanies');
    });
    Route::name('products.')->prefix('products')->group(function(){
        Route::get('/allproducts','AdminController@allproducts');
        Route::get('/addnewproduct','AdminController@addnewproduct');
        Route::post('/addnewproduct','AdminController@addnewproducts');
        Route::get('/edit/{id}','AdminController@editproduct');
        Route::post('/updateproducts','AdminController@updateproducts');
        Route::get('/productcategories','AdminController@productcategories');
        Route::post('/createproductcategory','AdminController@createproductcategory');
        Route::post('/updatproductcategory','AdminController@updatproductcategory');
    });
    Route::name('reports.')->prefix('reports')->group(function(){
        Route::get('/salesreport','Reportcontroller@salesreport');
        Route::get('/broker','Reportcontroller@brokercomission');
        Route::get('/agent','Reportcontroller@agentreport');
        Route::post('/getagentreport','Reportcontroller@agentreports');
    });
    Route::name('plans.')->prefix('plans')->group(function(){
        Route::get('/allplans','AdminController@allplans');
        Route::get('/editplan/{id}','AdminController@editplan');
        Route::post('updateplan','AdminController@planupdate');
        Route::get('/addnewplan','AdminController@addnewplan');
        Route::get('/addlifeplane','AdminController@addlifeplane');
        Route::get('/planbenifits','AdminController@planbenifits');
        Route::get('/addnewplanbenifit','AdminController@addnewplanbenifit');
        Route::get('/lifeplans','AdminController@lifeplans');
        Route::get('/addlifeplanbenifit','AdminController@addlifeplanbenifit');
        Route::get('/editlifeplan/{id}','AdminController@editlifeplan');
        Route::get('/lifeplanbenifits','AdminController@lifeplanbenifits');
        Route::post('/createnewplanbenifit','AdminController@createnewplanbenifit');
        Route::post('/createlifeplanbenifit','AdminController@createlifeplanbenifit');
        Route::post('/updatelifeplanbenifit','AdminController@updatelifeplanbenifit'); 
        Route::post('/updateplanbenifit','AdminController@updateplanbenifit'); 
        Route::get('/editplanbenifit/{id}','AdminController@editplanbenifit');
        Route::get('/editlifeplanbenifit/{id}','AdminController@editlifeplanbenifit');
        Route::get('/deletelifeplanbenifit/{id}','AdminController@deletelifeplanbenifit');
        Route::get('/deleteplanbenifit/{id}','AdminController@deleteplanbenifit');
    });
    Route::name('quotation.')->prefix('quotation')->group(function(){
        Route::get('/allquotations','AdminController@allquotations');    
    });
    Route::name('contact.')->prefix('contact')->group(function(){
        Route::get('/messages','AdminController@messages');
        Route::get('/viewmessage/{id}','AdminController@viewmessage'); 
        Route::get('/deletemessage/{id}','AdminController@deletemessage');   
    });

    Route::name('users.')->prefix('users')->group(function(){
        Route::get('/allusers','AdminController@allusers');
        Route::get('/viewuser/{id}','AdminController@viewuser');
        Route::get('/addnewuser','AdminController@addnewuser');
        Route::get('/edituser/{id}','AdminController@edituser');
        Route::post('/addnewuser','AdminController@addnewusers');
        Route::post('/edituser','AdminController@updateusers');

    });
     Route::name('document.')->prefix('document')->group(function(){
        Route::get('/member-document','AdminController@memberdocument');
        Route::get('/docreport','AdminController@docreport');
        Route::get('/expiredocs','AdminController@expiredocs');

    });
    Route::name('pages.')->prefix('pages')->group(function(){
        Route::get('/travelpages/{id}','CmsController@travelpages');
        Route::post('/section_three_elements','CmsController@sectionthreeelements');
        Route::post('/updatedynamicpage','CmsController@updatedynamicpage');
        Route::post('/addnewsectionthreeelement','CmsController@addnewsectionthreeelement');
        Route::get('/dletesectiontwo/{id}','CmsController@dletesectiontwo');
        
    });


    Route::name('sales.')->prefix('sales')->group(function(){
        Route::get('/allsale','AdminController@allsale');
        Route::get('/editsale/{id}','AdminController@editsale');
        Route::post('/editsale','AdminController@editsales');
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