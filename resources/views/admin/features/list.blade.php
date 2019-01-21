<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title-box">
            <h3>All App Features</h3>
            <span>A list of all available features</span>
        </div>                                     
        <ul class="panel-controls panel-controls-title">                                        
            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a>
            </li>
        </ul>                                    
        
    </div>
    <div class="panel-body"> 
      <div class="table-responsive">
          <table class="table table-bordered table-striped datatable">
              <thead>
                  <tr>
                      <th width="40%">Name</th>
                      <th width="50%">Description</th>
                      <th width="10%"></th>
                      {{-- <th width="10%"></th> --}}
                  </tr>
              </thead>
              <tbody>
                  @foreach($features as $feature)
                    <tr>
                        <td>
                          {{$feature->name}}<br>
                          <small>slug: {{$feature->slug}}</small>
                        </td>
                        <td>{{$feature->description}}</td>
                        <td>
                              <a class="btn btn-success btn-rounded" href="{{route('features.edit',['role'=>$feature->id])}}">
                                <i class="fa fa-edit"></i>
                              </a>
                        </td>
                        {{-- <td>
                            <form action="{{route('features.destroy',['role'=>$feature->id])}}"
                              method="POST" class="form-horizontal"
                              onsubmit="return confirm('Are you sure you want to delete ({{$feature->name}}) ?');">
                                <input name="_method" type="hidden" value="DELETE">
                                {{ csrf_field() }}
                                
                                <button type="submit" class="btn btn-danger btn-rounded">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

    </div>
</div>
<!-- END SALES BLOCK