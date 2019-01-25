<div class="panel panel-inverse add-shadow" data-sortable-id="form-stuff-2">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            </div>
            <h4 class="panel-title">All Extras</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive"> 
                <table class="table table-bordered table-striped datatable">
                    <thead>
                        <tr>
                            <th></th>
                            <th width="30%">Name</th>
                            <th width="30%">Price</th>
                            <th width="30%">Type</th>
                            <th width="10%"></th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($extras as $extra)
                          <tr>
                              <td>
                                <img src="{{route('extras.images.thumb',['image'=>$extra->image]) }}" style="height: 50px;">
                              </td>
                              <td>{{$extra->name}}</td>
                              <td>
                                <span class="label label-inverse">
                                    GH₵ {{$extra->price}}
                                </span><br>
                                <span class="label label-success">
                                    $ {{$extra->price_d}}
                                </span><br>
                                <span class="label label-warning">
                                    T-Coin {{$extra->price_coin}}
                                </span>
                              </td>
                              <td>{{getExtraTypes()[$extra->type]}}</td>
                              <td>
                                    <a class="btn btn-success btn-icon btn-circle btn-lg" href="{{route('extras.edit',['extra'=>$extra->id])}}">
                                      <i class="fa fa-edit"></i>
                                    </a>
                              </td>
                              <td>
                                  <form action="{{route('extras.destroy',['extra'=>$extra->id])}}"
                                    method="POST" class="form-horizontal"
                                    onsubmit="return confirm('Are you sure you want to delete ({{$extra->name}}) ?');">
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