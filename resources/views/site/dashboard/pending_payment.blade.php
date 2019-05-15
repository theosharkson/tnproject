@extends('layouts.site')

@section('content')
 
<section class="page-title smaller-title bg-overlay-black-60 parallax"  style="background: url({{asset('site-assets/images/slider/1.jpg')}})"
  data-jarallax='{"speed": 0.7}'>
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1><i class="fa fa-dashboard"></i>  Your Account Dashboard</h1>
          <p>Monitor Progress of your Orders</p>
        </div>


        <ul class="page-breadcrumb">
          <li>
            <a href="{{route('site')}}">
              <i class="fa fa-home"></i> Home
            </a>  
            <i class="fa fa-angle-double-right"></i>
          </li>
          {{-- <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li> --}}
          <li><span>Dashboard</span> </li>
       </ul>

     </div>
    </div> 
  </div>
</section>


<section class="page-sidebar pt-30">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-3 col-md-3">
        @include('site.dashboard.sidebar') 
      </div> 

       <div class="col-lg-9 col-md-9 page-content">
           <div class="section-title">
             <h2 >All Your Pending Orders</h2>
             <div class="table-responsive">
                 <table class="table table-striped table-bordered" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="hidden-sm hidden-xs">Date/Time</th>
                            <th class="hidden-sm hidden-xs">From</th>
                            <th>Packages</th>
                        </tr>
                    </thead>
                
                   <tbody>
                       @foreach(getOrdersPendingPayment() as $pending_order)
                         <tr>
                             <td class="hidden-sm hidden-xs">
                                 <span class="fa fa-clock-o"></span>
                                 {{humanDate($pending_order->date)}}
                                 <strong>({{readableDate($pending_order->date)}})</strong>
                                
                                <br>

                                 @if($pending_order->payment_status ==  getPendingPaymentId())
                                     <span class="label label-warning" >
                                         {{$pending_order->paymentstatus->name}}
                                     </span>
                                 @elseif($pending_order->payment_status == getPendingPaymentApprovalId())
                                     <span class="label label-info" >
                                         {{$pending_order->paymentstatus->name}}
                                     </span>
                                 @elseif($pending_order->payment_status ==  getPaidId())
                                     <span class="label label-success" >
                                         {{$pending_order->paymentstatus->name}}
                                     </span>
                                 @endif
                             </td>
                             <td  class="hidden-sm hidden-xs">
                                 <span class="fa fa-user"></span>
                                 {{$pending_order->user->firstname}} {{$pending_order->user->lastname}}
                                  <br/>
                                  <span class="fa fa-envelope"></span>
                                 {{$pending_order->user->email}}
                                 <br/>
                                 <span class="fa fa-phone-square"></span>
                                 {{$pending_order->user->phone_number}}
                             </td>
                             <td>
                                 @foreach($pending_order->packages as $key => $orderPackage)
                                    <strong>
                                      <i class="fa fa-gift"></i>
                                      {{$orderPackage->package->name}}
                                    </strong> 
                                    <br>
                                    <small class="very-small">{{$orderPackage->package->type->name}}</small>

                                    <div class="divider dashed"></div>
                                 @endforeach

                                 <a href="{{route('orders.show',['order'=>$pending_order->id])}}" class="btn btn-primary btn-block  mt-10">
                                     <span class="fa fa-cloud-upload"></span>
                                     Upload Proof of Payment
                                 </a>

                             </td>
                         </tr>
                     @endforeach
                   </tbody>
               </table>
             </div>
           </div>
       </div> 
    </div>
  </div>
</section>



@endsection


@section('scripts')

@endsection
