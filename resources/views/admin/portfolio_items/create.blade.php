@extends('layouts.admin')

@section('title')

@endsection

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('portfolios.create')}}">Portfolios</a></li>
        <li class="active">Portfolio Items</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        {{-- <i class="fa fa-university fa-2x"></i> --}}
        PORTFOLIO ITEMS
        {{-- <small>header small text goes here...</small> --}}
    </h1>
    <!-- end page-header -->


    <div class="row">
        <div class="col-sm-12">
            @include('admin.portfolio.portfolio_info')
        </div>
    </div>

    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6">
            <!-- begin panel -->
            <div class="panel panel-danger add-shadow" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Add New Items</h4>
                </div>
                <div class="panel-body">
                    <form action="{{route('portfolio-items.store',['portfolio'=>$portfolio->id])}}" class="form-horizontal" method="POST" enctype="multipart/form-data"
                    onsubmit="return confirm('Are you sure you want to proceed ?');">
                    {{ csrf_field() }} 


                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">
                                Type
                            </label>

                            <div class="col-md-9">
                                <select name="type" class="select2 form-control">
                                    <option value=""  selected>Choose</option>
                                      @foreach(getPortfolioItemTypes() as $key => $type)
                                          <option @if(old('type') == $key) selected @endif
                                          value="{{$key}}">{{$type}}</option>
                                      @endforeach
                                </select>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('type') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Resource</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="file-simple"/>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('image') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Url</label>
                            <div class="col-md-9">
                                <input type="text" 
                                class="form-control"  
                                placeholder="" 
                                name="url" 
                                value="{{old('url')}}">

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('url') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>



                        <div class="col-md-12">
                            <button type="submit" class="btn btn-sm btn-danger pull-right m-r-5">
                                <i class="fa fa-plus"></i>
                                Add To Portfolio
                            </button>
                        </div>
                    
                </form>
                </div>
            </div>
            <!-- end panel -->
        </div>

        <div class="col-md-6">
            @include('admin.portfolio_items.list')
        </div>
        <!-- end col-6 -->
    </div>
@endsection
