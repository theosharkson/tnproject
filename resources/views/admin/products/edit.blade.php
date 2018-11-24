@extends('layouts.admin')

@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>                           
    <li><a href="{{route('products.create')}}">Products</a></li>                           
    <li class="active">Edit</li>
</ul>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        
        <!-- START SALES BLOCK -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Products</h3>
                    <span>Edit Products</span>
                </div>                                     
                <ul class="panel-controls panel-controls-title">                                        
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                    </li>
                </ul>                                    
                
            </div>
            <div class="panel-body">                                    
                
                <form action="{{route('products.update',['product'=>$product->id])}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data"> 
                    
                    <input name="_method" type="hidden" value="PUT">
                    {{ csrf_field() }}

                    @if($product->image)
                        <div class="form-group">
                            <img class="center-img"  src="{{route('products.images.thumb',['image'=>$product->image]) }}">
                        </div> 
                    @endif

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Products Name</label>
                        <div class="col-md-9">
                            <input type="text" 
                            class="form-control"  
                            placeholder="Enter name here" 
                            name="name" 
                            value="{{old('name')?old('name'):$product->name}}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
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


                    <div class="form-group{{ $errors->has('price_per_extra') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Price of extra 1</label>
                        <div class="col-md-9">
                            
                            <div class="input-group">                                            
                                <span class="input-group-addon"> GH₵</span>
                                <input type="number" 
                                name="price_per_extra" 
                                class="form-control" 
                                value="{{old('price_per_extra')?old('price_per_extra'):$product->price_per_extra}}" 
                                placeholder="Enter price here">
                                <span class="input-group-addon">.00</span>
                            </div>

                            @if ($errors->has('price_per_extra'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('price_per_extra') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('price_per_extra_d') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Price of extra 1</label>
                        <div class="col-md-9">
                            
                            <div class="input-group">                                            
                                <span class="input-group-addon"> $</span>
                                <input type="number" 
                                name="price_per_extra_d" 
                                class="form-control" 
                                value="{{old('price_per_extra_d')?old('price_per_extra_d'):$product->price_per_extra_d}}" 
                                placeholder="Enter $ here">
                                <span class="input-group-addon">.00</span>
                            </div>

                            @if ($errors->has('price_per_extra_d'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('price_per_extra_d') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('price_per_extra_coin') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Price of extra 1</label>
                        <div class="col-md-9">
                            
                            <div class="input-group">                                            
                                <span class="input-group-addon"> T-Coins </span>
                                <input type="number" 
                                name="price_per_extra_coin" 
                                class="form-control" 
                                value="{{old('price_per_extra_coin')?old('price_per_extra_coin'):$product->price_per_extra_coin}}" 
                                placeholder="Enter price in T-Coins here">
                                <span class="input-group-addon">.00</span>
                            </div>

                            @if ($errors->has('price_per_extra_coin'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('price_per_extra_coin') }}</strong>
                              </span>
                            @endif
                        </div>
                    </div> 


                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description" rows="10">{{old('description')?old('description'):$product->description}}</textarea>
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
                                <i class="fa fa-edit"></i>
                                Modify Product
                            </button>
                        </div>
                    </div> 

                </form>

            </div>
        </div>
        <!-- END SALES BLOCK -->
        
    </div>
    <div class="col-md-6">
        
        @include('admin.products.list')
        
    </div>
</div>

@endsection

@section('scripts')
<script>
                 
</script>
@endsection
