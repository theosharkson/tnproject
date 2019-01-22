<div class="panel panel-inverse add-shadow" data-sortable-id="form-stuff-2">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
            <h4 class="panel-title">All Packages</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive"> 
                <table class="table table-bordered table-striped datatable">
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
                        @foreach($packages->where('type_id', $packageType->id) as $package)
                          <tr>
                              <td>
                                <img src="{{route('packages.images.thumb',['image'=>$package->image]) }}" style="height: 50px;">
                              </td>
                              <td>{{$package->name}}</td>
                              <td>
                                <span class="label label-inverse">
                                    GH₵ {{$package->price}}
                                </span><br>
                                <span class="label label-success">
                                    $ {{$package->price_d}}
                                </span><br>
                                <span class="label label-warning">
                                    T-Coin {{$package->price_coin}}
                                </span>
                              </td>
                              <td>
                                    <a class="btn btn-success btn-icon btn-circle btn-lg" href="{{route('packages.edit',['packageType'=>$packageType->id,'package'=>$package->id])}}">
                                      <i class="fa fa-edit"></i>
                                    </a>
                              </td>
                              <td>
                                  <form action="{{route('packages.destroy',['packageType'=>$packageType->id,'package'=>$package->id])}}"
                                    method="POST" class="form-horizontal"
                                    onsubmit="return confirm('Are you sure you want to delete ({{$package->name}}) ?');">
                                      <input name="_method" type="hidden" value="DELETE">
                                      {{ csrf_field() }}
                                      
                                      <button type="submit" class="btn btn-danger btn-icon btn-circle btn-lg">
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