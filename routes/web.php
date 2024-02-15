<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StaffPermissionController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\JobController; 
use App\Http\Controllers\GoogleController; 
use App\Http\Controllers\CustomLoginController; 
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
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::POST('customlogin', [CustomLoginController::class, 'customlogin']);

Route::POST('sendsecurelink', [CustomLoginController::class, 'sendsecurelink']);

Route::get('securelogin/{id}', [CustomLoginController::class, 'securelogin']);


Route::get('step-one/{id}', [SiteController::class, 'steponetoshow']);
Route::POST('applystepone', [SiteController::class, 'applystepone']);
Route::get('step-two/{id}', [SiteController::class, 'steptwotoshow']);
Route::POST('applysteptwo', [SiteController::class, 'applysteptwo']);

Route::get('step-three/{id}', [SiteController::class, 'stepthreetoshow']);
Route::get('backonestep/{id}', [SiteController::class, 'backonestep']);
Route::POST('completeandpurchase', [SiteController::class, 'completeandpurchase']);



// Site Routes
Route::get('/', [SiteController::class, 'index']);
Route::get('/profile', [HomeController::class, 'dashboard'])->name('userprofile');
Route::get('/requests', [HomeController::class, 'requests'])->name('requests');

Route::get('/getstates/{id}', [SiteController::class, 'getstates']);

Route::get('/security-settings', [SiteController::class, 'securitysettings']);
Route::get('/policydetail/{id}', [HomeController::class, 'policydetail']);
Route::POST('changerequest', [HomeController::class, 'changerequest']);
Route::POST('refundrequests', [HomeController::class, 'refundrequests']);
Route::POST('extendpolicy', [HomeController::class, 'extendpolicy']);
Route::get('/udashboard', [SiteController::class, 'udashboard']);
Route::get('/qoutes-detail', [SiteController::class, 'qoutesdetail']);
Route::get('/super-visa-insurance', [SiteController::class, 'supervisa']);
Route::get('/travel-insurance', [SiteController::class, 'travel']);
Route::get('/single-trip-insurance', [SiteController::class, 'singletripinsurance']);
Route::get('/visitor-insurance', [SiteController::class, 'visitorinsurance']);
Route::get('/student-insurance', [SiteController::class, 'studentinsurance']);
Route::POST('/sendcompareemail', [SiteController::class, 'sendcompareemail']);
Route::get('/terms-and-condition', [SiteController::class, 'termsandcondition']);
Route::get('/term-life-insurance', [SiteController::class, 'termlifeinsurance']);


Route::POST('slideadditionaltravelers', [SiteController::class, 'checkadditionaltravelers']);





Route::get('/life-insurance', [SiteController::class, 'lifeinsurance']);
Route::get('/desability', [SiteController::class, 'desability']);
Route::get('/critical-illness', [SiteController::class, 'criticalillness']);
Route::get('/health-insurance', [SiteController::class, 'health']);
Route::get('/product', [SiteController::class, 'product']);
Route::get('/claim', [SiteController::class, 'claim']);
Route::get('/resp', [SiteController::class, 'resp']);
Route::get('/rrsp', [SiteController::class, 'rrsp']);
Route::get('/mortgage', [SiteController::class, 'mortgage']);
Route::get('/tfsa', [SiteController::class, 'tfsa']);
Route::get('/nonmedical', [SiteController::class, 'nonmedical']);
Route::get('/aboutus', [SiteController::class, 'aboutus']);
Route::get('/contactus', [SiteController::class, 'contactus']);
Route::POST('/contactus', [SiteController::class, 'contacts']);
Route::get('/privacypolicy', [SiteController::class, 'privacypolicy']);
Route::get('/blogs', [SiteController::class, 'blogs']);
Route::get('/faq', [SiteController::class, 'faq']);
Route::get('/login', [SiteController::class, 'login']);
Route::post('/expertip',[SiteController::class , 'newsletter'])->name('news_letter');
Route::get('/all/newsletters',[SiteController::class , 'viewLetters'])->name('view_news');
Route::get('/delete/letters/{id}',[SiteController::class , 'deleteLetters'])->name('deletenews');
Route::get('/blog/{id}', [SiteController::class, 'blogdetail']);
Route::get('/category/{id}', [SiteController::class, 'blogbycategory']);
Route::get('/compareplans/{id}', [SiteController::class, 'compareplans']);
Route::get('/removecomarecard/{id}', [SiteController::class, 'removecomarecard']);


Route::POST('/savecompareplans', [SiteController::class, 'savecompareplans']);
Route::POST('/apply', [SiteController::class, 'applyplan']);
Route::POST('/applyqoute', [SiteController::class, 'applyqoute']);
Route::get('/conferm', [SiteController::class, 'confermquote']);



Route::get('/product/{id}', [SiteController::class, 'productdetail']);


Route::get('/getquote/{id}', [SiteController::class, 'getquote']);



Route::POST('/quotes', [SiteController::class, 'quotes'])->name('quotes');
Route::POST('/ajaxquotes', [SiteController::class, 'ajaxquotes'])->name('ajaxquotes');





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












Route::get('/carrier-profile/reviews', function () {
    return view('carrier/carrier-profile/reviews');
});









