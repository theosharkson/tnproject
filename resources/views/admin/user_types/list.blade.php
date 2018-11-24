<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title-box">
            <h3>All User Types</h3>
            <span>A list of all user types</span>
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
                      <th width="30%">Name</th>
                      {{-- <th width="30%">Permissions</th> --}}
                      <th width="30%">Description</th>
                      <th width="10%"></th>
                      <th width="10%"></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($user_types as $user_type)
                    <tr>
                        <td>{{$user_type->name}}</td>
                        {{-- <td></td> --}}
                        <td>{{$user_type->description}}</td>
                        <td>
                              <a class="btn btn-success btn-rounded" href="{{route('user-types.edit',['role'=>$user_type->id])}}">
                                <i class="fa fa-edit"></i>
                              </a>
                        </td>
                        <td>
                            <form action="{{route('user-types.destroy',['role'=>$user_type->id])}}"
                              method="POST" class="form-horizontal"
                              onsubmit="return confirm('Are you sure you want to delete ({{$user_type->name}}) ?');">
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