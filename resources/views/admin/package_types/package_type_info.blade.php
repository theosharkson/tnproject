<div class="panel panel-default add-shadow" >
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
        </div>
        <h4 class="panel-title">Package Type</h4>
    </div>
    <div class="panel-body">
        {{-- @if(checkPermission('can_view_log', 'contracts')) --}}
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="5%">Image</th>
                    <th width="40%">Name</th>
                    <th width="10%">Category</th>
                    <th width="10%">Description</th>
                </tr>
            </thead>
            <tbody>
                  <tr>
                      <td class="center">
                        <img src="{{route('package-type.images.thumb',['image'=>$packageType->image]) }}" style="height: 50px;" class="center-img"> 
                      </td>
                      <td>
                        {{$packageType->name}}
                      </td>
                      <td>
                        {{getTypeCategories()[$packageType->category]}}
                      </td>
                      <td>
                        {{$packageType->description}}
                      </td>

                     
                  </tr>
            </tbody>
        </table>
        {{-- @else
            @include('includes.no_permission')
        @endif --}}
    </div>
</div>