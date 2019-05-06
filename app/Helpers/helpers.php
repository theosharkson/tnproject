<?php


use App\PaymentMethod;
use App\ProcessStatus;
use App\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;



function getPermissions(){
    return $permissions = [
        "can_add" => "Can Add",
        "can_edit" => "Can Edit",
        "can_delete" => "Can Delete",
        "can_view_log" => "Can View Log",
        "can_print" => "Can Print",
    ];
}



function checkPermission($permission, $feature){
    
    if (! \Auth::user()->hasPermission($permission, $feature)) {
        
        return false;
    }

    return true;
}

function currency($value)
{
  return number_format($value,2);
}

function Apikey(){
    return 'G2Nw+fj7TEHvS4P2ShBDc6L4tWkizNkMTmyx4KcyAWqDk75BHWAdaPqmKp1LLeHB';
}

function ApiUsername(){
    return 'memories4ever';
}

function ApiUrl(){
    return 'https://isms.wigalsolutions.com/ismsweb/mobilemoney/';
}

//generate random string
function generateRandomString($length) {
	$characters = '123456789ABCDEFGHIJKLMNPQRSTUVWXYZ123456789123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function daysOfweek(){
    return $days_of_week = [ 'Monday',
                             'Tuesday',
                             'Wednesday',
                             'Thursday',
                             'Friday',
                             'Saturday',
                             'Sunday'
                            ];
}

//generate random unique code
function getCode($model,$field){
    do{
        $rand = generateRandomString(8);
    }while(!empty($model::where($field,$rand)->first()));
    return $rand;
}


//generate random unique code (general)
function getUniqueCode($model,$field,$code_lenght){
    do{
        $rand = generateRandomString($code_lenght);
    }while(!empty($model::where($field,$rand)->first()));
    return $rand;
}


function save_image($image,$person_type,$update_image=0){
    ini_set('memory_limit','256M');
    // Add Product Images
    $Product_Image = $image;
    if($update_image != 0){
        $image_name = explode('.' ,$update_image )[0];
        $filename = $image_name.'.' . $Product_Image->getClientOriginalExtension();
    }else{
        $filename = date_timestamp_get(date_create()).generateRandomString(10).'.' . $Product_Image->getClientOriginalExtension();
    }
    $destination_path = base_path() . '/public/uploads/'.$person_type.'_images_raw/';
    $destination_actua_path = base_path() . '/public/uploads/'.$person_type.'_images/';
    $destination_actua_path_large = base_path() . '/public/uploads/'.$person_type.'_images_large/';
    $thumbnail_path = base_path() . '/public/uploads/'.$person_type.'_images_thumb/';
    $cart_thumbnail_path = base_path() . '/public/uploads/'.$person_type.'_images_cart_thumb/';

    if(!File::exists($destination_path)) {
        File::makeDirectory($destination_path, $mode = 0777, true, true);
    }
    if(!File::exists($destination_actua_path)) {
        File::makeDirectory($destination_actua_path, $mode = 0777, true, true);
    }
    if(!File::exists($destination_actua_path_large)) {
        File::makeDirectory($destination_actua_path_large, $mode = 0777, true, true);
    }
    if(!File::exists($thumbnail_path)) {
        File::makeDirectory($thumbnail_path, $mode = 0777, true, true);
    }
    if(!File::exists($cart_thumbnail_path)) {
        File::makeDirectory($cart_thumbnail_path, $mode = 0777, true, true);
    }
    


    $Product_Image->move($destination_path, $filename);

    $new_image = \Image::make($destination_path.$filename);
    $large_image = \Image::make($destination_path.$filename);
    $new_image_size = $new_image->filesize();
     if($new_image_size < 2000000){
        //Save the image with a 80% compression
        $new_image->save($destination_actua_path.$filename,80);
        $large_image->resize(460, null , function($ratio){$ratio->aspectRatio();})->save($destination_actua_path_large.$filename,90);
     }
     if(2000000 <= $new_image_size and $new_image_size <= 4000000){
        //Save the image with a 60% compression
        $new_image->save($destination_actua_path.$filename,50);
        $large_image->resize(460, null , function($ratio){$ratio->aspectRatio();})->save($destination_actua_path_large.$filename,70);

     }
     if(4000001 <= $new_image_size and $new_image_size <= 5000000){
        //Save the image with a 65% compression
        $new_image->save($destination_actua_path.$filename,35);
        $large_image->resize(460, null , function($ratio){$ratio->aspectRatio();})->save($destination_actua_path_large.$filename,65);
     }
     if(5000001 <= $new_image_size and $new_image_size <= 6000000){
        //Save the image with a 60% compression
        $new_image->save($destination_actua_path.$filename,30);
        $large_image->resize(460, null , function($ratio){$ratio->aspectRatio();})->save($destination_actua_path_large.$filename,55);
     }
     if(6000001 <= $new_image_size){
        //Save the image with a 50% compression
        $new_image->save($destination_actua_path.$filename,20);
        $large_image->resize(460, null , function($ratio){$ratio->aspectRatio();})->save($destination_actua_path_large.$filename,40);
     }

    //cart thumbnail
    $new_image->fit(300,453)->save($cart_thumbnail_path.$filename);

    // $new_image->fit(200)->save($thumbnail_path.$filename);
    $new_image->resize(150, null , function($ratio){$ratio->aspectRatio();})->save($thumbnail_path.$filename);

    return $filename;

}

