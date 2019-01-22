
<div class="panel panel-inverse add-shadow" data-sortable-id="form-stuff-2">
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
        </div>
        <h4 class="panel-title">All Package Types</h4>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped datatable">
                <thead>
                    <tr>
                        <th width="50%">Name</th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                        <th width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($packagetypes as $packagetype)
                      <tr>
                          <td class="center">
                            <img src="{{route('package-type.images.thumb',['image'=>$packagetype->image]) }}" style="height: 50px;" class="center-img"> <br>
                            {{$packagetype->name}}
                          </td>
                          <td>
                            <a class="btn btn-success " href="{{route('add-packages',['packageType'=>$packagetype->id])}}">
                              <i class="fa fa-gift"></i> Manage Packages
                            </a>
                          </td>
                          <td>
                                <a class="btn btn-success btn-icon btn-circle btn-lg" href="{{route('package-types.edit',['packageType'=>$packagetype->id])}}">
                                  <i class="fa fa-edit"></i>
                                </a>
                          </td>
                          <td>
                              <form action="{{route('package-types.destroy',['packageType'=>$packagetype->id])}}"
                                method="POST" class="form-horizontal"
                                onsubmit="return confirm('Are you sure you want to delete ({{$packagetype->name}}) ?');">
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