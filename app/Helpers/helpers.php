<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

function curl($url, $data=array(), $type=null){
    $auth["authentication"] = authenticationServices();
    $postdata =  (array_merge($auth,$data));
    if(isset($type)){
        if($type == "post"){
            $response = Http::post($url,$postdata);
        }
        else{
            $response = Http::get($url,$postdata);
        }
    }
    else{
        $response = Http::get($url,$postdata);
    }
    return $response;
}

function authenticationServices(){
    $nonce=generateRandomString(28);
    $date = date("Y-m-d\TH:i:s\Z");
    $clientId = "Eztrial106";
    $EziTrialPasswordDigest = PasswordDigestServices($clientId,$nonce,$date);
    $uuid = UUID();
    $data = array(
        "nonce"=> $nonce,
        "timestamp"=> $date,
        "digest"=> $EziTrialPasswordDigest,
        "clientId"=> $clientId,
        "uuid"=> $uuid
    );
    return $data;
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function PasswordDigestServices($clientId,$nonce,$timestamp)
{
    $password = "OPelCgQ26nA7j2I1rmso5OOxfSpM52HvE0LBQhRA/7CqpBWLCA1o2uCmshp0s17PXnSaHqNqYhRdq8LKw+f2SpoAaD5eDzeeYrd9GeMQnJI=";
    $password = fnDecryptProd($password);
    $officeId="EZT-0922";
    $nonce=$nonce.$officeId;
    $digest = base64_encode(sha1($nonce.$timestamp.$password, true));
    return $digest;
}

function UUID()
{
    return generateRandomString(8)."-".generateRandomString(4)."-".generateRandomString(4)."-".generateRandomString(4)."-".generateRandomString(12);
}

function validateParameters($obj,$params){
    $arr=array();
    $arr[0]=true;
    $arr[1]="";
    $i=0;
    if(!isset($obj[0])){
        foreach($params as $fields)
        {
            if(!array_key_exists($fields[0],$obj))
            {
                return $fields[0]." is Missing";
            }
            if($fields[1]==1){
                if($obj[$fields[0]]==""){
                    return $fields[0]." is Empty";
                }
            }
        }
    }
    else {
        foreach ($obj as $fl) {
            foreach ($params as $fields) {
                if (!array_key_exists($fields[0], $fl)) {
                    return $fields[0] . " is Missing";
                }
                if ($fields[1] == 1) {
                    if ($fl[$fields[0]] == "") {
                        return $fields[0] . " is Empty";
                    }
                }
            }
        }
    }
    return 1;
}