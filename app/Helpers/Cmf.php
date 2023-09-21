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
use Carbon\Carbon;
class Cmf
{
    public static function numberFormat($number, $decimals=0)
    {
        if (strpos($number,'.')!=null)
        {
            $decimalNumbers = substr($number, strpos($number,'.'));
            $decimalNumbers = substr($decimalNumbers, 1, $decimals);
        }
        else
        {
            $decimalNumbers = 0;
            for ($i = 2; $i <=$decimals ; $i++)
            {
                $decimalNumbers = $decimalNumbers.'0';
            }
        }


        $number = (int) $number;
        $number = strrev($number);  // reverse

        $n = '';
        $stringlength = strlen($number);

        for ($i = 0; $i < $stringlength; $i++)
        {
            // from digit 3, every 2 digit () add comma
            if($i==2 || ($i>2 && $i%2==0) ) $n = $n.$number[$i].','; 
            else $n = $n.$number[$i];
        }

        $number = $n;    
        $number = strrev($number); // reverse

        ($decimals!=0)? $number=$number.'.'.$decimalNumbers : $number ;
        if ($number[0] == ',') $number = substr_replace($number, '', 0, 1);
        if ($number[1] == ',' && $number[0] == '-') $number = substr_replace($number, '', 1, 1);      

        return $number;
    }
    public static function checkallrates($ages_array , $rates_table_name , $deduct_plan_id , $sumamt)
    {
        $items = array();
        foreach($ages_array as $person_age)
        {
            $p_planrates =  DB::table($rates_table_name)->where('plan_id' , $deduct_plan_id)->where('maxage', '>=', $person_age)->where('minage', '<=', $person_age)->where('sum_insured' , $sumamt)->get();
            if($p_planrates->count() > 0)
            {
                $items[] = 1;
            }else{
                $items[] = 0;
            }
        }
        if (in_array("0", $items))
        { 
            return 0; 
        } else 
        {
            return 1; 
        }
    }
    public static function error_processor($validator)
    {
        $err_keeper = [];
        foreach ($validator->errors()->getMessages() as $index => $error) {
            array_push($err_keeper, ['code' => $index, 'message' => $error[0]]);
        }
        return $err_keeper;
    }
    public static function getsite()
    {
        return 'lifeadvice';
    }
    public static function getwebsite()
    {
        $data =  DB::table('select_websites')->where('id' ,1)->first();
        return DB::table('site_settings')->where('smallname' ,$data->name)->first();
    }
    public static function sendimagetodirectory($imagename)
    {
        $file = $imagename;
        $filename = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $filename);
        return $filename;
    }
    public static function section_three_elements($page , $coloumn , $id)
    {
        return DB::table('section_three_elements')->where('id' , $id)->where('page' , $page)->first()->$coloumn;
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
    public static function create_time_ago($time)
    {

        $year = date('Y', strtotime($time));
        $month = date('m', strtotime($time));
        $day = date('d', strtotime($time));
        $datetime = Carbon::parse($time);
        return $datetime->diffForHumans();
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
    public static function get_store_value($value)
    {
        return DB::table('site_settings')->where('id' , 1)->get()->first()->$value;
    }
    public static function travelpages()
    {
        $travel = array(
          array("id"=>1,"modalname"=>'supervisainsurance',"name"=>'Super Visa'),
          array("id"=>2,"modalname"=>'travelinsurance',"name"=>'Travel Insurance'),
          array("id"=>3,"modalname"=>'visitorinsurance',"name"=>'Visitor Insurance'),
          array("id"=>4,"modalname"=>'studentinsurance',"name"=>'Student Insurance')
        );
        return $travel;
    }
}