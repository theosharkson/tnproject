@extends('layouts.admin')

@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>                    
    <li><a href="{{route('features.create')}}">Application Features</a></li>                                      
    <li class="active">Add New</li>
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
                        <span>Add New</span>
                    </div>                                     
                    <ul class="panel-controls panel-controls-title">                                        
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                        </li>
                    </ul>                                    
                    
                </div>
                <div class="panel-body"> 
                    {{-- @if(checkPermission('can_add', 'features')) --}}
                        <form action="{{route('features.store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data"> 
                        {{ csrf_field() }} 

                            

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" 
                                    class="form-control"  
                                    placeholder="" 
                                    name="name" 
                                    value="{{old('name')}}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Slug</label>
                                <div class="col-md-9">
                                    <input type="text" 
                                    class="form-control"  
                                    placeholder="" 
                                    name="slug" 
                                    value="{{old('slug')}}">

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('slug') }}</strong>
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

                          <br>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                        Add Feature
                                    </button>
                                </div>
                            </div> 

                        </form>
                    {{-- @endif --}}
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
