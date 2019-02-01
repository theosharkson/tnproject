@extends('layouts.admin')

@section('title')

@endsection

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('portfolios.create')}}">Portfolios</a></li>
        <li class="active">Modify</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        {{-- <i class="fa fa-university fa-2x"></i> --}}
        PORTFOLIOS
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
                    <h4 class="panel-title">Modify</h4>
                </div>
                <div class="panel-body">
                    <form action="{{route('portfolios.update',['portfolio'=>$portfolio->id])}}" class="form-horizontal" method="POST" enctype="multipart/form-data"
                        onsubmit="return confirm('Are you sure you want to proceed ?');">
                    
                    <input name="_method" type="hidden" value="PUT">
                    {{ csrf_field() }} 

                        @if($portfolio->image)
                            <div class="form-group">
                                <img class="center-img"  src="{{route('portfolios.images.thumb',['image'=>$portfolio->image]) }}">
                            </div> 
                        @endif

                        <div class="form-group row {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Change Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="file-simple"/>

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('image') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">
                                Type
                            </label>

                            <div class="col-md-9">
                                <select name="type" class="select2 form-control">
                                    <option value=""  selected>Choose</option>
                                      @foreach(getPortfolioTypes() as $key => $type)
                                          <option 
                                          @if(!empty(old('type')) and old('type') == $key)
                                              selected="" 
                                          @elseif($portfolio->type == $key)
                                              selected="" 
                                          @endif
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

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" 
                                class="form-control"  
                                placeholder="" 
                                name="name" 
                                value="{{old('name')?old('name'):$portfolio->name}}"
                                required="">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Description</label>

                            <div class="col-md-9">
                                <textarea class="form-control" name="description" rows="5">{{old('description')?old('description'):$portfolio->description}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>
                        



                        <div class="col-md-12">
                            <button type="submit" class="btn btn-sm btn-danger pull-right m-r-5">
                                <i class="fa fa-edit"></i>
                                Modify
                            </button>
                        </div>
                    
                </form>
                </div>
            </div>
            <!-- end panel -->
        </div>

        <div class="col-md-7">
            @include('admin.portfolio.list')
        </div>
        <!-- end col-6 -->
    </div>
@endsection
