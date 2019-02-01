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
                    @if($portfolio->type == 'photo')
                        <form method="post" action="{{route('portfolio-items.store-images',['portfolio'=>$portfolio->id])}}"
                              enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                            {{ csrf_field() }}

                            {{-- <input type="hidden" id="image_code" value="{{$image_code}}" name="image_code"> --}}

                            <div class="dz-message">
                                <div class="col-xs-12">
                                    <div class="message">
                                        <p>Drop Photos here or Click to Upload</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fallback">
                                <input type="file" name="file" multiple>
                            </div>
                        </form>

                        {{--Dropzone Preview Template--}}
                        <div id="preview" style="display: none;">

                            <div class="dz-preview dz-file-preview">
                                <div class="dz-image"><img data-dz-thumbnail /></div>

                                <div class="dz-details">
                                    <div class="dz-size"><span data-dz-size></span></div>
                                    <div class="dz-filename"><span data-dz-name></span></div>
                                    <div style="display: none;"><span data-dz-id></span></div>
                                </div>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>

                                <div class="dz-error-message"><span data-dz-errormessage></span></div>



                                <div class="dz-success-mark">

                                    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                        <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                        <title>Check</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                        </g>
                                    </svg>

                                </div>
                                <div class="dz-error-mark">

                                    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                        <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                        <title>error</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#ff2828" fill-opacity="0.816519475">
                                                <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        {{--End of Dropzone Preview Template--}}
                    @else
                        {{-- <form action="{{route('portfolio-items.store',['portfolio'=>$portfolio->id])}}" class="form-horizontal" method="POST" enctype="multipart/form-data"
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
                            
                        </form> --}}

                        <form method="post" action="{{route('portfolio-items.store-videos',['portfolio'=>$portfolio->id])}}"
                              enctype="multipart/form-data" class="dropzone" id="my-dropzone-video">
                            {{ csrf_field() }}

                            {{-- <input type="hidden" id="image_code" value="{{$image_code}}" name="image_code"> --}}

                            <div class="dz-message">
                                <div class="col-xs-12">
                                    <div class="message">
                                        <p>Drop Videos here or Click to Upload</p>
                                    </div>
                                </div>
                            </div>
                            <div class="fallback">
                                <input type="file" name="file" multiple>
                            </div>
                        </form>

                        {{--Dropzone Preview Template--}}
                        <div id="preview" style="display: none;">

                            <div class="dz-preview dz-file-preview">
                                <div class="dz-image"><img data-dz-thumbnail /></div>

                                <div class="dz-details">
                                    <div class="dz-size"><span data-dz-size></span></div>
                                    <div class="dz-filename"><span data-dz-name></span></div>
                                    <div style="display: none;"><span data-dz-id></span></div>
                                </div>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>

                                <div class="dz-error-message"><span data-dz-errormessage></span></div>



                                <div class="dz-success-mark">

                                    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                        <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                        <title>Check</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                        </g>
                                    </svg>

                                </div>
                                <div class="dz-error-mark">

                                    <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                        <!-- Generator: Sketch 3.2.1 (9971) - http://www.bohemiancoding.com/sketch -->
                                        <title>error</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs></defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#ff2828" fill-opacity="0.816519475">
                                                <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        {{--End of Dropzone Preview Template--}}

                    @endif
                    



                
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

@section('scripts')
    <script type="text/javascript">

        InitiateImageUploader();
        InitiateVideoUploader();
    </script>
@endsection