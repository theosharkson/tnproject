@extends('layouts.admin')

@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>                                         
    <li><a href="{{route('packages.create')}}">Staffs</a></li>                                         
    <li class="active">Modify</li>
</ul>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        
        <!-- START SALES BLOCK -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Package</h3>
                    <span>Modify {{$package->name}} Package</span>
                </div>                                     
                <ul class="panel-controls panel-controls-title">                                        
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                    </li>
                </ul>                                    
                
            </div>
            <div class="panel-body">                                    
                
                <form action="{{route('packages.update',['package'=>$package->id])}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data"> 
                    
                    <input name="_method" type="hidden" value="PUT">
                    {{ csrf_field() }}

                    @if($package->image)
                        <div class="form-group">
                            <img class="center-img"  src="{{route('packages.images.thumb',['image'=>$package->image]) }}">
                        </div> 
                    @endif

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Package Name</label>
                        <div class="col-md-9">
                            <input type="text" 
                            class="form-control"  
                            placeholder="Enter name here" 
                            name="name" 
                            value="{{old('name')?old('name'):$package->name}}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Package Image</label>
                        <div class="col-md-9">
                            <input type="file" name="image" class="file-simple"/>

                            @if ($errors->has('image'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('image') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div> 


                    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Package Price</label>
                        <div class="col-md-9">
                            
                            <div class="input-group">                                            
                                <span class="input-group-addon"> GH₵</span>
                                <input type="number" 
                                name="price" 
                                class="form-control" 
                                value="{{old('price')?old('price'):$package->price}}" 
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
                        <label class="col-md-3 control-label">Package Price</label>
                        <div class="col-md-9">
                            
                            <div class="input-group">                                            
                                <span class="input-group-addon"> $</span>
                                <input type="number" 
                                name="price_d" 
                                class="form-control" 
                                value="{{old('price_d')?old('price_d'):$package->price_d}}" 
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
                        <label class="col-md-3 control-label">Package Price</label>
                        <div class="col-md-9">
                            
                            <div class="input-group">                                            
                                <span class="input-group-addon"> T-Coins </span>
                                <input type="number" 
                                name="price_coin" 
                                class="form-control" 
                                value="{{old('price_coin')?old('price_coin'):$package->price_coin}}" 
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


                    <div class="form-group{{ $errors->has('package_products') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Attach Products</label>
                        <div class="col-md-9">
                            
                            @foreach($products as $product)
                                <label>
                                    <input type="checkbox" value="{{$product->id}}" name="package_products[]"
                                    @if(!empty($package->products->where('id',$product->id)->first() ) )
                                    checked="" 
                                    @endif
                                    >
                                    {{$product->name}}
                                </label> <br>
                            @endforeach

                            @if ($errors->has('package_products'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('package_products') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div> 



                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description" rows="10">{{old('description')?old('description'):$package->description}}</textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right">
                                <i class="fa fa-plus"></i>
                                Add Package
                            </button>
                        </div>
                    </div> 

                </form>

            </div>
        </div>
        <!-- END SALES BLOCK -->
        
    </div>
    <div class="col-md-6">
        
        @include('admin.packages.list')
        
    </div>
</div>

@endsection

@section('scripts')
<script>
                 
</script>
@endsection