// Hiring Maps
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
    Route::get('/changewebsite/{id}','AdminController@changewebsite');
    

    Route::name('blogs.')->prefix('blogs')->group(function(){
        Route::get('/blogcategories','AdminController@blogcategories');
        Route::post('/addnewblogcategory','AdminController@addnewblogcategory');
        Route::post('/updatblogcategory','AdminController@updatblogcategory');
        Route::get('/deleteblogcategory/{id}','AdminController@deleteblogcategory');
        Route::get('/allblogs','AdminController@allblogs');
        Route::post('/addnewblog','AdminController@createblog');
        Route::post('/updateblog','AdminController@updateblog');
        Route::get('/deleteblog/{id}','AdminController@deleteblog');
    });
    Route::name('website.')->prefix('website')->group(function(){
        Route::get('/settings','SettingsController@appearance');
        Route::get('/server-info','SettingsController@serverinfo');
        Route::get('/clearcache','SettingsController@clearcache');
        Route::POST('/clearcache','SettingsController@cacheclear');
        Route::post('/settingsupdate','SettingsController@settingsupdate');
        Route::post('/updatelogos','SettingsController@updatelogos');
        Route::post('/updatelinks','SettingsController@updatelinks');
        Route::get('/emailsettings','SettingsController@emailsettings');
        Route::post('/emailsettingsupdate','SettingsController@emailsettingsupdate');
        Route::post('/emailtemplateupdate','SettingsController@emailtemplateupdate');
        Route::get('/userpanelsettings','SettingsController@userpanelsettings');
        Route::post('/userpanelsettingupdate','SettingsController@userpanelsettingupdate');
        
    });
    Route::name('companies.')->prefix('companies')->group(function(){
        Route::get('/allcompanies','AdminController@allcompanies');

        Route::post('/deletecompany','AdminController@deletecompany');
        Route::post('/addnewcompany','AdminController@addnewcompany');
        Route::post('/updatecompanyinfo','AdminController@updatecompanyinfo');
    });
    Route::name('products.')->prefix('products')->group(function(){
        Route::get('/allproducts','AdminController@allproducts');
        Route::get('/addnewproduct','AdminController@addnewproduct');
        Route::post('/addnewproduct','AdminController@addnewproducts');
        Route::get('/edit/{id}','AdminController@editproduct');
        Route::post('/updateproducts','AdminController@updateproducts');
        Route::get('/delete/{id}','AdminController@deleteproducts');
        Route::get('/productcategories','AdminController@productcategories');
        Route::post('/createproductcategory','AdminController@createproductcategory');
        Route::post('/updatproductcategory','AdminController@updatproductcategory');
        Route::get('/deleteproductcategory/{id}','AdminController@deleteproductcategory');
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
        Route::get('/deleteplan/{id}','AdminController@deleteplan');
        Route::post('createnewplan','AdminController@createnewplan');
        Route::post('updateplan','AdminController@planupdate');
        Route::get('/addnewplan','AdminController@addnewplan');
        Route::get('/addlifeplane','AdminController@addlifeplane');
        Route::get('/planbenifits','AdminController@planbenifits');
        Route::get('/addnewplanbenifit','AdminController@addnewplanbenifit');
        Route::POST('/createplanbenifit','AdminController@createplanbenifit');
        Route::POST('/getplanattributes','AdminController@getplanattributes');
        Route::POST('/editbenifit','AdminController@editbenifit');
        Route::POST('/updatebenifit','AdminController@updatebenifit');
        Route::POST('/deletebenifit','AdminController@deletebenifit');
        Route::POST('/clonebenifit','AdminController@clonebenifit');
        Route::POST('/submitmainclonebenifit','AdminController@submitmainclonebenifit');
        Route::POST('clonebenifitmain','AdminController@clonebenifitmain');
        Route::get('/lifeplans','AdminController@lifeplans');
        Route::get('/lifeplans','AdminController@lifeplans');
        Route::get('/planbenifitscategories','AdminController@planbenifitscategories');
        Route::get('/deleteplanbenifitscategories/{id}','AdminController@deleteplanbenifitscategories');
        Route::post('addnewbenifitcategory','AdminController@addnewbenifitcategory');
        Route::post('updatbenifitcategory','AdminController@updatbenifitcategory');
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
        Route::get('/deletefeature/{id}','AdminController@deletefeature');
        Route::get('/saveplanfeature','AdminController@saveplanfeature');
        Route::get('/addFeatures','AdminController@addFeatures');
        Route::get('/getcompaniesagainstplan','AdminController@getcompaniesagainstplan');
        
    });
    Route::name('quotation.')->prefix('quotation')->group(function(){
        Route::get('/allquotations','AdminController@allquotations');
        Route::get('/deletequotations/{id}','AdminController@deletequotations');    
    });
    Route::name('contact.')->prefix('contact')->group(function(){
        Route::get('/messages','AdminController@messages');
        Route::get('/viewmessage/{id}','AdminController@viewmessage'); 
        Route::get('/deletemessage/{id}','AdminController@deletemessage');   
    });

    Route::name('users.')->prefix('users')->group(function(){
        Route::get('/allusers','AdminController@allusers');
        Route::get('/deleteuser/{id}','AdminController@deleteuser');
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
        Route::get('/deletesale/{id}','AdminController@deletesale');
        Route::get('/sendcode/{id}','AdminController@sendcode');
        Route::post('/policyconfermation','AdminController@policyconfermation');
        Route::get('/sendcodetocheck/{id}/{code}','AdminController@showdetailsbutton');
        Route::get('/changerequest','AdminController@changerequest');
        Route::get('/extendrequest','AdminController@extendrequest');
        Route::get('/refundrequest','AdminController@refundrequest');
        Route::get('/changerequest/delete/{id}','AdminController@changerequestdel');
        Route::get('/extendrequest/delete/{id}','AdminController@extendrequestdel');
        Route::get('/refundrequest/delete/{id}','AdminController@refundrequestdel');
        Route::get('/changerequest/status/{id}','AdminController@changerequeststatus');
        Route::get('/extendrequest/status/{id}','AdminController@extendrequeststatus');
        Route::get('/refundrequest/status/{id}','AdminController@refundrequeststatus');
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

        Route::get('/saveorder','CmsController@saveorder');
    });




});