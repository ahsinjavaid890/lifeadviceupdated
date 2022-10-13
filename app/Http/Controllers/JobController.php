<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Cmf;
use App\Models\companies;
use App\Models\jot_attributes;
use App\Models\jobs;
use App\Models\payout_schedules;
use App\Models\advance_pay_options;
use App\Models\hiring_templates;
use App\Models\linktemplatewithjobs;
use App\Models\company_emails;
use App\Models\equipment_jobs;
use App\Models\job_equipments;
use App\Models\jobsubmissionsrequests;
use App\Models\advance_equipment_values;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Validator;
class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function hiringtemplates()
    {
        $data = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->get();
        return view('carrier/jobs/hiringtemplates')->with(array('data'=>$data));
    }
    public function deletehiringtemplate($id)
    {
        $checkjob = linktemplatewithjobs::where('template_id' , $id);
        linktemplatewithjobs::where('template_id' , $id)->delete();
        hiring_templates::where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Template Deleted Successfully');
    }
    public function allcarrierjobs()
    {
        $data = companies::where('company_link' , Cmf::getusercompany()->id)->get()->first();
        $jobs = jobsubmissionsrequests::select('jobs.url','jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('company_id' , Cmf::getusercompany()->id)->orderby('jobs.id' , 'desc')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('carrier/jobs/index')->with(array('jobs'=>$jobs));
    }
    public function searchjobs(Request $request)
    {
        $input = $request->all();
        $q = jobsubmissionsrequests::select('jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status');
        if ($input['keyword'])
        {
            $q->where('jobs.job_tittle','like', '%' . $input['keyword'] . '%' );
        }
        if ($input['freighttype'])
        {
            $q->where('jobs.freight_type','like', '%' . $input['freighttype'] . '%' );
        }
        $q->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id');
        $q->where('company_id' , Cmf::getusercompany()->id);
        $jobs = $q->orderby('jobs.id' , 'desc')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('carrier/jobs/searchjobs')->with(array('jobs'=>$jobs));
    }
    public function addnewjob()
    {
        $check = jobs::where('company_id' , Cmf::getusercompany()->id)->where('step' ,'!=' ,5);
        if($check->count() > 0)
        {
            $job = $check->get()->first();
        }else{
            $addjob = new jobs();
            $addjob->company_id = Cmf::getusercompany()->id;
            $addjob->step = 0;
            $addjob->save();
            $job = $addjob;
        }
        $template = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->where('is_template' , 1)->get();  
        $attribute = jot_attributes::all();
        $link = linktemplatewithjobs::where('job_id' , $job->id);
        if($link->count() > 0)
        {
            
        }
        return view('carrier/jobs/add-new')->with(array('attribute'=>$attribute,'job'=>$job,'template'=>$template));
    }
    public function jobedit($id)
    {
        $job = jobs::find($id);
        $template = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->where('is_template' , 1)->get();  
        $attribute = jot_attributes::all();
        return view('carrier/jobs/add-new')->with(array('attribute'=>$attribute,'job'=>$job,'template'=>$template));
    }
    public function carrierjobdetail($id)
    {
        $job = jobs::find($id);
        $template = hiring_templates::where('company_id' , Cmf::getusercompany()->id)->where('is_template' , 1)->get();  
        $attribute = jot_attributes::all();
        return view('carrier/jobs/jobdetail')->with(array('attribute'=>$attribute,'job'=>$job,'template'=>$template));
    }
    public function deletejob($id)
    {
        advance_equipment_values::where('job_id' , $id)->delete();
        advance_pay_options::where('job_id' , $id)->delete();
        equipment_jobs::where('job_id' , $id)->delete();
        jobsubmissionsrequests::where('job_id' , $id)->delete();
        job_equipments::where('job_id' , $id)->delete();
        linktemplatewithjobs::where('job_id' , $id)->delete();
        jobs::where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Job Deleted Successfully');
    }
    public function publishedjobstatus()
    {
        return view('carrier/jobs/published');
    }
    public function submitone(Request $request)
    {
        $this->validate($request, [
            'how_often_will_driver_get_home' => 'required',
            'custom_home_time' => 'required',
            'hiring_area' => 'required',
            'operating_area' => 'required',
            'job_tittle' => 'required',
            'driver_type' => 'required',
            'home_time' => 'required',
            'freight_type' => 'required',
            'dedicated_account' => 'required',
            'avg_weekly_mile' => 'required',
            'compensation' => 'required',
            'duty_time' => 'required',
            'compensation_ammount' => 'required',
            'top_10_of_earners_are_makking' => 'required',
            'avgerage_weekly_pay' => 'required',
            'avgerage_yearly_pay' => 'required',
            'sign_on_bonus' => 'required',
            'sign_on_bonus_amount' => 'required',
            'freight_type_equipment' => 'required',
            'drop_and_hook' => 'required',
            'live_load' => 'required',
            'driver_load' => 'required',
        ]);
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->how_often_will_driver_get_home = $request->how_often_will_driver_get_home;
        $addnewjob->custom_home_time = $request->custom_home_time;
        $addnewjob->job_tittle = $request->job_tittle;
        $addnewjob->hiring_area = $request->hiring_area;
        $addnewjob->operating_area = $request->operating_area;
        $addnewjob->url = Cmf::shorten_url($request->job_tittle);
        $addnewjob->driver_type = $request->driver_type;
        $addnewjob->home_time = $request->home_time;
        $addnewjob->freight_type = $request->freight_type;
        $addnewjob->dedicated_account = $request->dedicated_account;
        $addnewjob->avg_weekly_mile = $request->avg_weekly_mile;
        $addnewjob->compensation = $request->compensation;
        $addnewjob->duty_time = $request->duty_time;
        if($request->benifits)
        {
            $addnewjob->benifits = implode(',', $request->benifits);
        }
        if($request->custombenifits)
        {
            $addnewjob->custombenifits = implode(',', $request->custombenifits);
        }
        $addnewjob->compensation_ammount = $request->compensation_ammount;
        $addnewjob->top_10_of_earners_are_makking = $request->top_10_of_earners_are_makking;
        $addnewjob->avgerage_weekly_pay = $request->avgerage_weekly_pay;
        $addnewjob->avgerage_yearly_pay = $request->avgerage_yearly_pay;
        $addnewjob->sign_on_bonus = $request->sign_on_bonus;
        $addnewjob->sign_on_bonus_amount = $request->sign_on_bonus_amount;
        $addnewjob->freight_type_equipment = $request->freight_type_equipment;
        $addnewjob->drop_and_hook = $request->drop_and_hook;
        $addnewjob->live_load = $request->live_load;
        $addnewjob->driver_load = $request->driver_load;
        $addnewjob->step = 1;
        $addnewjob->save();
        if($request->hiring_template)
        {
            $checklinktemplete = linktemplatewithjobs::where('job_id' , $request->job_id);
            if($checklinktemplete->count() == 0)
            {
                $linktemplate = new linktemplatewithjobs();
                $linktemplate->job_id = $request->job_id;
                $linktemplate->template_id = $request->hiring_template;
                $linktemplate->save();
            }else{
                $linktemplate = linktemplatewithjobs::find($checklinktemplete->first()->id);
                $linktemplate->template_id = $request->hiring_template;
                $linktemplate->save();
            }
        }
        return redirect()->back()->with('message', 'Added Successfully');
    }

    public function addnewcompanyemal(Request $request)
    {
        $new = new company_emails();
        $new->company_id  = Cmf::getusercompany()->id;
        $new->email  = $request->email;
        $new->save();
        return redirect()->back()->with('message', 'Email Added Successfully');
    }
    public function routingandtrans(Request $request)
    {
        $addnewjob = jobs::find($request->job_id);
        if($request->emails)
        {
            $addnewjob->emails_send = implode(',', $request->emails);
        }
        $addnewjob->step = 3;
        $addnewjob->save();
        return redirect()->back()->with('message', 'Email Added Successfully');
    }

    public function subscription(Request $request)
    {
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->step = 4;
        $addnewjob->save();
        return redirect()->back()->with('message', 'Email Added Successfully');
    }
    
    public function jobsubmitlast(Request $request)
    {
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->step = 5;
        $addnewjob->save();
        $check = jobsubmissionsrequests::where('job_id' , $request->job_id);
        if($check->count() == 0)
        {
            $submit = new jobsubmissionsrequests();
            $submit->job_id = $request->job_id;
            $submit->status = 'pending';
            $submit->counter = 1;
            $submit->save();
        }
        return view('carrier/jobs/jobsubmit');
    }
    public function adddadvancedetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'primary_running_lanes' => 'required',
            'avg_length_of_haul' => 'required',
            'type_of_fuel_card' => 'required',
            'tolls' => 'required',
            'hour_dispatch' => 'required',
            'ez_Pass' => 'required',
            'pre_pass' => 'required',
            'non_forced_dispatch' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        }
        $addnewjob = jobs::find($request->job_id);
        $addnewjob->primary_running_lanes = $request->primary_running_lanes;
        $addnewjob->avg_length_of_haul = $request->avg_length_of_haul;
        $addnewjob->type_of_fuel_card = $request->type_of_fuel_card;
        $addnewjob->tolls = $request->tolls;
        $addnewjob->hour_dispatch = $request->hour_dispatch;
        $addnewjob->ez_Pass = $request->ez_Pass;
        $addnewjob->pre_pass = $request->pre_pass;
        $addnewjob->non_forced_dispatch = $request->non_forced_dispatch;
        $addnewjob->save();

    }
    public function addpayoutschedule(Request $request)
    {
        extract($_POST);
        foreach($whenpayout as $k => $v){
            $data = "";
            foreach($_POST as $key => $val){
                if($key != '_token')
                {
                    if(!in_array($key, array('whenpayout','ammountpayout')) && !is_numeric($key)){
                        if(empty($data)){
                            $data .= " $key='$val' ";
                        }else{
                            $data .= ", $key='$val' ";
                        }
                    }
                }
                
            }
            $data .= ",'{$whenpayout[$k]}' ";
            $data .= ",'{$ammountpayout[$k]}' ";
            DB::statement("INSERT INTO `payout_schedules` (`job_id`, `when`, `ammount`)VALUES (2 $data)");
        }
    }

    public function addadvancepayoutdetails(Request $request)
    {
        $check = advance_pay_options::where('job_id' , $request->job_id);

        if($check->count() > 0)
        {
            $adv_pay_out = advance_pay_options::find($check->first()->id);
        }else{
            $adv_pay_out = new advance_pay_options();
        }    
        $adv_pay_out->job_id = $request->job_id;
        $adv_pay_out->breakdown_pay = $request->breakdown_pay;
        $adv_pay_out->cash_advance = $request->cash_advance;
        $adv_pay_out->detention_pay = $request->detention_pay;
        $adv_pay_out->pays_amount = $request->pays_amount;
        $adv_pay_out->are_drivers_paid_the_same_for_loaded_and_empty = $request->are_drivers_paid_the_same_for_loaded_and_empty;
        $adv_pay_out->miles_cpn_chat = $request->miles_cpn_chat;
        $adv_pay_out->end_of_pay_week = $request->end_of_pay_week;
        $adv_pay_out->hazmat_pay = $request->hazmat_pay;
        $adv_pay_out->hazmat_pay_options_field = $request->hazmat_pay_options_field;
        $adv_pay_out->holida_pay = $request->holida_pay;
        $adv_pay_out->how_are_drivers_paid = $request->how_are_drivers_paid;
        $adv_pay_out->how_are_drivers_paid_other_field = $request->how_are_drivers_paid_other_field;
        $adv_pay_out->layover_pay = $request->layover_pay;
        $adv_pay_out->layover_pay_amount = $request->layover_pay_amount;
        $adv_pay_out->minimum_pay_guarantee = $request->minimum_pay_guarantee;
        $adv_pay_out->minimum_pay_guarantee_amount = $request->minimum_pay_guarantee_amount;
        $adv_pay_out->multi_stop_pay = $request->multi_stop_pay;
        $adv_pay_out->multi_stop_pay_amount = $request->multi_stop_pay_amount;
        $adv_pay_out->paid_on = $request->paid_on;
        $adv_pay_out->paid_on_field = $request->paid_on_field;
        $adv_pay_out->new_york_city_pay = $request->new_york_city_pay;
        $adv_pay_out->new_york_city_pay_amount = $request->new_york_city_pay_amount;
        $adv_pay_out->northeast_pay = $request->northeast_pay;
        $adv_pay_out->northeast_pay_amount = $request->northeast_pay_amount;
        $adv_pay_out->prientation_pay = $request->prientation_pay;
        $adv_pay_out->prientation_pay_amount = $request->prientation_pay_amount;
        $adv_pay_out->pay_increase = $request->pay_increase;
        $adv_pay_out->per_diem = $request->per_diem;
        $adv_pay_out->per_diem_amount = $request->per_diem_amount;
        $adv_pay_out->referral_bonus = $request->referral_bonus;
        $adv_pay_out->safety_bonus = $request->safety_bonus;
        $adv_pay_out->start_of_pay_week = $request->start_of_pay_week;
        $adv_pay_out->type_of_driver_pay = $request->type_of_driver_pay;
        $adv_pay_out->unloading_pay = $request->unloading_pay;
        $adv_pay_out->vacation_pay = $request->vacation_pay;
        $adv_pay_out->when_are_drivers_paid =  $request->when_are_drivers_paid;
        $adv_pay_out->save();
    }

    public function advanceequipment(Request $request)
    {
        $check = advance_equipment_values::where('job_id' , $request->job_id);

        if($check->count() > 0)
        {
            $adv_pay_out = advance_equipment_values::find($check->first()->id);
        }else{
            $adv_pay_out = new advance_equipment_values();
        }    
        $adv_pay_out->job_id = $request->job_id;
        $adv_pay_out->engine = $request->engine;
        $adv_pay_out->transmission_type = $request->transmission_type;
        $adv_pay_out->truck_speed = $request->truck_speed;
        $adv_pay_out->apu_epu = $request->apu_epu;
        $adv_pay_out->bunks = $request->bunks;
        $adv_pay_out->camera_orientation = $request->camera_orientation;
        $adv_pay_out->camera_recording = $request->camera_recording;
        $adv_pay_out->can_truck_taken_home = $request->can_truck_taken_home;
        $adv_pay_out->truck_permanently_assigned = $request->truck_permanently_assigned;
        $adv_pay_out->onboard_navigation = $request->onboard_navigation;
        $adv_pay_out->onboard_communication = $request->onboard_communication;
        $adv_pay_out->directtv = $request->directtv;
        $adv_pay_out->siriusxm = $request->siriusxm;
        $adv_pay_out->inverter = $request->inverter;
        $adv_pay_out->refrigerator = $request->refrigerator;
        $adv_pay_out->microwave = $request->microwave;
        $adv_pay_out->collision_mitigation = $request->collision_mitigation;
        $adv_pay_out->save();
    }

    public function hiringreq(Request $request)
    {
        if($request->hirringid)
        {
            if($request->template_name)
            {
                $template = new hiring_templates();
            }else{
                $template = hiring_templates::find($request->hirringid);
            }
        }else{
            $template = new hiring_templates();
        }    
        $template->company_id = Cmf::getusercompany()->id;
        $template->minimum_age = $request->minimum_age;
        $template->minimum_age_field =$request->minimum_age_field;
        $template->minimum_expereince =$request->minimum_expereince;
        $template->additional_notes_about_expereince =$request->additional_notes_about_expereince;
        $template->no_more_than =$request->no_more_than;
        $template->moving_violations =$request->moving_violations;
        $template->additionl_notes_about_moving_voliations =$request->additionl_notes_about_moving_voliations;
        $template->no_more_than_major_voilations =$request->no_more_than_major_voilations;
        $template->major_moving_voilations =$request->major_moving_voilations;
        $template->additionl_notes_about_moving_major_voliations =$request->additionl_notes_about_moving_major_voliations;
        $template->license_suspensions =$request->license_suspensions;
        $template->license_suspensions_field =$request->license_suspensions_field;
        $template->dot_no_more_than =$request->dot_no_more_than;
        $template->dot_moving_voilations =$request->dot_moving_voilations;
        $template->preventable_accidents_withn_the_last =$request->preventable_accidents_withn_the_last;
        $template->reason_of_suspensions =$request->reason_of_suspensions;
        $template->no_more_than_incidents =$request->no_more_than_incidents;
        $template->moving_voilations_incidents =$request->moving_voilations_incidents;
        $template->ticket_incedent =$request->ticket_incedent;
        $template->specify_in_a_free_form_fill =$request->specify_in_a_free_form_fill;
        $template->maximum_jobs_no_more_than =$request->maximum_jobs_no_more_than;
        $template->maximum_jobs_moving_voilations =$request->maximum_jobs_moving_voilations;
        $template->unemployment =$request->unemployment;
        $template->maximum_jobs_additional_infomation =$request->maximum_jobs_additional_infomation;
        $template->felony_convictions =$request->felony_convictions;
        $template->misdemeanors =$request->misdemeanors;
        $template->drug_duis =$request->drug_duis;
        $template->type_of_drug_test =$request->type_of_drug_test;
        $template->accepting_sap_drivers =$request->accepting_sap_drivers;
        $template->additional_information =$request->additional_information;
        $template->physical =$request->physical;
        $template->accomodate_an_automatic_restriction =$request->accomodate_an_automatic_restriction;
        $template->camera_installed =$request->camera_installed;
        $template->camera_type =$request->camera_type;
        $template->camera_are =$request->camera_are;
        $template->camera_facing =$request->camera_facing;
        $template->camera_recording =$request->camera_recording;
        if($request->requiredendorsements)
        {
            $template->requiredendorsements = implode(',', $request->requiredendorsements);
        }
        if($request->template_name)
        {
            $template->name = $request->template_name;
            $template->is_template = 1;
        }else{
            if($request->hirringid)
            {

            }
            else
            {
                $template->is_template = 0;
            } 
        }
        $template->save();

        $addnewjob = jobs::find($request->job_id);
        $addnewjob->step = 2;
        $addnewjob->save();



        $checklinktemplete = linktemplatewithjobs::where('job_id' , $request->job_id);
        if($checklinktemplete->count() == 0)
        {
            $linktemplate = new linktemplatewithjobs();
            $linktemplate->job_id = $request->job_id;
            $linktemplate->template_id = $template->id;
            $linktemplate->save();
        }else{
            $linktemplate = linktemplatewithjobs::find($checklinktemplete->first()->id);
            $linktemplate->template_id = $template->id;
            $linktemplate->save();
        }        
        return redirect()->back()->with('message', 'Added Successfully');
    }
}
