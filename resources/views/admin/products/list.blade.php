<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title-box">
            <h3>All Products</h3>
            <span>A list of all Products</span>
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
                      <th width="30%">Prices</th>
                      <th width="10%"></th>
                      <th width="10%"></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($products as $product)
                    <tr>
                        <td><img src="{{route('products.images.thumb',['image'=>$product->image]) }}"></td>
                        <td>{{$product->name}}</td>
                        <td>
                          <span class="label label-default label-form">
                              GH₵ {{$product->price_per_extra}}
                          </span><br>
                          <span class="label label-success label-form">
                              $ {{$product->price_per_extra_d}}
                          </span><br>
                          <span class="label label-warning label-form">
                              T-Coin {{$product->price_per_extra_coin}}
                          </span>

                        </td>
                        <td>
                              <a class="btn btn-success btn-rounded" href="{{route('products.edit',['package'=>$product->id])}}">
                                <i class="fa fa-edit"></i>
                              </a>
                        </td>
                        <td>
                            <form action="{{route('products.destroy',['package'=>$product->id])}}"
                              method="POST" class="form-horizontal"
                              onsubmit="return confirm('Are you sure you want to delete ({{$product->name}}) ?');">
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