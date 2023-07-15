<?php


if(!function_exists('error_processor'))
{	

	function error_processor($validator)
    {
        $err_keeper = [];
        foreach ($validator->errors()->getMessages() as $index => $error) {
            array_push($err_keeper, ['code' => $index, 'message' => $error[0]]);
        }
        return $err_keeper;
    }

}



if(!function_exists('getIp'))
{   

   function getIp(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
    return request()->ip(); // it will return server ip when no client ip found
}

}


if(!function_exists('products_format'))
{   
       function products_format($products , $user_id){
        foreach ($products as $key=> $product)
        {       
            $products[$key]['product_img'] =  url('images/').'/'.$product['product_img'];

            if(DB::Table('wishlists')->where('product_id' , $products[$key]['id'])->where('user_id' , $user_id)->count() >  0)
            {
                $products[$key]['wishlistid'] = 1;
            }else{
                $products[$key]['wishlistid'] = 0;
            }

            
        }
        return $products;
    }

}

if(!function_exists('userformat_format'))
    {   
       function userformat_format($banners){

        foreach ($banners as $key=> $r)
        {       
            echo "string";
            $banners[$key]['profileimage'] =  url('images/').'/'.$r['profileimage'];
        }
        return $banners;
    }
}


if(!function_exists('banners_format'))
    {   
       function banners_format($banners){
            foreach ($banners as $key=> $r)
            {       
                $banners[$key]['banner'] =  url('images/').'/'.$r['banner'];
            }
        return $banners;
    }
}

if(!function_exists('categories_format'))
    {   
       function categories_format($categories){
            foreach ($categories as $key=> $r)
            {        
                if(!empty($r['category_mob_icon']))
                {
                    $categories[$key]['category_mob_icon'] =  url('images/').'/'.$r['category_mob_icon'];
                }
                
            }
        return $categories;
    }
}



?>