<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Cmf;
use App\Models\User;
use App\Models\companies;
use App\Models\help_categories;
use App\Models\help_articles;
use App\Models\company_info_pages;
use App\Models\jobsubmissionsrequests;
use App\Models\linktemplatewithjobs;
use App\Models\jobs;
use App\Models\education_categories;
use App\Models\education_articles;
use App\Models\maplocations;
use App\Models\hiring_maps;
use App\Models\recuring_tips;
use Validator;
use Auth;
use DB;
use Stripe;
class CarrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = companies::where('company_link' , Cmf::getusercompany()->id)->get()->first();
        $recuringtips = recuring_tips::orderby('id' , 'desc')->limit(5)->get();
        $jobs = jobsubmissionsrequests::select('jobs.id as job_id','jobs.job_tittle','jobs.compensation','jobs.driver_type','jobs.duty_time','jobs.freight_type','jobs.home_time','jobs.avgerage_weekly_pay','jobsubmissionsrequests.status as job_status')->leftJoin('jobs','jobs.id','=','jobsubmissionsrequests.job_id')->where('company_id' , Cmf::getusercompany()->id)->orderby('jobs.id' , 'desc')->get();
        foreach ($jobs as $index => $job) {
            $job->hirring = linktemplatewithjobs::select('linktemplatewithjobs.job_id','hiring_templates.minimum_expereince')->leftJoin('hiring_templates','hiring_templates.id','=','linktemplatewithjobs.template_id')->where('linktemplatewithjobs.job_id' , $job->job_id)->first();
        }
        return view('carrier/dashboard')->with(array('data'=>$data,'jobs'=>$jobs,'recuringtips'=>$recuringtips));
    }
    public function carrierprofile()
    {
        $data = companies::where('user_id' , Auth::user()->id)->get()->first();
        return view('carrier/carrier-profile/index')->with(array('data'=>$data));
    }
    public function updatecarrierlogo(Request $request)
    {
        $company = companies::find($request->id);
        $company->logo = Cmf::sendimagetodirectory($request->company_logo);
        $company->save();
        return redirect()->back()->with('message', 'Logo Updated Successfully');
    }
    public function changecoverphoto(Request $request)
    {
        $company = companies::find($request->id);
        $company->banner = Cmf::sendimagetodirectory($request->coverphoto);
        $company->save();
        return redirect()->back()->with('message', 'Banner Updated Successfully');
    }
    public function updatecarrierprofile(Request $request)
    {
        $company = companies::find($request->id);
        $company->email = $request->email;
        $company->contact_number = $request->contact_number;
        $company->address = $request->address;
        $company->website_link = $request->website_link;
        $company->aboutus = $request->aboutus;
        $company->google_link = $request->google_link;
        $company->facebook_link = $request->facebook_link;
        $company->save();
        return redirect()->back()->with('message', 'Carrier Profile Updated Successfully');
    }
    public function profilesettings()
    {
        return view('carrier/profile-settings/index');
    }
    public function updateprofilepicture(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->profile_picture = Cmf::sendimagetodirectory($request->profile_avatar);
        $user->save();
        return redirect()->back()->with('message', 'Profile Image Updated Successfully');
    }

    public function updateuserprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->save();
        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
    public function securetycredentials(Request $request)
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
            session()->flash('errorsecurity','Repeat password doesn’t match');
            return redirect()->back();
        }
    }
    public function addnewmap()
    {
        return view('carrier/hiring-maps/add-new');
    }
    public function addnewhiringmap(Request $request)
    {
        $map = new hiring_maps();
        $map->id = $request->map_id;
        $map->company_id = Cmf::getusercompany()->id;
        $map->tittle = $request->map_tittle;
        $map->type = $request->map_type;
        $map->status = 1;
        if($request->logo)
        {
            $map->logo = Cmf::sendimagetodirectory($request->logo);
        }
        if($request->state)
        {
            $map->state = implode(',', $request->state);
        }
        if($request->city)
        {
            $map->city = implode(',', $request->city);
        }
        if($request->zipcode)
        {
            $map->zipcode = implode(',', $request->zipcode);
        }
        $map->save();
        return redirect()->back()->with('message', 'Map Added Successfully');
    }
    public function updatehiringmap(Request $request)
    {
        $map = hiring_maps::find($request->map_id);
        $map->id = $request->map_id;
        $map->company_id = Cmf::getusercompany()->id;
        $map->tittle = $request->map_tittle;
        $map->type = $request->map_type;
        $map->status = 1;
        if($request->logo)
        {
            $map->logo = Cmf::sendimagetodirectory($request->logo);
        }
        if($request->state)
        {
            $map->state = implode(',', $request->state);
        }
        if($request->city)
        {
            $map->city = implode(',', $request->city);
        }
        if($request->zipcode)
        {
            $map->zipcode = implode(',', $request->zipcode);
        }
        $map->save();
        return redirect()->back()->with('message', 'Map Added Successfully');
    }
    public function hiringmaps()
    {
        $data = hiring_maps::where('company_id' , Cmf::getusercompany()->id)->get();
        return view('carrier/hiring-maps/index')->with(array('data'=>$data));
    }
    public function deletemap($id)
    {
        maplocations::where('map_id' , $id)->delete();
        hiring_maps::where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Map Deleted Successfully');
    }
    function editmap($id)
    {
        $locations = maplocations::where('map_id' , $id)->get();
        $map = hiring_maps::where('id' , $id)->get()->first();
        return view('carrier/hiring-maps/editmap')->with(array('locations'=>$locations,'map'=>$map));
    }


    public function changestatusofmap($id)
    {
        $map = hiring_maps::find($id);
        if($map->status == 1){
            $map->status = 2;
        }else{
            $map->status = 1;
        }
        $map->save();
        return redirect()->back()->with('message', 'Map status Updated Successfully');
    }
    public function savemaplocations($lat,$long,$radius,$map_id)
    {
        $maploc = new maplocations();
        $maploc->map_id = $map_id;
        $maploc->lat = $lat;
        $maploc->long = $long;
        $maploc->radius = $radius;
        $maploc->save();
    }
    public function updatepetpolicy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'petpolicy' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        } 
        $updatecompany = companies::find(Cmf::getusercompany()->id);
        $updatecompany->petpolicy = $request->petpolicy;
        $updatecompany->save();
        return response()->json(['policytext'=>$request->petpolicy]);
    }
    public function updateriderpolicy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rider_policy' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()]);
        }
        $updatecompany = companies::find(Cmf::getusercompany()->id);
        $updatecompany->riderpolicy = $request->rider_policy;
        $updatecompany->save();
        return response()->json(['policytext'=>$request->rider_policy]);
    }
    public function companyinfo($id)
    {
        $data = company_info_pages::where('url' , $id)->first();
        return view('carrier/company-info/index')->with(array('data'=>$data));
    }
    public function updatecompanyinfo(Request $request)
    {
        $data = companies::where('user_id' , Auth::user()->id)->get()->first();

        $sql = "UPDATE `companies` SET $request->columnname = '$request->additional_notes_about_expereince' WHERE `id` = $data->id;";

        DB::statement($sql);

        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
    public function carrierhelp()
    {
        $data = help_categories::where('status' , 'published')->orderby('order' , 'ASC')->get();
        return view('carrier/help/index')->with(array('data'=>$data));
    }
    public function addnewpost()
    {
        $categories = education_categories::where('status' , 'Published')->get();
        return view('carrier.education-center.addpost')->with(array('categories'=>$categories));
    }

    public function addneweducationarticle(Request $request)
    {
        $add = new education_articles();
        $add->category_id = $request->category_id;
        $add->tittle = $request->tittle;
        if($request->image)
        {
            $add->image = Cmf::sendimagetodirectory($request->image);
        }
        $add->youtube = $request->youtube;
        $add->content = $request->answer;
        $add->type = 'carrier';
        $add->carrier_id = Cmf::getusercompany()->id;
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Post Added Successfully');
    }
    public function educationcenter()
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $rtrposts = education_articles::where('status' , 'Published')->where('type' , 'rtr');
        $carrierposts = education_articles::where('status' , 'Published')->where('carrier_id' , Cmf::getusercompany()->id)->where('type' , 'carrier');
        return view('carrier/education-center/index')->with(array('categories'=>$categories,'carrierposts'=>$carrierposts,'rtrposts'=>$rtrposts));
    }

    public function allposts()
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $data = education_articles::where('status' , 'Published')->where('carrier_id' , Cmf::getusercompany()->id)->where('type' , 'carrier')->get();
        return view('carrier/education-center/allposts')->with(array('categories'=>$categories,'data'=>$data));
    }
    public function editpost($id)
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $data = education_articles::where('status' , 'Published')->where('carrier_id' , Cmf::getusercompany()->id)->where('type' , 'carrier')->where('id' , $id)->get()->first();
        return view('carrier/education-center/edit')->with(array('categories'=>$categories,'data'=>$data));
    }

    public function updateeducationarticle(Request $request)
    {
        $add = education_articles::find($request->id);
        $add->category_id = $request->category_id;
        $add->tittle = $request->tittle;
        if($request->image)
        {
            $add->image = Cmf::sendimagetodirectory($request->image);
        }
        $add->youtube = $request->youtube;
        $add->content = $request->answer;
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Article Updated Successfully');
    }
    public function detailpost($id)
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $data = education_articles::where('status' , 'Published')->where('id' , $id)->get()->first();
        return view('carrier/education-center/detail')->with(array('categories'=>$categories,'data'=>$data));
    }
    
}
