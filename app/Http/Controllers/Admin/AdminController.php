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
use App\Models\blogs;
use App\Models\blogcategories;
use App\Models\company_info_pages;
use App\Models\recuring_tips;
use App\Models\subscription_plans;
use Illuminate\Support\Facades\Hash;
use Mail;
use Auth;
use DB;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard/index');
    }
    public function profile()
    {
        return view('admin/profile/index');
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
        $data = DB::table('sales')->orderby('purchase_date' , 'DESC')->get();
        return view('admin.sales.allsale')->with(array('data'=>$data));
    }
    public function viewsale($id)
    {
        $data = DB::table('sales')->where('sales_id' , $id)->first();
        return view('admin.sales.viewsale')->with(array('data'=>$data));
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
}
