@extends('layouts.admin')

@section('title')

@endsection

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Extras</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        {{-- <i class="fa fa-university fa-2x"></i> --}}
        EXTRAS
        {{-- <small>header small text goes here...</small> --}}
    </h1>
    <!-- end page-header -->

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
                    <h4 class="panel-title">Add New Extra</h4>
                </div>
                <div class="panel-body">
                    <form action="{{route('extras.store')}}" class="form-horizontal" method="POST" enctype="multipart/form-data"
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

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">
                                Type
                            </label>

                            <div class="col-md-9">
                                <select name="type" class="select2 form-control">
                                    <option value=""  selected>Choose</option>
                                      @foreach(getExtraTypes() as $key => $type)
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

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label"> Price</label>
                            <div class="col-md-9">
                                <div class="input-group">                                            
                                    <span class="input-group-addon"> GH₵</span>
                                    <input type="number" 
                                    name="price" 
                                    class="form-control" 
                                    value="{{old('price')}}" 
                                    placeholder="Enter price here">
                                    <span class="input-group-addon">.00</span>
                                </div>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('price') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price_d') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label"> Price</label>
                            <div class="col-md-9">
                                <div class="input-group">                                            
                                    <span class="input-group-addon"> $</span>
                                    <input type="number" 
                                    name="price_d" 
                                    class="form-control" 
                                    value="{{old('price_d')}}" 
                                    placeholder="Enter price_d here">
                                    <span class="input-group-addon">.00</span>
                                </div>

                                @if ($errors->has('price_d'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('price_d') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price_coin') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label"> Price</label>
                            <div class="col-md-9">
                                <div class="input-group">                                            
                                    <span class="input-group-addon"> T-Coins </span>
                                    <input type="number" 
                                    name="price_coin" 
                                    class="form-control" 
                                    value="{{old('price_coin')}}" 
                                    placeholder="Enter price in $ here">
                                    <span class="input-group-addon">.00</span>
                                </div>

                                @if ($errors->has('price_coin'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('price_coin') }}</strong>
                                  </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Description</label>

                            <div class="col-md-9">
                                <textarea class="form-control" name="description" rows="10">{{old('description')}}</textarea>
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
                                Add Extra
                            </button>
                        </div>
                    
                </form>
                </div>
            </div>
            <!-- end panel -->
        </div>

        <div class="col-md-6">
            @include('admin.extras.list')
        </div>
        <!-- end col-6 -->
    </div>
@endsection
