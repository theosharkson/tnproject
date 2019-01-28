
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
                    @foreach($portfolios as $portfolio)
                      <tr>
                          <td class="center">
                            <img src="{{route('portfolios.images.thumb',['image'=>$portfolio->image]) }}" style="height: 50px;" class="center-img"> <br>
                            {{$portfolio->name}}<br>
                              @if($portfolio->type == "photo")
                                <span class="label label-success">
                                    {{getPortfolioTypes()[$portfolio->type]}}
                                </span>
                              @endif
                              @if($portfolio->type == "video")
                                <span class="label label-danger">
                                    {{getPortfolioTypes()[$portfolio->type]}}
                                </span>
                              @endif
                          </td>
                          <td>
                            <a class="btn btn-success " href="{{route('add-portfolio-items',['portfolio'=>$portfolio->id])}}">
                              <i class="fa fa-gift"></i> Manage Items
                            </a>
                          </td>
                          <td>
                                <a class="btn btn-success btn-icon btn-circle btn-lg" href="{{route('portfolios.edit',['portfolio'=>$portfolio->id])}}">
                                  <i class="fa fa-edit"></i>
                                </a>
                          </td>
                          <td>
                              <form action="{{route('portfolios.destroy',['portfolio'=>$portfolio->id])}}"
                                method="POST" class="form-horizontal"
                                onsubmit="return confirm('Are you sure you want to delete ({{$portfolio->name}}) ?');">
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