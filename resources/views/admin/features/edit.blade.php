@extends('layouts.admin')

@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>                    
    <li><a href="{{route('features.create')}}">Application Features</a></li>                                      
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
                        <h3>Application Features</h3>
                        <span>Modify {{$feature->name}}</span>
                    </div>                                     
                    <ul class="panel-controls panel-controls-title">                                        
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                        </li>
                    </ul>                                    
                    
                </div>
                <div class="panel-body"> 
                  
                    <form action="{{route('features.update',['feature'=>$feature->id])}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data"> 
                    
                    <input name="_method" type="hidden" value="PUT">
                    {{ csrf_field() }}

                       
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Type</label>
                            <div class="col-md-9">
                                <input type="text" 
                                class="form-control"  
                                placeholder="" 
                                name="name" 
                                value="{{old('name')?old('name'):$feature->name}}">

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
                              <textarea class="form-control" name="description" rows="5">{{old('description')?old('description'):$feature->description}}</textarea>
                              @if ($errors->has('description'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                              @endif
                          </div>
                        </div>

                      <br>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                    Modify
                                </button>
                            </div>
                        </div> 

                    </form>
                </div>
            </div>
            <!-- END SALES BLOCK -->
            
        </div>






        <div class="col-md-6">
            
            @include('admin.features.list')
            
        </div>
    </div>
    
@endsection


@section('scripts')
<script type="text/javascript">
  

  		
</script>
@endsection
