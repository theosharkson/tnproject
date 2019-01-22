@extends('layouts.admin')

@section('title')

@endsection

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Package Types</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        {{-- <i class="fa fa-university fa-2x"></i> --}}
        PACKAGE TYPES
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
                    <h4 class="panel-title">Add New</h4>
                </div>
                <div class="panel-body">
                    <form action="{{route('package-types.store')}}" class="form-horizontal" method="POST" enctype="multipart/form-data"
                    onsubmit="return confirm('Are you sure you want to proceed ?');">
                    {{ csrf_field() }} 


                        <div class="form-group row {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Image</label>
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
                                Category
                            </label>

                            <div class="col-md-9">
                                <select name="category" class="select2 form-control">
                                    <option value=""  selected>Choose</option>
                                      @foreach(getTypeCategories() as $key => $category)
                                          <option @if(old('category') == $key) selected @endif
                                          value="{{$key}}">{{$category}}</option>
                                      @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('category') }}</strong>
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
                                value="{{old('name')}}"
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
            @include('admin.package_types.list')
        </div>
        <!-- end col-6 -->
    </div>
@endsection
