<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use App\Models\help_categories;
use App\Models\help_articles;
use App\Models\education_categories;
use App\Models\education_articles;
use App\Models\company_info_pages;
use App\Models\recuring_tips;
use App\Models\subscription_plans;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard/index');
    }
    public function allcarriers(){
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 1)
            ->get();
        return view('admin/carriers/index')->with(array('data'=>$data));
    }

    public function addnewcarrier(Request $request)
    {
        $carrier = new User();
        $carrier->name = $request->name;
        $carrier->email = $request->email;
        $carrier->type = 'carrier';
        $carrier->password = Hash::make($request->password);
        $carrier->dot_number = $request->dot_number;
        $carrier->trucks_in_fleet = $request->trucks_in_fleet;
        $carrier->how_many_drivers_in_next = $request->how_many_drivers_in_next;
        $carrier->save();

        $company = new companies();
        $company->user_id = $carrier->id;
        $company->email = $request->company_email;
        $company->company_name = $request->company_name;
        $company->company_link = Cmf::shorten_url($request->company_name);
        $company->save();

        $subject = 'Welcome To '.env('APP_NAME').'';
        Mail::send('email.addnewcarrier', ['name' => $request->name,'email' => $request->name,'password' => $request->password], function($message) use($request , $subject){
            $message->to($request->email);
            $message->subject($subject);
        });
        return redirect()->back()->with('message', 'Carrier Added Successfully');
    }
    public function carrierrequests()
    {
        $data = companies::leftJoin('users','users.id','=','companies.user_id')
            ->select('companies.*','users.id as user_id','users.name as user_name','users.name as user_name','users.email as user_email','users.dot_number','users.approved_status')
            ->orderBy('id','desc')
            ->where('users.approved_status' , 0)
            ->get();
        return view('admin/carriers/requests')->with(array('data'=>$data));
    }
    public function approvecarrier($id)
    {
        $user = User::find($id);
        $user->approved_status = 1;
        $user->save();
        Mail::send('email.appreq', ['email' => $user->email , 'name' => $user->name, 'email' => $user->email], function($message) use($user){
              $message->to($user->email);
              $message->subject('Your Request is Approved');
          });
        return redirect()->route('admin.allcarriers');
    }
    public function declinerequest(Request $request)
    {
        $user = User::find($request->id);
        $user->approved_status = 2;
        $user->save();
        Mail::send('email.rejectedrequest', ['email' => $user->email , 'name' => $user->name, 'reason' => $request->reason], function($message) use($user){
           $message->to($user->email);
           $message->subject('Your User Request is Rejected');
        });
        return redirect()->back()->with('message', 'User Request Rejected Successfully');
    }
    public function helpcategories()
    {
        $data = help_categories::all();
        return view('admin.help.categories')->with(array('data'=>$data));
    }
    public function addnewhelpcategory(Request $request)
    {
        $add = new help_categories();
        $add->name = $request->name;
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function updatehelpcategory(Request $request)
    {
        $add = help_categories::find($request->id);
        $add->name = $request->name;
        $add->status = $request->status;
        $add->order = $request->order;
        $add->save();
        return redirect()->back()->with('message', 'Category Updated Successfully');
    }

    public function deletehelpcategory($id)
    {
        help_articles::where('category_id' , $id)->delete();
        help_categories::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Category Deleted Successfully');
    }
    public function deletehelparticle($id)
    {
        help_articles::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Article Deleted Successfully');
    }

    public function addnewhelparticles()
    {
        $categories = help_categories::where('status' , 'Published')->get();
        $data = help_articles::all();
        return view('admin.help.addnewarticle')->with(array('data'=>$data,'categories'=>$categories));
    }
    public function addnewhelparticle(Request $request)
    {
        $add = new help_articles();
        $add->category_id = $request->category_id;
        $add->tittle = $request->tittle;
        $add->answer = $request->answer;
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Article Added Successfully');
    }
    public function updatehelparticle(Request $request)
    {
        $add = help_articles::find($request->id);
        $add->category_id = $request->category_id;
        $add->tittle = $request->tittle;
        $add->answer = $request->answer;
        $add->status = $request->status;
        $add->order = $request->order;
        $add->save();
        return redirect()->back()->with('message', 'Article Added Successfully');
    }

    public function allcompanyinfopages()
    {
        $data = company_info_pages::all();
        return view('admin.companyinfo.index')->with(array('data'=>$data));
    }

    public function addnewpage(Request $request)
    {
        $add =  new company_info_pages();
        $add->name = $request->name;
        $add->content = $request->additional_notes_about_expereince;
        $add->status = 'Published';
        $add->url = Cmf::shorten_url($request->name);
        $add->save();
        return redirect()->back()->with('message', 'Page Added Successfully');
    }

    public function updatepage(Request $request)
    {
        $add =  company_info_pages::find($request->id);
        $add->name = $request->name;
        $add->content = $request->additional_notes_about_expereince;
        $add->status = $request->status;
        $add->url = Cmf::shorten_url($request->name);
        $add->save();
        return redirect()->back()->with('message', 'Page Updated Successfully');
    }
    public function deletepage($id)
    {
        company_info_pages::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Page Deleted Successfully');
    }




    public function educationcategories()
    {
        $data = education_categories::all();
        return view('admin.education.categories')->with(array('data'=>$data));
    }
    public function addneweducationcategory(Request $request)
    {
        $add = new education_categories();
        $add->name = $request->name;
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function updateeducationcategory(Request $request)
    {
        $add = education_categories::find($request->id);
        $add->name = $request->name;
        $add->status = $request->status;
        $add->order = $request->order;
        $add->save();
        return redirect()->back()->with('message', 'Category Updated Successfully');
    }

    public function deleteeducationcategory($id)
    {
        education_articles::where('category_id' , $id)->delete();
        education_categories::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Category Deleted Successfully');
    }
    public function deleteeducationarticle($id)
    {
        education_articles::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Article Deleted Successfully');
    }
    public function changestatusofarticle($id)
    {
        $update = education_articles::find($id);
        if($update->status == 'Published')
        {
            $update->status = 'Not Published';
        }
        else
        {
            $update->status = 'Published';
        }
        $update->save();
        return redirect()->back()->with('message', 'Article Status Updated Successfully');
    }
    public function allpostseducationcenter()
    {
        $data = education_articles::all();
        return view('admin.education.all')->with(array('data'=>$data));
    }
    public function editpost($id)
    {
        $categories = education_categories::all();
        $data = education_articles::find($id);
        return view('admin.education.edit')->with(array('data'=>$data,'categories'=>$categories));
    }
    public function addneweducationarticles()
    {
        $categories = education_categories::where('status' , 'Published')->get();
        $data = education_articles::all();
        return view('admin.education.addnewarticle')->with(array('data'=>$data,'categories'=>$categories));
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
        $add->added_by = Auth::user()->id;
        $add->type = 'rtr';
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Article Added Successfully');
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

    // Recuring Tips


    public function recuringtips()
    {
        $data = recuring_tips::all();
        return view('admin.recuringtips.index')->with(array('data'=>$data));
    }

    public function addnewrecuringtips(Request $request)
    {
        $add = new recuring_tips();
        $add->content = $request->content;
        if($request->logo)
        {
            $add->logo = Cmf::sendimagetodirectory($request->logo);
        }
        $add->save();
        return redirect()->back()->with('message', 'Tip Added Successfully');
    }


    public function updatenewrecuringtips(Request $request)
    {
        $add = recuring_tips::find($request->id);
        $add->content = $request->content;
        if($request->logo)
        {
            $add->logo = Cmf::sendimagetodirectory($request->logo);
        }
        $add->save();
        return redirect()->back()->with('message', 'Tip Added Successfully');
    }
    public function deleterecuringtips($id)
    {
        recuring_tips::where('id' , $id)->delete();
        return redirect()->back()->with('message', 'Tip Deleted Successfully');
    }
    public function subscriptions()
    {
        $data = subscription_plans::all();
        return view('admin.subscription.index')->with(array('data'=>$data));  
    }

    public function createplan(Request $request)
    {
        $plan = new subscription_plans;
        $plan->name = $request->name;
        $plan->tagline = $request->tagline;
        $plan->price = $request->price;
        $plan->key_points = implode(',', $request->key_points);
        $plan->status = 1;
        $plan->save();
        return redirect()->back()->with('message', 'Plan Successfully Inserted');
    }
    public function updatesubscriptionplan(Request $request)
    {
        $plan = subscription_plans::find($request->id);
        $plan->name = $request->name;
        $plan->tagline = $request->tagline;
        $plan->price = $request->price;
        $plan->key_points = implode(',', $request->key_points);
        $plan->save();
        return redirect()->back()->with('message', 'Plan Updated Successfully');
    }
}
