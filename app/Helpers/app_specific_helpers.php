<?php 

function coutyPrice(){
    // return 'price';
    return 'price_d';
}

function getCurrencySymbol(){
    if(coutyPrice() == "price_d"){
        return "$";
    }

    if(coutyPrice() == "price"){
        return "GH₵";
    }

    return "GH₵";
}

function getTypeCategories(){
    return [
        "photography" => "Photography",
        "videography" => "Videography",
    ];
}

function getPhotoType(){
    return "photography";
}
function getVideoType(){
    return "videography";
}




function getExtraTypes(){
    return [
        "service" => "Service",
        "deliverable" => "Deliverable",
    ];
}


function getPortfolioTypes(){
    return [
        "photo" => "Photo",
        "video" => "Video",
    ];
}

function getPortfolioItemTypes(){
    return [
        "photo" => "Photo",
        "video" => "Video",
        "video_link" => "Video Link",
    ];
}


function getOrderPackagePrice($orderPackageId){
    $orderPackage = \App\OrderPackage::where('id', $orderPackageId)->first();

    if(empty($orderPackage)){
        return 0;
    }

    $county_price = coutyPrice();

    $package_price = $orderPackage->package->$county_price;
    $package_extras_price = 0;

    if($orderPackage->orderPackageExtras->count() > 0){
        
        foreach($orderPackage->orderPackageExtras as $order_extra){
            $extra_price = $order_extra->extra->$county_price;
            $quantity = $order_extra->quantity;
            $new_price = $extra_price * $quantity;

            //add to the sum extra prices
            $package_extras_price += $new_price;
        }
    }

    $total = $package_price + $package_extras_price;

    return $total;
}






 ?>