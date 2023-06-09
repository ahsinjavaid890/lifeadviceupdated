<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use App\Models\wp_dh_companies;
use App\Models\wp_dh_life_plans_benefits;
use App\Models\help_articles;
use App\Models\blogs;
use App\Models\blogcategories;
use App\Models\company_info_pages;
use App\Models\wp_dh_insurance_plans_benefits;
use App\Models\wp_dh_insurance_plans;
use App\Models\wp_dh_life_plans;
use App\Models\wp_dh_products;
use App\Models\quotes;
use App\Models\sales_cards;
use App\Models\wp_dh_insurance_plans_pdfpolicy;
use App\Models\wp_dh_insurance_plans_deductibles;
use App\Models\product_categories;
use App\Models\plan_benifits_categories;
use App\Models\sales;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;
use DB;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard/index');
    }
    public function editproduct($id)
    {
        $data = wp_dh_products::where('pro_id' , $id)->first();
        $pro_fields = unserialize($data->pro_fields);
        $pro_sort  = unserialize($data->pro_sort);
        return view('admin.products.editproduct')->with(array('pro_sort'=>$pro_sort,'data'=>$data,'pro_fields'=>$pro_fields));
    }
    public function updateproducts(Request $request)
    {
        $category_id = $request->category_id;
        $pro_name = $request->pro_name;
        $pro_parent = $request->pro_parent;
        $pro_supervisa = $request->pro_supervisa;
        $pro_life = $request->pro_life;
        $pro_travel_destination = $request->destinationtype;
        $pro_url = $request->pro_url;
        $redirect_from_url = $request->redirect_from_url;

        $prod_fields = serialize($request->prod);
        $sort_orders = array();
        $i = 1;
        // print_r($request->sort);exit;
        foreach($request->sort as  $order)
        {
            $sort_orders[$i] = $order;
            $i++;
        }
        // print_r($sort_orders);exit;
        $sort_orders =  serialize($sort_orders);



        if($request->vector)
        {
            $vector = Cmf::sendimagetodirectory($request->vector);
            DB::statement("UPDATE `wp_dh_products` SET `vector`='$vector',`description`='$request->description',`category_id`='$category_id',`pro_name`='$pro_name',`pro_parent`='$pro_parent',`pro_supervisa`='$pro_supervisa',`pro_life`='$pro_life',`pro_fields`='$prod_fields',`pro_sort`='$sort_orders',`pro_travel_destination`='$pro_travel_destination',`pro_url`='$pro_url', `redirect_from_url`='$redirect_from_url' WHERE `pro_id`='$request->id'");
        }else{
            DB::statement("UPDATE `wp_dh_products` SET `description`='$request->description',`category_id`='$category_id',`pro_name`='$pro_name',`pro_parent`='$pro_parent',`pro_supervisa`='$pro_supervisa',`pro_life`='$pro_life',`pro_fields`='$prod_fields',`pro_sort`='$sort_orders',`pro_travel_destination`='$pro_travel_destination',`pro_url`='$pro_url', `redirect_from_url`='$redirect_from_url' WHERE `pro_id`='$request->id'");
        }


        
        return redirect()->back()->with('message', 'Product Updated Successfully');
    }


    public function addnewproducts(Request $request)
    {
        $category_id = $request->category_id;
        $pro_name = $request->pro_name;
        $pro_parent = $request->pro_parent;
        $pro_supervisa = $request->pro_supervisa;
        $pro_life = $request->pro_life;
        $pro_travel_destination = $request->destinationtype;
        $pro_url = $request->pro_url;
        $redirect_from_url = $request->redirect_from_url;
        $url = Cmf::shorten_url($request->pro_name);
        $prod_fields = serialize($request->prod);
        $sort_orders = array();
        $i = 1;
        foreach($request->sort as  $order)
        {
            $sort_orders[$i] = $order ;
            $i++;
        }
        $sort_orders =  serialize($sort_orders);
        if($request->vector)
        {
            $vector = Cmf::sendimagetodirectory($request->vector);
            DB::statement("INSERT INTO `wp_dh_products`(`description`,`vector`,`category_id`,`url`,`pro_name`, `pro_parent`, `pro_supervisa`, `pro_life`, `pro_fields`, `pro_sort`, `pro_travel_destination`, `pro_url`, `redirect_from_url`) VALUES ('$request->description','$vector','$category_id','$url','$pro_name','$pro_parent','$pro_supervisa','$pro_life','$prod_fields','$sort_orders','$pro_travel_destination', '$pro_url', '$redirect_from_url')");
        }else{
            DB::statement("INSERT INTO `wp_dh_products`(`description`,`category_id`,`url`,`pro_name`, `pro_parent`, `pro_supervisa`, `pro_life`, `pro_fields`, `pro_sort`, `pro_travel_destination`, `pro_url`, `redirect_from_url`) VALUES ('$request->description','$category_id','$url','$pro_name','$pro_parent','$pro_supervisa','$pro_life','$prod_fields','$sort_orders','$pro_travel_destination', '$pro_url', '$redirect_from_url')");
        }


        
        return redirect()->back()->with('message', 'Product Inserted Successfully');
    }


    public function addnewproduct()
    {
        return view('admin.products.addnewproduct');
    }
    public function productcategories()
    {
        $data = product_categories::all();
        return view('admin.products.categories')->with(array('data'=>$data));
    }
    public function createproductcategory(Request $request)
    {
        $add = new product_categories();
        $add->name = $request->name;
        $add->description = $request->description;
        $add->vector = Cmf::sendimagetodirectory($request->vector);
        $add->show_on = $request->show_on;
        $add->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function updatproductcategory(Request $request)
    {
        $add = product_categories::find($request->id);
        $add->name = $request->name;
        $add->description = $request->description;
        if($request->vector)
        {
            $add->vector = Cmf::sendimagetodirectory($request->vector);
        }
        $add->show_on = $request->show_on;
        $add->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function addnewuser()
    {
        return view('admin.users.addnewuser');
    }
    public function edituser($id)
    {
        $data = DB::table('users')->where('id' , $id)->first();
        return view('admin.users.edituser')->with(array('data'=>$data));
    }
    public function memberdocument()
    {
        return view('admin.document.member-document');
    }
    public function docreport()
    {
        return view('admin.document.docreport');
    }
    public function expiredocs()
    {
        return view('admin.document.expiredocs');
    }
    public function allusers()
    {
        $data = User::all();
        return view('admin.users.allusers')->with(array('data'=>$data));
    }
    public function viewuser($id)
    {
        $data = User::find($id);
        return view('admin.users.viewuser')->with(array('data'=>$data));
    }
    public function allquotations()
    {
        $data = quotes::all();
        return view('admin/quotations/index')->with(array('data'=>$data));
    }
    public function messages()
    {   
        $data = DB::table('contactus_messages')->orderby('created_at' , 'desc')->paginate(10);
        return view('admin/contact/messages')->with(array('data'=>$data));
    }
    public function viewmessage($id)
    {
        $data = DB::table('contactus_messages')->where('id' , $id)->first();
        return view('admin/contact/viewmessage')->with(array('data'=>$data));
    }
    public function deletemessage($id)
    {
        DB::table('contactus_messages')->where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Message Deleted Successfully');
    }

    public function allproducts()
    {
        $data = DB::table('wp_dh_products')->where('status' , 1)->orderby('pro_name' , 'desc')->get();
        return view('admin.products.index')->with(array('data'=>$data));
    }
    public function allplans()
    {
        $data = wp_dh_insurance_plans::select('wp_dh_insurance_plans.id as plan_id','wp_dh_insurance_plans.plan_name','wp_dh_insurance_plans.plan_name_for_result','wp_dh_products.pro_name','wp_dh_companies.comp_logo','wp_dh_companies.comp_name')
        ->leftJoin('wp_dh_products','wp_dh_insurance_plans.product','=','wp_dh_products.pro_id')
        ->leftJoin('wp_dh_companies','wp_dh_insurance_plans.insurance_company','=','wp_dh_companies.comp_id')->get();
        return view('admin.plans.index')->with(array('data'=>$data));
    }
    public function editplan($id)
    {
        $data = wp_dh_insurance_plans::where('id' , $id)->first();
        return view('admin.plans.edit.editplan')->with(array('data'=>$data));
    }
    public function deleteplan($id)
    {
        DB::table('wp_dh_insurance_plans')->where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Plan Deleted Successfully');
    }
    public function createnewplan(Request $request)
    {
        $input = $request->all();
        
        $cdiscountrate = $request->cdiscountrate;
        $cdiscountprice = $cdiscountrate == 1 ? $request->cdiscountprice : "0";
        $flat =  $request->iflat;
        $iflatrateprice = $flat == 1 ? $request->iflatrateprice : "0";
        $flatrate_type = $flat == 1 ? $request->flatrate_type : "";

        $updateplan = new wp_dh_insurance_plans;
        $updateplan->plan_name = $request->iplan;
        $updateplan->pre_existing_name = $request->pre_existing_name;
        $updateplan->without_pre_existing_name = $request->without_pre_existing_name;
        $updateplan->product = $request->ipname;
        $updateplan->insurance_company = $request->icname;
        $updateplan->premedical = $request->imedical;
        $updateplan->family_plan = $request->ifamily;
        $updateplan->flatrate_type = $flatrate_type;
        $updateplan->flatrate = $iflatrateprice;
        $updateplan->rate_base = $request->irateCalculation;
        $updateplan->monthly_two = $request->monthlytwo;
        $updateplan->feature = $request->ifeature;
        $updateplan->sales_tax = $request->sales_tax;
        $updateplan->smoke_rate = $request->smokeprice;
        $updateplan->smoke = $request->smoke;
        $updateplan->cdiscountrate = $cdiscountprice;
        $updateplan->directlink = $request->directlink;
        $updateplan->discount = $request->discount;
        $updateplan->discount_rate = $request->discount_rate;
        $updateplan->status = 1;
        if($request->plan_pdf_pre_existing)
        {

            $updateplan->plan_pdf_pre_existing =  Cmf::sendimagetodirectory($request->plan_pdf_pre_existing);
        }
        if($request->benifit_summary_pre_existing)
        {
            $updateplan->benifit_summary_pre_existing =  Cmf::sendimagetodirectory($request->benifit_summary_pre_existing);
        }
        if($request->plan_pdf_without_pre_existing)
        {
            $updateplan->plan_pdf_without_pre_existing =  Cmf::sendimagetodirectory($request->plan_pdf_without_pre_existing);
        }
        if($request->benifit_summary_without_pre_existing)
        {
            $updateplan->benifit_summary_without_pre_existing =  Cmf::sendimagetodirectory($request->benifit_summary_without_pre_existing);
        }
        $updateplan->created_by = Auth::user()->id;
        $updateplan->last_updated_by = Auth::user()->id;
        $updateplan->save();
        
        for($i=0;$i<count($request->ideductHash);$i++){
            $deduct = $request->ideductHash[$i];
            $ideductPer = $request->ideductPer[$i];
            $add_deductibles = new wp_dh_insurance_plans_deductibles();
            $add_deductibles->plan_id = $updateplan->id;
            $add_deductibles->deductible1 = $deduct;
            $add_deductibles->deductible2 = $ideductPer;
            $add_deductibles->created_by = Auth::user()->id;
            $add_deductibles->save();
        }
        $rateBase = $request->irateCalculation;
        if($rateBase == '3')
        {
            DB::table('wp_dh_plan_day_rate')->where('plan_id' , $updateplan->id)->delete();
            for($i=1;$i<=count($request->sr);$i++){
                 $max = $request->iratesMax1[$i-1];
                 $min = $request->iratesMin1[$i-1];
                 $s = 0;
                 foreach($request->days_rate_range1 as $dayrange){
                  $range = $dayrange;
                  $ranger = str_replace(' ', '', $range);
                  $ranges = explode('-', $ranger);
                  $min_range = $ranges[0];
                  $max_range = $ranges[1];
                  if($max_range == ''){
                      $max_range = $min_range;
                  }                 
                  $price = $input['days_rate'.$i][$s];
                  $s++;
                  
                   $insertRates1 =  "INSERT INTO wp_dh_plan_day_rate(plan_id,minage,maxage,sum_insured,min_range,max_range,range_rate,rate,created_on) VALUES('$updateplan->id','$min','$max','".$_POST['iratesSum1'][$i-1]."','$min_range','$max_range','$range','$price',now())";
                    DB::statement($insertRates1);
              }
             }
        } else {
            for($i=0;$i<count($request->iratesMin);$i++){
                $irateMin = $request->iratesMin[$i];
                $irateMax = $request->iratesMax[$i];
                $irateSum = $request->iratesSum[$i];
                $irateRate = $request->iratesRate[$i];
                $iratesRatewithout = $request->iratesRatewithout[$i];
                $cuser = Auth::user()->id;
                $time = time();
                $insertRates = "INSERT INTO wp_dh_insurance_plans_rates(plan_id, minage,maxage,sum_insured,rate_with_pre_existing,rate_without_pre_existing,created_on, created_by ) VALUES('$updateplan->id','$irateMin','$irateMax','$irateSum','$irateRate','$iratesRatewithout', '$time', '$cuser')";
                
                DB::statement($insertRates);
            }
        }
        return redirect()->back()->with('message', 'Plan Added Successfully');
    }
    public function planupdate(Request $request)
    {
        $input = $request->all();
        
        $cdiscountrate = $request->cdiscountrate;
        $cdiscountprice = $cdiscountrate == 1 ? $request->cdiscountprice : "0";
        $flat =  $request->iflat;
        $iflatrateprice = $flat == 1 ? $request->iflatrateprice : "0";
        $flatrate_type = $flat == 1 ? $request->flatrate_type : "";

        $updateplan = wp_dh_insurance_plans::find($request->id);
        $updateplan->plan_name = $request->iplan;
        $updateplan->pre_existing_name = $request->pre_existing_name;
        $updateplan->without_pre_existing_name = $request->without_pre_existing_name;
        $updateplan->product = $request->ipname;
        $updateplan->insurance_company = $request->icname;
        $updateplan->premedical = $request->imedical;
        $updateplan->family_plan = $request->ifamily;
        $updateplan->flatrate_type = $flatrate_type;
        $updateplan->flatrate = $iflatrateprice;
        $updateplan->rate_base = $request->irateCalculation;
        $updateplan->monthly_two = $request->monthlytwo;
        $updateplan->feature = $request->ifeature;
        $updateplan->sales_tax = $request->sales_tax;
        $updateplan->smoke_rate = $request->smokeprice;
        $updateplan->smoke = $request->smoke;
        $updateplan->cdiscountrate = $cdiscountprice;
        $updateplan->directlink = $request->directlink;
        $updateplan->discount = $request->discount;
        $updateplan->discount_rate = $request->discount_rate;
        if($request->plan_pdf_pre_existing)
        {
            
            $updateplan->plan_pdf_pre_existing =  Cmf::sendimagetodirectory($request->plan_pdf_pre_existing);
        }
        if($request->benifit_summary_pre_existing)
        {
            $updateplan->benifit_summary_pre_existing =  Cmf::sendimagetodirectory($request->benifit_summary_pre_existing);
        }
        if($request->plan_pdf_without_pre_existing)
        {
            $updateplan->plan_pdf_without_pre_existing =  Cmf::sendimagetodirectory($request->plan_pdf_without_pre_existing);
        }
        if($request->benifit_summary_without_pre_existing)
        {
            $updateplan->benifit_summary_without_pre_existing =  Cmf::sendimagetodirectory($request->benifit_summary_without_pre_existing);
        }
        $updateplan->created_by = Auth::user()->id;
        $updateplan->last_updated_by = Auth::user()->id;
        $updateplan->save();
        wp_dh_insurance_plans_deductibles::where('plan_id' , $request->id)->delete();
        for($i=0;$i<count($request->ideductHash);$i++){
            $deduct = $request->ideductHash[$i];
            $ideductPer = $request->ideductPer[$i];
            $add_deductibles = new wp_dh_insurance_plans_deductibles();
            $add_deductibles->plan_id = $request->id;
            $add_deductibles->deductible1 = $deduct;
            $add_deductibles->deductible2 = $ideductPer;
            $add_deductibles->created_by = Auth::user()->id;
            $add_deductibles->save();
        }

        // deleteing features
        DB::table('wp_dh_insurance_plans_features')->where('plan_id' , $request->id)->delete();
        // Inserting features
        if($request->ifeaturelist)
        {
            for($i=0;$i<count($request->ifeaturelist);$i++){
                $features = $request->ifeaturelist[$i];
                $userID = Auth::user()->id;
                $time = time();
                $insertRates="INSERT INTO wp_dh_insurance_plans_features(plan_id, features,created_on, created_by ) VALUES( '$request->id','$features','$time','$userID')";
                DB::statement($insertRates);
            }
        }
        

        $rateBase = $request->irateCalculation;

        if($rateBase == '3')
        {
            DB::table('wp_dh_plan_day_rate')->where('plan_id' , $request->id)->delete();
            for($i=1;$i<=count($request->sr);$i++){
                 $max = $request->iratesMax1[$i-1];
                 $min = $request->iratesMin1[$i-1];
                 $s = 0;
                 foreach($request->days_rate_range1 as $dayrange){
                  $range = $dayrange;
                  $ranger = str_replace(' ', '', $range);
                  $ranges = explode('-', $ranger);
                  $min_range = $ranges[0];
                  $max_range = $ranges[1];
                  if($max_range == ''){
                      $max_range = $min_range;
                  }                 
                  $price = $input['days_rate'.$i][$s];
                  $s++;
                  
                   $insertRates1 =  "INSERT INTO wp_dh_plan_day_rate(plan_id,minage,maxage,sum_insured,min_range,max_range,range_rate,rate,created_on) VALUES('$request->id','$min','$max','".$_POST['iratesSum1'][$i-1]."','$min_range','$max_range','$range','$price',now())";
                    DB::statement($insertRates1);
              }
             }
        } else {
            DB::table('wp_dh_insurance_plans_rates')->where('plan_id' , $request->id)->delete();
            for($i=0;$i<count($request->iratesMin);$i++){
                $irateMin = $request->iratesMin[$i];
                $irateMax = $request->iratesMax[$i];
                $irateSum = $request->iratesSum[$i];
                $irateRate = $request->iratesRate[$i];
                $iratesRatewithout = $request->iratesRatewithout[$i];
                $cuser = Auth::user()->id;
                $time = time();
                $insertRates = "INSERT INTO wp_dh_insurance_plans_rates(plan_id, minage,maxage,sum_insured,rate_with_pre_existing,rate_without_pre_existing,created_on, created_by ) VALUES('$request->id','$irateMin','$irateMax','$irateSum','$irateRate','$iratesRatewithout', '$time', '$cuser')";
                DB::statement($insertRates);
            }
        }
        return redirect()->back()->with('message', 'Plan Updated Successfully');
    }
    public function addlifeplane()
    {
        return view('admin.plans.addlifeplane');
    }
    public function addnewplan()
    {
        return view('admin.plans.addnewplan');
    }
    public function addnewplanbenifit()
    {
        return view('admin.plans.addnewplanbenifit');
    }
    public function planbenifits()
    {
        $data = wp_dh_insurance_plans_benefits::select(
            'wp_dh_insurance_plans_benefits.id as benifit_id',
            'wp_dh_insurance_plans.plan_name',
            'wp_dh_insurance_plans.id as plan_id',
            'wp_dh_insurance_plans.product',
            'wp_dh_products.pro_name')
        ->leftJoin('wp_dh_insurance_plans','wp_dh_insurance_plans_benefits.plan_id','=','wp_dh_insurance_plans.id')
        ->leftJoin('wp_dh_products','wp_dh_insurance_plans.product','=','wp_dh_products.pro_id')
        ->groupby('wp_dh_insurance_plans_benefits.plan_id')
        ->wherenotnull('wp_dh_insurance_plans.plan_name')
        ->get();
        return view('admin.plans.planbenifits')->with(array('data'=>$data));
    }
    public function createnewplanbenifit(Request $request)
    {
        $planId = $request->plan_id;
        for($i=0;$i<count($request->ibenefitHead);$i++){
            $bene_head = $request->ibenefitHead[$i];
            $bene_desc = $request->ibenefitDesc[$i];
            $bene_time = date('Y-M-d');
            $current_user = Auth::user()->id;
            DB::statement("INSERT INTO wp_dh_insurance_plans_benefits(plan_id, benefits_head, benefits_desc,created_on , created_by ) VALUES('$planId','$bene_head', '$bene_desc', '$bene_time' , '$current_user' )");
        }
        return redirect()->back()->with('message', 'Plan Benifit Added Successfully');
    }
    public function updateplanbenifit(Request $request)
    {
        wp_dh_insurance_plans_benefits::where('plan_id' , $request->plan_id)->delete();
        $planId = $request->plan_id;
        for($i=0;$i<count($request->ibenefitHead);$i++){
            $benifitcategory = $request->benifitcategory[$i];
            $bene_head = $request->ibenefitHead[$i];
            $bene_desc = $request->ibenefitDesc[$i];
            $bene_time = date('Y-M-d');
            $current_user = Auth::user()->id;
            DB::statement("INSERT INTO wp_dh_insurance_plans_benefits(plan_id,benifitcategory, benefits_head, benefits_desc,created_on , created_by ) VALUES('$planId','$benifitcategory','$bene_head', '$bene_desc', '$bene_time' , '$current_user' )");
        }
        return redirect()->back()->with('message', 'Plan Benifit Updated Successfully');
    }
    public function updatelifeplanbenifit(Request $request)
    {
        wp_dh_life_plans_benefits::where('plan_id' , $request->plan_id)->delete();
        $planId = $request->plan_id;
        for($i=0;$i<count($request->ibenefitHead);$i++){
            $bene_head = $request->ibenefitHead[$i];
            $bene_desc = $request->ibenefitDesc[$i];
            $bene_time = date('Y-M-d');
            $current_user = Auth::user()->id;
            DB::statement("INSERT INTO wp_dh_life_plans_benefits(plan_id, benefits_head, benefits_desc,created_on , created_by ) VALUES('$planId','$bene_head', '$bene_desc', '$bene_time' , '$current_user' )");
        }
        return redirect()->back()->with('message', 'Life Plan Benifit Updated Successfully');
    }
    public function editplanbenifit($id)
    {
        return view('admin.plans.edit.editplanbenifit')->with(array('plan_id'=>$id));
    }
    public function editlifeplanbenifit($id)
    {
        return view('admin.plans.edit.editlifeplanbenifit')->with(array('plan_id'=>$id));   
    }
    public function deletelifeplanbenifit($id)
    {
       wp_dh_insurance_plans_benefits::where('plan_id' , $id)->delete();
       return redirect()->back()->with('message', 'Plan Benifit Deleted Successfully');
    }
    public function deleteplanbenifit($id)
    {
       wp_dh_insurance_plans_benefits::where('plan_id' , $id)->delete();
       return redirect()->back()->with('message', 'Life Plan Benifit Deleted Successfully');
    }
    public function lifeplans()
    {
        $data = wp_dh_life_plans::select('wp_dh_life_plans.id as plan_id','wp_dh_life_plans.plan_name','wp_dh_products.pro_name','wp_dh_companies.comp_logo')
        ->leftJoin('wp_dh_products','wp_dh_life_plans.product','=','wp_dh_products.pro_id')
        ->leftJoin('wp_dh_companies','wp_dh_life_plans.insurance_company','=','wp_dh_companies.comp_id')->get();
        return view('admin.plans.lifeplans')->with(array('data'=>$data));
    }
    public function planbenifitscategories()
    {
        $data = plan_benifits_categories::orderby('id' , 'desc')->get();
        return view('admin.plans.planbenifitscategories')->with(array('data'=>$data));
    }
    public function addnewbenifitcategory(Request $request)
    {
        $add = new plan_benifits_categories();
        $add->name = $request->name;
        $add->description = $request->description;
        $add->icon = Cmf::sendimagetodirectory($request->icon);
        $add->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function updatbenifitcategory(Request $request)
    {
        $add = plan_benifits_categories::find($request->id);
        $add->name = $request->name;
        $add->description = $request->description;
        $add->order = $request->order;
        if($request->icon)
        {
            $add->icon = Cmf::sendimagetodirectory($request->icon);
        }
        $add->save();
        return redirect()->back()->with('message', 'Category Updated Successfully');
    }

    public function addlifeplanbenifit()
    {
        return view('admin.plans.addlifeplanbenifit');
    }
    public function createlifeplanbenifit(Request $request)
    {
        $planId = $request->plan_id;
        for($i=0;$i<count($request->ibenefitHead);$i++){
            $bene_head = $request->ibenefitHead[$i];
            $bene_desc = $request->ibenefitDesc[$i];
            $bene_time = date('Y-M-d');
            $current_user = Auth::user()->id;
            DB::statement("INSERT INTO wp_dh_life_plans_benefits(plan_id, benefits_head, benefits_desc,created_on , created_by ) VALUES('$planId','$bene_head', '$bene_desc', '$bene_time' , '$current_user' )");
        }
        return redirect()->back()->with('message', 'Plan Benifit Added Successfully');
    }
    public function editlifeplan($id)
    {
        return view('admin.plans.edit.editlifeplan')->with(array('plan_id'=>$id));
    }
    public function lifeplanbenifits()
    {
        $data = wp_dh_life_plans_benefits::select(
            'wp_dh_life_plans_benefits.id as benifit_id',
            'wp_dh_life_plans.plan_name',
            'wp_dh_life_plans.id as plan_id',
            'wp_dh_life_plans.product',
            'wp_dh_products.pro_name')
        ->leftJoin('wp_dh_life_plans','wp_dh_life_plans_benefits.plan_id','=','wp_dh_life_plans.id')
        ->leftJoin('wp_dh_products','wp_dh_life_plans.product','=','wp_dh_products.pro_id')
        ->groupby('wp_dh_life_plans_benefits.plan_id')
        ->wherenotnull('wp_dh_life_plans.plan_name')
        ->get();
        return view('admin.plans.lifeplanbenifits')->with(array('data'=>$data));
    }
    public function profile()
    {
        return view('admin/profile/index');
    }

    public function updateusers(Request $request)
    {
        

        $update = User::find($request->id);
        $update->name = $request->fname.' '.$request->lname;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->dob = $request->dob; 
        $update->about_me = $request->about_me;
        $update->username = $request->username;
        $update->password = Hash::make($request->password);
        if($request->logo)
        {
            $update->logo = Cmf::sendimagetodirectory($request->logo);
        }
        $update->address = $request->address;
        $update->province = $request->province;
        $update->city = $request->city;
        $update->country = $request->country;
        $update->postal = $request->postal;
        $update->user_type = $request->user_type;
        $update->parent_id = $request->parent_id;
        $update->status = $request->status;
        $update->mg_capability = $request->mg_capability;
        $update->fiscal_year = $request->fiscal_year;
        $update->save();
        return redirect()->back()->with('message', 'User Updated Successfully');
    }
    public function addnewusers(Request $request)
    {
        

        $update = new User;
        $update->name = $request->fname.' '.$request->lname;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->dob = $request->dob; 
        $update->about_me = $request->about_me;
        $update->username = $request->username;
        if($request->password){

            $update->password = Hash::make($request->password);
        }
        if($request->logo)
        {
            $update->logo = Cmf::sendimagetodirectory($request->logo);
        }
        $update->address = $request->address;
        $update->province = $request->province;
        $update->city = $request->city;
        $update->country = $request->country;
        $update->postal = $request->postal;
        $update->user_type = $request->user_type;
        $update->parent_id = $request->parent_id;
        $update->status = $request->status;
        $update->mg_capability = $request->mg_capability;
        $update->fiscal_year = $request->fiscal_year;
        $update->save();
        return redirect()->back()->with('message', 'User Updated Successfully');
    }
    public function updateuserprofile(Request $request)
    {
        $update = User::find(Auth::user()->id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phonenumber = $request->phonenumber;
        $update->about_me = $request->about;
        if($request->profileimage)
        {
            $update->profileimage = Cmf::sendimagetodirectory($request->profileimage);
        }
        $update->save();
        return redirect()->back()->with('message', 'Your Profile Updated Successfully');
    }
    public function updateusersecurity(Request $request)
    {
        $this->validate($request, [
        'oldpassword' => 'required',
        'newpassword' => 'required',
        ]);
        if($request->newpassword == $request->password_confirmed){
        $hashedPassword = Auth::user()->password;
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
              $users =User::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
              session()->flash('message','password updated successfully');
              return redirect()->back();
            }
            else{
                  session()->flash('errorsecurity','New password can not be the old password!');
                  return redirect()->back();
                }
           }
          else{
               session()->flash('errorsecurity','Old password Doesnt matched ');
               return redirect()->back();
             }
        }else{
            session()->flash('errorsecurity','Repeat password Doesnt matched With New Password');
            return redirect()->back();
        }
    }
    public function allsale()
    {
        $data = DB::table('sales')->orderby('id' , 'DESC')->paginate(10);
        return view('admin.sales.allsale')->with(array('data'=>$data));
    }
    public function editsale($id)
    {
        $data = DB::table('sales')->where('sales_id' , $id)->first();
        return view('admin.sales.editsale')->with(array('data'=>$data));
    }
    public function editsales(Request $request)
    {
        $update = array('fname' => $request->fname, 'lname' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'dob' => $request->dob, 'address' => $request->address, 'address_2' => $request->address_2, 'province' => $request->province, 'city' => $request->city, 'postcode' => $request->postcode, 'country' => $request->country, 'home_address' => $request->home_address, 'home_address_2' => $request->home_address_2, 'home_province' => $request->home_province, 'home_city' => $request->home_city, 'home_zip' => $request->home_zip, 'home_country' => $request->home_country);
        DB::table('sales')->where('sales_id' , $request->id)->update($update);
        return redirect()->back()->with('message', 'Sales Updated Successfully');
    }

    public function policyconfermation(Request $request)
    {
        if($request->policydocument)
        {
            $document = Cmf::sendimagetodirectory($request->policydocument);
            $update = array('policy_number' => $request->policy_number, 'policy_status' => $request->policy_status, 'policydocument' => $document);
        }else{
            $update = array('policy_number' => $request->policy_number, 'policy_status' => $request->policy_status);
        }
        DB::table('sales')->where('id' , $request->id)->update($update);
        return redirect()->back()->with('message', 'Sales Updated Successfully');
    }

    public function viewsale($id)
    {
        DB::table('sales')->where('id' , $id)->update(array('newstatus' =>'old'));
        $data = DB::table('sales')->where('id' , $id)->first();
        $company = DB::table('wp_dh_companies')->where('comp_id' , $data->comp_id)->first();
        return view('admin.sales.viewsale')->with(array('data'=>$data,'company'=>$company));
    }
    public function sendcode($id)
    {
        $rand = rand(1234 , 4321);
        $data = sales_cards::where('sale_id' , $id)->first();
        $addcode = sales_cards::find($data->id);
        $addcode->code = $rand;
        $addcode->save();
        $subject = 'Verfication Code For Customer Card Information';
        Mail::send('email.sendcode', ['code' => $rand], function($message) use($subject){
              $message->to('admin@lifeadvice.ca');
              $message->subject($subject);
        });
    }
    public function showdetailsbutton($id , $code)
    {
        $data = sales_cards::where('sale_id' , $id)->first();
        $card = sales_cards::find($data->id);
        if($code == $card->code)
        {
            echo '<h2 style=" text-align: center; color: red; font-size: 18px; ">Please Coppy Card Details POP Will Disapper after 30 Second and Page Load Automatically</h2><table class="table table-borderd">
                <tbody>
                    <tr>
                        <td bgcolor="#F6F6F6"><strong>Card Holder Name:</strong></td>
                        <td>
                            '.$card->card_name.'
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#F6F6F6"><strong>Card Number:</strong></td>
                        <td>
                            '.$card->card_number.'
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#F6F6F6"><strong>Card CVC:</strong></td>
                        <td>
                            '.$card->card_cvc.'
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#F6F6F6"><strong>Card Month:</strong></td>
                        <td>
                            '.$card->card_month.'
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#F6F6F6"><strong>Card Year:</strong></td>
                        <td>
                            '.$card->card_year.'
                        </td>
                    </tr>
                </tbody>
               
            </table>';
        }else{
            echo 1;
        }
        
    }
    public function allcompanies()
    {
        $data = DB::table('wp_dh_companies')->get();
        return view('admin.companies.all')->with(array('data'=>$data));
    }



    public function blogcategories()
    {
        $data = DB::table('blogcategories')->get();
        return view('admin.blogs.categories')->with(array('data'=>$data));
    }
    public function deleteblogcategory($id)
    {
        blogs::where('category_id' , $id)->delete();
        blogcategories::where('id' ,$id)->delete();
        return redirect()->back()->with('message', 'Blog Category Deleted Successfully');
    }
    public function allblogs()
    {
        $data = DB::table('blogs')->get();
        $categories = blogcategories::all();
        return view('admin.blogs.addblog')->with(array('data'=>$data,'categories'=>$categories));
    }
    public function addnewblogcategory(Request $request)
    {
        $saveblog = new blogcategories;
        $saveblog->name = $request->name;
        $saveblog->status = 1;
        $saveblog->url = Cmf::shorten_url($request->name);
        $saveblog->save();
        return redirect()->back()->with('message', 'Blog Category Successfully Inserted');
        
    }
    public function updatblogcategory(Request $request)
    {
        $saveblog = blogcategories::find($request->id);
        $saveblog->name = $request->name;
        $saveblog->status = $request->status;
        $saveblog->url = Cmf::shorten_url($request->name);
        $saveblog->save();
        return redirect()->back()->with('message', 'Blog Category Updated Successfully');
    }
    public function createblog(Request $request)
    {
        $add = new blogs();
        $add->category_id = $request->category_id;
        $add->title = $request->title;
        $add->url = Cmf::shorten_url($request->title);
        $add->content = $request->content;
        $add->image = Cmf::sendimagetodirectory($request->image);
        $add->save();
        return redirect()->back()->with('message', 'Blog Added Successfully');        
    }
    public function updateblog(Request $request)
    {
        $add = blogs::find($request->id);
        $add->category_id = $request->category_id;
        $add->title = $request->title;
        $add->url = Cmf::shorten_url($request->title);
        $add->content = $request->content;
        if($request->image)
        {
            $add->image = Cmf::sendimagetodirectory($request->image);
        }
        $add->save();
        return redirect()->back()->with('message', 'Blog Updated Successfully');        
    }
    public function deleteblog($id)
    {
        blogs::where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Blog Deleted Successfully');
    }
    public function websitesettings()
    {
        return view('admin.website.settings');
    }
    public function updatecompanyinfo(Request $request)
    {
        if($request->claimform)
        {
            $claimform = Cmf::sendimagetodirectory($request->claimform);
            $update = array('claimform' => $claimform,'comp_name' => $request->name);
        }else{
            $update = array('comp_name' => $request->name);
        }
        DB::table('wp_dh_companies')->where('comp_id' , $request->id)->update($update);
        return redirect()->back()->with('message', 'Company Updated Successfully');
    }
}
