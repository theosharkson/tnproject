@extends('layouts.admin')

@section('title')

@endsection

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Pending Orders</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        {{-- <i class="fa fa-university fa-2x"></i> --}}
        PENDING ORDERS
        {{-- <small>header small text goes here...</small> --}}
    </h1>
    <!-- end page-header -->

    <div class="row">
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-defult add-shadow" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">All Pending Orders</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Date/Time</th>
                                <th>From</th>
                                <th>Packages</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pending_orders as $pending_order)
                                <tr>
                                    <td>
                                        <span class="label @if($pending_order->process_status ==  getNewId())
                                            label-inverse
                                        @elseif($pending_order->process_status ==  getProcessingId())
                                            label-warning
                                        @elseif($pending_order->process_status ==  getProcessedId())
                                            label-info
                                        @elseif($pending_order->process_status ==  getDeliveredId())
                                            label-success
                                        @endif">
                                            {{$pending_order->status->name}}
                                        </span>
                                        
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

                                    <td>
                                        <span class="fa fa-clock-o"></span>
                                        {{humanDate($pending_order->date)}}
                                        <strong>({{readableDate($pending_order->date)}})</strong>
                                    </td>
                                    <td>
                                        <span class="fa fa-user"></span>
                                        {{$pending_order->user->name}}
                                         <br/>
                                         <span class="fa fa-envelope"></span>
                                        {{$pending_order->user->email}}
                                        <br/>
                                        <span class="fa fa-phone-square"></span>
                                        {{$pending_order->user->phone_number}}
                                    </td>
                                    <td>
                                        @foreach($pending_order->packages as $orderPackage)
                                            <strong>{{$orderPackage->package->name}}</strong> <br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{route('orders.show',['order'=>$pending_order->id])}}" class="btn btn-primary btn-rounded">
                                            <span class="fa fa-shopping-cart"></span>
                                            View Details
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>  
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
@endsection