function save_file($file,$person_type){
    ini_set('memory_limit','256M');

    $filename = date_timestamp_get(date_create()).generateRandomString(10).'.' . $file->getClientOriginalExtension();

    $destination_path = base_path() . '/public/uploads/'.$person_type.'/';

    if(!File::exists($destination_path)) {
	    File::makeDirectory($destination_path, $mode = 0777, true, true);
	}
	

    $file->move($destination_path, $filename);


    return $filename;

}



function getCurrencyCode()
{
    if(Auth::user()->country_id ==  getGhanaId()){
        return "GHS";
    }else{
        return '$';
    }
    
}

function getDefaultPassword()
{
    return '123456';
    
}

function readableDate($date)
{
    return \Carbon\Carbon::parse($date)->toFormattedDateString();
    
}

function readableDateTime($date)
{
    return \Carbon\Carbon::parse($date)->toDayDateTimeString();
    
}


function humanDate($date)
{
    return \Carbon\Carbon::parse($date)->diffForHumans();
    
}


function defaultDate($date)
{
    return \Carbon\Carbon::parse($date)->format('d-m-Y');
    
}

function dbDate($date)
{
    return DateTime::createFromFormat('d-m-Y',$date);
    
}

function formatDateForDb($date)
{
   return \Carbon\Carbon::parse($date)->format('Y-m-d h:m:s'); 
}

function getRandomColor()
{
    $array = [
                'gray',
                'navy',
                'teal',
                'aqua',
                'orange',
                'maroon',
                'black',
                'yellow',
                'green',
            ];

    $random = array_random($array);
    return $random;
    
}


function getTempId()
{
    $record = ProcessStatus::where('name','Temp')->first();
    if(!empty($record)){
        return $record->id;
    }else{
        return 1;
    }
}

function getPaymentId()
{
    $record = ProcessStatus::where('name','Payment')->first();
    if(!empty($record)){
        return $record->id;
    }else{
        return 1;
    }
}


function getNewId()
{
    $record = ProcessStatus::where('name','New')->first();
    if(!empty($record)){
        return $record->id;
    }else{
        return 1;
    }
}

function getProcessingId()
{
    $record = ProcessStatus::where('name','Processing')->first();
    if(!empty($record)){
        return $record->id;
    }else{
        return 1;
    }
}

function getProcessedId()
{
    $record = ProcessStatus::where('name','Processed')->first();
    if(!empty($record)){
        return $record->id;
    }else{
        return 1;
    }
}

function getDeliveredId()
{
    $record = ProcessStatus::where('name','Delivered')->first();
    if(!empty($record)){
        return $record->id;
    }else{
        return 1;
    }
}



function getAdminRoleId()
{
    $role = UserType::where('name','Admin')->first();
    if(!empty($role)){
        return $role->id;
    }else{
        return null;
    }
}

function getCustomerRoleId()
{
    $role = UserType::where('name','Customer')->first();
    if(!empty($role)){
        return $role->id;
    }else{
        return null;
    }
}

function getPhotographerRoleId()
{
    $role = UserType::where('name','Photographer')->first();
    if(!empty($role)){
        return $role->id;
    }else{
        return null;
    }
}





function getOtherPaymentID()
{
    $pm = PaymentMethod::where('name','Others')->first();
    if(!empty($pm)){
        return $pm->id;
    }else{
        return 0;
    }
}

function getMMPaymentID()
{
    $pm = PaymentMethod::where('name','Mobile Money')->first();
    if(!empty($pm)){
        return $pm->id;
    }else{
        return 0;
    }   
}



?>