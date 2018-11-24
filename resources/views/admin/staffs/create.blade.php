@extends('layouts.admin')

@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{route('dashboard')}}">Dashboard</a></li>                                         
    <li><a href="{{route('staffs.create')}}">Staffs</a></li>                                         
    <li class="active">Add Form</li>
</ul>
@endsection

@section('content')

    <div class="col-md-6">
            
            <!-- START SALES BLOCK -->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>ADD STAFF</h3>
                        <span>Add a new staff</span>
                    </div>                                     
                    <ul class="panel-controls panel-controls-title">                                        
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
                        </li>
                    </ul>                                    
                    
                </div>
                <div class="panel-body"> 
                    <div class="card-body">
                        <form method="POST" action="{{ route('staffs.store') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label class="col-md-4 col-form-label text-md-right">User Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" id="file-simple"/>

                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                          <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            </div>

                            
                            <div class="form-group row {{ $errors->has('user_type') ? ' has-error' : '' }}">
                                <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>

                                <div class="col-md-8">
                                    <select id="user_type" name="user_type" class="form-control select" data-live-search="true">
                                      <option value=""  selected>Choose</option>
                                        @foreach($user_types as $user_type)
                                            <option @if(old('user_type') == $user_type->id) selected @endif
                                            value="{{$user_type->id}}">{{$user_type->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('user_type'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('user_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('firstname') ? ' has-error' : '' }}">
                                <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                <div class="col-md-8">
                                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                    @if ($errors->has('firstname'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                <div class="col-md-8">
                                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" autofocus>

                                    @if ($errors->has('lastname'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-8">
                                    <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-8">
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" autofocus>

                                    @if ($errors->has('address'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                                <div class="col-md-8">
                                    <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" autofocus>

                                    @if ($errors->has('location'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            


                            <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>


                            


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Staff') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- END SALES BLOCK -->
            
        </div>

        <div class="col-md-6">
            
            @include('admin.staffs.list')
            
        </div>
    
@endsection


@section('scripts')
<script type="text/javascript">
  
    $("#file-simple").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-danger",
        // fileType: ".PNG"
    });
</script>

@endsection
