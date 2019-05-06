@extends('layouts.site')

@section('content')

<section class="page-title smaller-title bg-overlay-black-60 parallax"  style="background: url({{asset('site-assets/images/slider/2.jpg')}})"
  data-jarallax='{"speed": 0.5}'>
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1><i class="fa fa-shopping-cart icon"></i> Your Cart</h1>
          <p>Manage Packages In Your Cart</p>
        </div>


        <ul class="page-breadcrumb">
          <li>
            <a href="{{route('site')}}">
              <i class="fa fa-home"></i> Home
            </a> 
            <i class="fa fa-angle-double-right"></i>
          </li>
          <li><span>Cart</span> </li>
       </ul>

     </div>
    </div> 
  </div>
</section>


<section class="shop grid page-section-ptb">
      <div class="container">
          

          <div class="row">
            {{-- <div class="col-lg-3 col-md-3">
              
              
             <div class="pattern  pl-20 pr-20 pt-40 pb-40 text-center add-shadow animated bounceInRight"
             style="background-image: url({{asset('site-assets/images/pattern/bg-pattern-3.jpg')}}); border-radius: 3px 6pc;"
             >
                <h3 class="pl-10"><i class="fa fa-money"></i> TOTAL PRICE:</h3>
                <h1 class="pl-10">{{getCurrencySymbol()}} <mark id="total_price">344</mark></h1>
              </div>
              
              
            </div> --}}


            <div class="col-lg-12 col-md-12 sm-mt-40">
              
              @if(!empty(Auth::user()->tempOrder))

                @php 
                $cart_total = 0;
                @endphp

                @foreach(Auth::user()->tempOrder->packages as $key => $cart_item)
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
                        
                        <span class="cart-remove-item" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove this package from your cart.">
                          <a href="javascript:void(0);" data-toggle="modal" data-target="#cartModal-{{$key}}"> 
                            <i class="fa fa-trash-o"></i> 
                          </a>
                         </span>

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
                                      
                                      {{-- 
                                      <div class="cart-close">
                                          <p 
                                             style="font-size: 35px;"
                                             onclick="removeElement('#added_extra_{{$key}}'); showElement('#extra_item_{{$key}}');">
                                            <i class="fa fa-times-circle"></i> 
                                          </p>
                                       </div> --}}
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

                              <a class="button small mt-20" href="{{route('edit-cart-item',['order_package'=>$cart_item->id])}}">
                                <i class="ti-pencil-alt2"></i>
                                Edit This Package
                              </a>
                           </div>
                      </div>
                   </div>
                  </div>
                 </div>

                 <div class="divider mt-40 mb-40"></div>

               @endforeach


               @if(Auth::user()->tempOrder->packages->count() < 1)
                 <div style="text-align: center; color: #c5c4c4;">
                   <h1>
                     <i class="ti-shopping-cart" style="color: #77420026; font-size: 200px;"></i>
                   </h1>
                   <h3 style="color: #c5c4c4;" class="grey">No Packaes In Cart</h3>
                 </div>
               @endif


              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                  <div class="gray-bg  pl-50 pr-50 pt-50 pb-50">
                    <table class="mb-30">
                      <tbody>
                        <tr>
                          <th class="pl-40"><h3>GRAND TOTAL:</h3> </th>
                          <td class="pl-40"><h3>{{getCurrencySymbol()}} {{currency($cart_total)}}</h3></td>
                        </tr>
                      </tbody>
                    </table>
                    <a href="#" class="button btn-block">Place Order Now <span class="icon-action-redo"></span></a>
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
  </section>

@endsection


@section('scripts')

  <script type="text/javascript">
    
  </script>
@endsection
