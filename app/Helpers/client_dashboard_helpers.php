<?php

function getOrdersPendingPayment(){

	$pending_orders = \App\Order::where('process_status',getNewId())
                                ->where('payment_status',getPendingPaymentId())
                                ->where('user_id',Auth::id())
                                ->where('active_status',1)
                                ->orderBy('created_at','desc')
                                ->get();
return $pending_orders;
}



function getOrdersPendingApproval(){

	$pending_orders = \App\Order::where('process_status',getNewId())
                                ->where('payment_status',getPendingPaymentApprovalId())
                                ->where('user_id',Auth::id())
                                ->where('active_status',1)
                                ->orderBy('created_at','desc')
                                ->get();
    return $pending_orders;
}





?>