<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\staff_permissions;
use App\Models\set_roles;
use App\Models\role_users;
use App\Models\companies;
use Illuminate\Support\Facades\Http;
class Cmf
{
    public static function sendimagetodirectory($imagename)
    {
        $file = $imagename;
        $filename = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        return $filename;
    }
    public static function shorten_url($text)
    {
        $words = explode('-', $text);
        $five_words = array_slice($words,0,12);
        $String_of_five_words = implode('-',$five_words)."\n";

        $String_of_five_words = preg_replace('~[^\pL\d]+~u', '-', $String_of_five_words);
        $String_of_five_words = iconv('utf-8', 'us-ascii//TRANSLIT', $String_of_five_words);
        $String_of_five_words = preg_replace('~[^-\w]+~', '', $String_of_five_words);
        $String_of_five_words = trim($String_of_five_words, '-');
        $String_of_five_words = preg_replace('~-+~', '-', $String_of_five_words);
        $String_of_five_words = strtolower($String_of_five_words);
        if (empty($String_of_five_words)) {
          return 'n-a';
        }
        return $String_of_five_words;
    }
    public static function date_format($data)
    {
        return date('d M Y', strtotime($data));
    }
    public static  function getusercompany()
    {
        if(Auth::user()->type == 'carrier_sub_account')
        {
            $roleid = role_users::where('user_id' , Auth::user()->id)->first();
            $companyid = staff_permissions::where('id' , $roleid->role_id)->first();
            $companyid = companies::where('id' , $companyid->company_id)->first();
        }else{
            $companyid = companies::where('user_id' , Auth::user()->id)->first();
        }
        return $companyid;
    }

    public static function getuserrole($id)
    {
        $roleid = role_users::where('user_id' , $id)->first();
        return $userrole = staff_permissions::where('id' , $roleid->role_id)->first();
    }

    public static function getcarrierrole($id)
    {
        $checkrole = role_users::where('user_id' , Auth::user()->id)->get();
        if($checkrole->count() > 0)
        {
            $role = $checkrole->first()->role_id;
            $checkmodule = set_roles::where('staff_permissions' , $role)->where('module_id' , $id)->count();
            if($checkmodule > 0)
            {
                return 1;
            }else{
                return 2;
            }
        }
        else
        {
            return 0;
        }
    }

    public static function carriermodules()
    {

        $cars = array(
          array("id"=>22,"name"=>'Jobs'),
          array("id"=>1,"name"=>'All Jobs'),
          array("id"=>2,"name"=>'Add New Job'),
          array("id"=>23,"name"=>'Maps'),
          array("id"=>3,"name"=>'All Maps'),
          array("id"=>4,"name"=>'Add New Map'),
          array("id"=>24,"name"=>'Team'),
          array("id"=>5,"name"=>'All Members'),
          array("id"=>6,"name"=>'Staff Permissions'),
          array("id"=>25,"name"=>'Company Info'),
          array("id"=>7,"name"=>'Best Practices'),
          array("id"=>8,"name"=>'Ownership Policy'),
          array("id"=>9,"name"=>'Referral Program'),
          array("id"=>10,"name"=>'Orientation Schedule'),
          array("id"=>11,"name"=>'Terminal Locations'),
          array("id"=>12,"name"=>'Sales Funnel'),
          array("id"=>13,"name"=>'Processiong and Safety Guide'),
          array("id"=>14,"name"=>'Driver Benifits'),
          array("id"=>15,"name"=>'Education Center'),
          array("id"=>26,"name"=>'Carrier Profile'),
          array("id"=>16,"name"=>'My Carrier Profile'),
          array("id"=>17,"name"=>'Profile Reviews'),
          array("id"=>18,"name"=>'Advertising'),
          array("id"=>19,"name"=>'Integrations'),
          array("id"=>20,"name"=>'Billing $ Invoices'),
          array("id"=>21,"name"=>'Help')
        );

        return $cars;
    }
}