<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title-box">
            <h3>All Staffs</h3>
            <span>A list of all staffs</span>
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
                      <th width="30%">Email</th>
                      <th width="30%">Role</th>
                      <th width="10%"></th>
                      <th width="10%"></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($staffs as $staff)
                    <tr>
                        <td>{{$staff->firstname}} {{$staff->lastname}}</td>
                        <td>{{$staff->email}}</td>
                        <td>{{$staff->type->name}}</td>
                        <td>
                              <a class="btn btn-success btn-rounded" href="{{route('staffs.edit',['id'=>$staff->id])}}">
                                <i class="fa fa-edit"></i>
                              </a>
                        </td>
                        <td>
                            <form action="{{route('staffs.destroy',['id'=>$staff->id])}}"
                              method="POST" class="form-horizontal"
                              onsubmit="return confirm('Are you sure you want to delete ({{$staff->name}}) ?');">
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