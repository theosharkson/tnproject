@extends('layouts.admin')

@section('title')

@endsection

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Crop Year</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        {{-- <i class="fa fa-university fa-2x"></i> --}}
        CROP YEAR 
        {{-- <small>header small text goes here...</small> --}}
    </h1>
    <!-- end page-header -->

                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-5">
                        <!-- begin panel -->
                        <div class="panel panel-danger add-shadow" data-sortable-id="form-stuff-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                                <h4 class="panel-title">Create New Crop Year</h4>
                            </div>
                            <div class="panel-body">
                                <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }} 

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" 
                                            class="form-control"  
                                            placeholder="" 
                                            name="name" 
                                            value="{{old('name')}}"
                                            required="">

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                              </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('fromdate') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">From</label>
                                        <div class="col-md-9">
                                            <div class="input-group date">
                                                <input type="text" 
                                                class="form-control datepicker-autoClose"  
                                                placeholder="" 
                                                name="fromdate" 
                                                value="{{old('fromdate')}}"
                                                required="">

                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>

                                            @if ($errors->has('fromdate'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('fromdate') }}</strong>
                                              </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('todate') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">To</label>
                                        <div class="col-md-9">
                                            <div class="input-group date">
                                                <input type="text" 
                                                class="form-control datepicker-autoClose"  
                                                placeholder="" 
                                                name="todate" 
                                                value="{{old('todate')}}"
                                                required="">

                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>

                                            @if ($errors->has('todate'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('todate') }}</strong>
                                              </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Description</label>

                                        <div class="col-md-9">
                                            <textarea class="form-control" name="description" rows="5">{{old('description')}}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                  <strong>{{ $errors->first('description') }}</strong>
                                              </span>
                                            @endif
                                        </div>
                                    </div>

                                    

                                    



                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-sm btn-danger pull-right m-r-5">
                                            <i class="fa fa-plus"></i>
                                            Create
                                        </button>
                                    </div>
                                
                            </form>
                            </div>
                        </div>
                        <!-- end panel -->
                    </div>

                    <div class="col-md-7">
                        {{-- @include('crop_year.list') --}}
                    </div>
                    <!-- end col-6 -->
                </div>
@endsection
