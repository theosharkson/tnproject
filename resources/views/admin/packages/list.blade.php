<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title-box">
            <h3>All Packages</h3>
            <span>A list of all Packages</span>
        </div>                                     
        <ul class="panel-controls panel-controls-title">                                        
            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
            </li>
        </ul>                                    
        
    </div>
    <div class="panel-body"> 
      <div class="table-responsive">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th></th>
                      <th width="30%">Name</th>
                      <th width="30%">Price</th>
                      {{-- <th width="30%">Type</th> --}}
                      <th width="10%"></th>
                      <th width="10%"></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($packages as $package)
                    <tr>
                        <td><img src="{{route('packages.images.thumb',['image'=>$package->image]) }}"></td>
                        <td>{{$package->name}}</td>
                        <td>
                          <span class="label label-default label-form">
                              GH₵ {{$package->price}}
                          </span><br>
                          <span class="label label-success label-form">
                              $ {{$package->price_d}}
                          </span><br>
                          <span class="label label-warning label-form">
                              T-Coin {{$package->price_coin}}
                          </span>
                        </td>
                        <td>
                              <a class="btn btn-success btn-rounded" href="{{route('packages.edit',['package'=>$package->id])}}">
                                <i class="fa fa-edit"></i>
                              </a>
                        </td>
                        <td>
                            <form action="{{route('packages.destroy',['package'=>$package->id])}}"
                              method="POST" class="form-horizontal"
                              onsubmit="return confirm('Are you sure you want to delete ({{$package->name}}) ?');">
                                <input name="_method" type="hidden" value="DELETE">
                                {{ csrf_field() }}
                                
                                <button type="submit" class="btn btn-danger btn-rounded">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

    </div>
</div>
<!-- END SALES BLOCK