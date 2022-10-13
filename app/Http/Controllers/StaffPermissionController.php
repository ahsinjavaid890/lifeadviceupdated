<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\Cmf;
use App\Models\companies;
use App\Models\staff_permissions;
use App\Models\set_roles;
use App\Models\role_users;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Auth;
class StaffPermissionController extends Controller
{
    public function allpermissions()
    {
        $companyid = companies::where('user_id' , Auth::user()->id)->first();
        $data = staff_permissions::where('company_id' , $companyid->id)->get();
        return view('carrier/team-members/staff-permissions')->with(array('data'=>$data));
    }
    public function addstaffpermission()
    {
        return view('carrier/team-members/add-staff-permissions');
    }
    public function editstaffpermission($id)
    {
        $companyid = companies::where('user_id' , Auth::user()->id)->first();
        $data = staff_permissions::where('company_id' , $companyid->id)->where('id' , $id)->get()->first();
        return view('carrier/team-members/edit-staff-permissions')->with(array('data'=>$data));
    }
    public function addnewstaffpermission(Request $request)
    {
        $role = new staff_permissions;
        $role->company_id = $request->company_id;
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
        foreach($request->roles as $r)
        {
            $setrole = new set_roles();
            $setrole->staff_permissions = $role->id;
            $setrole->module_id = $r;
            $setrole->save();
        }
        return redirect()->back()->with('message', 'Role Added Successfully');
    }
    public function updatestaffpermission(Request $request)
    {
        $role = staff_permissions::find($request->id);
        $role->name = $request->name;
        $role->description = $request->description;
        $role->save();
        set_roles::where('staff_permissions' , $request->id)->delete();
        foreach($request->roles as $r)
        {
            $setrole = new set_roles();
            $setrole->staff_permissions = $role->id;
            $setrole->module_id = $r;
            $setrole->save();
        }
        return redirect()->back()->with('message', 'Role Updated Successfully');
    }
    public function allmembers()
    {
        $data = role_users::select('users.id as user_id','users.name as user_name','users.email as user_email','users.phonenumber as user_phonenumber','staff_permissions.name as role_name','staff_permissions.id as role_id','role_users.created_at as created_at')                      
                    ->leftJoin('users','users.id','=','role_users.user_id') 
                    ->leftJoin('staff_permissions','staff_permissions.id','=','role_users.role_id')
                    ->where('staff_permissions.company_id','=',Cmf::getusercompany()->id)
                    ->orderBy('role_users.id','desc')
                    ->get();
        return view('carrier/team-members/index')->with(array('data'=>$data));
    }
    public function addnewcarrierstaff(Request $request)
    {
        $newuser = new User();
        $newuser->name = $request->name;
        $newuser->email = $request->email;
        $newuser->phonenumber = $request->phone_number;
        $newuser->password = Hash::make($request->password);
        $newuser->type = 'carrier_sub_account';
        $newuser->approved_status = 1;
        $newuser->save();
        $addrole = new role_users();
        $addrole->user_id = $newuser->id;
        $addrole->role_id = $request->role_id;
        $addrole->save();
        $company = staff_permissions::where('id' , $request->role_id)->get()->first();
        $companyname = companies::where('id' , $company->company_id)->first()->company_name;
        $subject = 'Welcome To '.env('APP_NAME').'';
        Mail::send('email.inviteuser', ['email' => $request->email,'password' => $request->password,'name' => $request->name,'role' => $company->name,'companyname' => $companyname], function($message) use($request , $subject){
            $message->to($request->email);
            $message->subject($subject);
        });
        return redirect()->back()->with('message', 'New User Added Successfully');
    }
}
