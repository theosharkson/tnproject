<div class="modal fade bs-example-modal-lg{{$key}}" role="dialog" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="section-title mb-10">
        <h6> 
          <i class="ti-shopping-cart-full"></i>
          ORDER PACKAGE DETAILS
        </h6>
      </div>
      </div>
      <div class="modal-body">
        
          <div class="row">

            <div class="col-lg-12 col-md-12 sm-mt-40">
              
              @if(!empty($pending_order))

                @php 
                $cart_total = 0;
                @endphp

                @foreach($pending_order->packages as $key => $cart_item)
                   @php 
                      $cart_item_total = getOrderPackagePrice($cart_item->id);
                      $cart_total = $cart_total + $cart_item_total;
                   @endphp

                  <div class="row">
                   <div class="product listing">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                       <div class="product-image animated fadeIn">
                           <img class="img-responsive center-block" src="{{route('packages.images.cartthumb',['image'=>$cart_item->package->image]) }}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-8"> 
                        
                        {{-- <span class="cart-remove-item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove this package from your cart.">
                          <a href="javascript:void(0);" data-toggle="modal" data-target="#cartModal-{{$key}}"> 
                            <i class="fa fa-trash-o"></i> 
                          </a>
                         </span>
 --}}
                        <div class="product-des text-left">
                           <div class="product-title">
                             <h2 href="shop-single.html">{{$cart_item->package->name}}</h2>
                             <h5>{{$cart_item->package->type->name}}</h5>
                           </div>
                           
                        <div class="product-price">
                              <ins>{{getCurrencySymbol()}}{{currency($cart_item_total)}}</ins>
                           </div>
                           <div class="product-info mt-20">
                              
                              <div class="row">
                                <div class="col-sm-6 mb-30">
                                  <h5> <i class="ti-gift"></i> Package Includes</h5>
                                  <ul class="list list-unstyled list-arrow">
                                    @php
                                       $products = preg_split('/\n|\r\n?/', $cart_item->package->description);
                                       // dd($options);
                                     @endphp
                                     @foreach($products as $product)
                                       <li>{{$product}}</li>
                                     @endforeach
                                  </ul>
                                </div>

                                <div class="col-sm-6">
                                  <h5> <i class="ti-package"></i> Your Extras</h5>

                                  @foreach($cart_item->orderPackageExtras as $order_extra)
                                    @php 
                                      $qty = $order_extra->quantity?$order_extra->quantity:1;
                                    @endphp
                                    <div class="cart-item animated bounceInRight">
                                      <div class="cart-image">
                                        <img class="img-responsive" src="{{route('extras.images.thumb',['image'=>$order_extra->extra->image]) }}" alt="">
                                      </div>
                                      <div class="cart-name clearfix">
                                        <strong style="padding-left:0px;">
                                          
                                          @if($order_extra->extra->type == 'deliverable')
                                              {{$order_extra->quantity}}
                                          @endif

                                          {{$order_extra->extra->name}}
                                        </strong>
                                        <div class="cart-price">
                                          <ins>{{getCurrencySymbol()}} {{currency($order_extra->extra->$county_price * $qty)}}</ins>
                                       </div>
                                      </div>
                                      
                                    </div>
                                  @endforeach

                                  @if($cart_item->orderPackageExtras->count() < 1)
                                    <div style="text-align: center; color: #c5c4c4; margin-top: 40px;">
                                      <h1>
                                        <i class="ti-package" style="color: #c5c4c426; font-size: 100px;"></i>
                                      </h1>
                                      <small class="grey">You Added No Extra</small>
                                    </div>
                                  @endif
                                </div>


                              </div>
{{-- 
                              <a class="button small mt-20" href="{{route('edit-cart-item',['order_package'=>$cart_item->id])}}">
                                <i class="ti-pencil-alt2"></i>
                                Edit This Package
                              </a> --}}
                           </div>
                      </div>
                   </div>
                  </div>
                 </div>

                 {{-- <div class="divider mt-40 mb-40"></div> --}}
                 <div class="divider dashed mt-40 mb-40"></div>

               @endforeach


               @if($pending_order->packages->count() < 1)
                 <div style="text-align: center; color: #c5c4c4;">
                   <h1>
                     <i class="ti-shopping-cart" style="color: #77420026; font-size: 200px;"></i>
                   </h1>
                   <h3 style="color: #c5c4c4;" class="grey">No Packaes In Cart</h3>
                 </div>
               @endif


              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="gray-bg  pl-50 pr-50 pt-50 pb-10 text-center " style="background-image: url({{asset('site-assets/images/pattern/bg-pattern-3.jpg')}});">
                    
                    <h3 class="pb-30" >
                      GRAND TOTAL: 
                      <strong>{{getCurrencySymbol()}}{{currency($cart_total)}}</strong>
                    </h3>
                   
                    {{-- <a class="button small btn-block" href="{{route('cart.terms')}}">
                      
                      <span> Checkout <i style="font-size: 15px; line-height: 5px;" class="ti-archive"></i></span> 
                    </a>
 --}}
                  </div>
                </div>
              </div>

             @else

                <div style="text-align: center; color: #c5c4c4;">
                   <h1>
                     <i class="ti-shopping-cart" style="color: #77420026; font-size: 200px;"></i>
                   </h1>
                   <h3 style="color: #c5c4c4;" class="grey">No Packaes In Cart</h3>
                 </div>

             @endif
            
            </div>


          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="button gray" data-dismiss="modal">Close</button>
     </div>
    </div>
  </div>
</div>