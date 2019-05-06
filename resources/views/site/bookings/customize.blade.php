@extends('layouts.site')

@section('content')
 
<section class="page-title smaller-title bg-overlay-black-60 parallax"  style="background: url({{route('packages.images.raw',['image'=>$package->image]) }}) repeat;"
  data-jarallax='{"speed": 0.7}'>
  <div class="container">
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>{{$package->name}}</h1>
          <p>Customize and add Extras</p>
        </div>


        <ul class="page-breadcrumb">
          <li>
            <a href="{{route('site')}}">
              <i class="fa fa-home"></i> Home
            </a>  
            <i class="fa fa-angle-double-right"></i>
          </li>
          {{-- <li><a href="#">page</a> <i class="fa fa-angle-double-right"></i></li> --}}
          <li><span>Customize Package</span> </li>
       </ul>

     </div>
    </div> 
  </div>
</section>


<section class="shop-single page-section-ptb">
  <div class="container">
    <div class="row">
       <div class="col-lg-10 col-md-10 col-md-offset-1">
         <div class="row">
           <div class="col-lg-12 col-md-12">
             <div class="product-detail clearfix">
              <div class="product-detail-title mb-20 sm-mt-40 text-center">
                <h4 class="mb-10 ">{{$package->type->name}} <br> {{$package->name}}</h4>
                <span>Thank you for chooseing this package. this package includes the following:</span>
              </div>

              {{-- <div class="clearfix mb-30">
                <div class="product-detail-price"><del>$39.99</del> <ins>$24.99</ins></div>
                
              </div>

              <div class="product-detail-quantity clearfix mb-40">
                <div class="input-group">
                  <input type="number" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                </div>
                <div class="product-detail add-to-cart">
                  <a class="button small" href="#">Add to cart</a>
                </div>
              </div> --}}
              

                 <div class="row">

                   <div class="col-sm-6">
                     <div class="product-detail-des mb-30">
                        <ul class="list list-unstyled list-arrow">
                          @php
                             $products = preg_split('/\n|\r\n?/', $package->description);
                             // dd($options);
                           @endphp
                           @foreach($products as $product)
                             <li>{{$product}}</li>
                           @endforeach
                        </ul>
                      </div>
                   </div>

                   <div class="col-sm-6">
                     <div class="pattern  pl-20 pr-20 pt-40 pb-40 text-center swing wow"
                     style="background-image: url({{asset('site-assets/images/pattern/bg-pattern-1.jpg')}});">
                        <h3 class="pl-10"><i class="fa fa-money"></i> Base Price:</h3>
                        <h3 class="pl-10"><mark>{{getCurrencySymbol()}} {{currency($package->$county_price)}}</mark></h3>
                        <input type="hidden" id="base_price" value="{{$package->$county_price}}">
                      </div>
                   </div>

                 </div>

                 <br>

                 <div class="product-detail-title mb-20 sm-mt-40 text-center">
                   <h4 class="mb-10 ">Add Extras</h4>
                   <span>Customize Package by adding extra deliverables to suite your needs</span>
                 </div>

                 <div class="product-detail-meta">
                   <div class="row mb-20">
                     <div class="col-lg-6 col-md-6">
                      <h5 style="margin-bottom: 0px;">
                        Available Extras
                      </h5>
                      <p>
                        <small>click on any to view details</small>
                      </p>
                        

                       <div class="sidebar-widgets-wrap">
                         <div class="sidebar-widget mb-40">

                           @foreach($extras as $key => $extra)

                             <div class="recent-item clearfix" id="extra_item_{{$key}}">
                                <div class="row">
                                  <div class="col-sm-8 m-0">
                                    <div class="recent-image">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-sm-{{$key}}">
                                          <img class="img-responsive" src="{{route('extras.images.thumb',['image'=>$extra->image]) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-info">
                                        <div class="recent-title">
                                             <a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-sm-{{$key}}">{{$extra->name}}</a> 
                                        </div>
                                        <div class="recent-meta">
                                           <ul class="list-style-unstyled">
                                              <li class="color">
                                                <mark>{{getCurrencySymbol()}} {{currency($extra->$county_price)}}</mark>
                                              </li>
                                              <li>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-sm-{{$key}}">
                                                  <i class="fa fa-eye"></i> details
                                                </a>
                                              </li>
                                          </ul>    
                                       </div>
                                    </div>
                                  </div>

                                  <div class="col-sm-4">
                                    <a href="javascript:void(0)" style="font-size: 10px;" 
                                        class="button border black icon x-small pull-right"
                                        onclick="$('#extra_item_{{$key}}').hide('slow'); $('html, body').animate({scrollTop: $('#all_added_extras').offset().top-200}, 500);  $('#extras_content_{{$key}} .cart-item').clone().prop('id', 'added_extra_{{$key}}').appendTo($('#user_extras')); calculateTotal()">
                                         add extra 
                                       <i class="fa fa-long-arrow-right"></i> 
                                     </a>

                                     <div id="extras_content_{{$key}}" style="display: none;">
                                       
                                       <div class="cart-item bounceInRight wow">
                                         <div class="cart-image">
                                           <img class="img-responsive" src="{{route('extras.images.thumb',['image'=>$extra->image]) }}" alt="">
                                         </div>
                                         <div class="cart-name clearfix">
                                           <strong style="padding-left:0px;">
                                             {{$extra->name}}
                                           </strong>
                                           <div class="cart-price">
                                             <ins>{{getCurrencySymbol()}} {{currency($extra->$county_price)}}</ins>
                                          </div>
                                         </div>
                                         @if($extra->type == 'deliverable')
                                           <div class="cart-name clearfix">
                                             <input 
                                               style="width: 90px; position: absolute; right: 67px;" 
                                               type="number" 
                                               class="form-control extra_qty_{{$extra->id}}" 
                                               name="extras[{{$key}}][quantity]"
                                               placeholder="Qty"
                                               value="1"
                                               onkeyup="calculateExtraRow('extra_base_price_{{$extra->id}}', 'extra_price_{{$extra->id}}', 'extra_qty_{{$extra->id}}');" 
                                               onchange="calculateExtraRow('extra_base_price_{{$extra->id}}', 'extra_price_{{$extra->id}}', 'extra_qty_{{$extra->id}}');" 
                                               onMouseUp="calculateExtraRow('extra_base_price_{{$extra->id}}', 'extra_price_{{$extra->id}}', 'extra_qty_{{$extra->id}}');"
                                               min="1">

                                               <input 
                                               type="hidden"
                                               class="extra_base_price_{{$extra->id}}"
                                               value="{{$extra->$county_price}}">
                                           </div>
                                         @endif
                                         <input 
                                           type="hidden"
                                           value="{{$extra->id}}"
                                           name="extras[{{$key}}][extra_id]">
                                           <input 
                                           type="hidden"
                                           class="extra_price extra_price_{{$extra->id}}"
                                           value="{{$extra->$county_price}}">
                                                 
                                         <div class="cart-close">
                                             <p 
                                                style="font-size: 35px;"
                                                onclick="removeElement('#added_extra_{{$key}}'); showElement('#extra_item_{{$key}}');">
                                               <i class="fa fa-times-circle"></i> 
                                             </p>
                                          </div>
                                       </div>

                                     </div>

                                  </div>
                                  
                                  

                                  <div class="modal fade bs-example-modal-sm-{{$key}}" tabindex="-1" role="dialog" >
                                    <div class="modal-dialog modal-sm" role="document">
                                      <div class="modal-content bg-overlay-black-60" style="background: url({{route('extras.images.large',['image'=>$extra->image]) }}); position: initial;">
                                         <div class="modal-header" >
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <div class="section-title mb-10">
                                          <h6 class="text-white">EXTRAS</h6>
                                          <h2 class="text-white">TEAM NHYIRA</h2>
                                          <p class="text-white">{{$extra->name}}</p>
                                        </div>
                                          </div>
                                          <div class="modal-body text-white" >
                                            @if(!empty($extra->description))
                                              <span style="margin: 0px 5px 0px 0px;" class="dropcap border">{{substr($extra->description, 0 , 1)}}</span>
                                              {{ substr($extra->description, 1)}}
                                            @else

                                            @endif
                                           
                                          </div>
                                          <div class="modal-footer">
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>          

                              </div>
                            @endforeach
                         </div>
                       </div>

                     </div>

                     

                     <form method="POST" id="order_form" action="{{ route('orders.store') }}" >
                      @csrf

                      <input type="hidden" name="package_id" value="{{$package->id}}">
                       <div class="col-lg-6 col-md-6" id="all_added_extras">
                          <h5 style="margin-bottom: 0px;">
                            Your Added Extras
                          </h5>
                          <p>
                            <small>Customize your package by adding any of our extras</small>
                          </p>

                          <div class="row" id="user_extras">

                            

                          </div>

                       </div>
                     </form>
                   </div>

                   <div class="row">
                     <div class="col-sm-12">
                       <div class="pattern  pl-20 pr-20 pt-40 pb-40 text-center add-shadow animated bounceInRight"
                       style="background-image: url({{asset('site-assets/images/pattern/bg-pattern-3.jpg')}}); border-radius: 3px 6pc;"
                       >
                          <h3 class="pl-10"><i class="fa fa-money"></i> TOTAL PRICE:</h3>
                          <h1 class="pl-10">{{getCurrencySymbol()}} <mark id="total_price">{{currency($package->$county_price)}}</mark></h1>
                        </div>
                     </div>
                     <div class="col-sm-12 text-center">
                      <button 
                        onclick="$('#order_form').submit();"
                        class="button small mt-30">
                        <span> Add to cart <i style="font-size: 20px; line-height: 10px;" class="ti-shopping-cart"></i></span> 
                      </button>
                     </div>
                   </div>

                 </div>

              

               <div class="product-detail-social">
                  <span>Share:</span>
                  <ul class="list-style-none">
                     <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                     <li><a href="#"> <i class="fa fa-envelope-o"></i> </a></li>
                   </ul>
               </div>

         </div>
       </div>

     </div>
   </div>

  </div>
</div>
</section>


@endsection


@section('scripts')

  <script type="text/javascript">
    function removeElement(ele) {

      var new_ele = $(ele);

      new_ele.hide('slow',function() {
        new_ele.remove();
        calculateTotal();
      });
    }

    function showElement(ele) {
      
      var new_ele = $(ele);

      new_ele.show('slow',function() {
        // new_ele.remove();
      });
    }


    function calculateTotal() {
      var base_price = parseFloat($('#base_price').val());
      var extras = $('#all_added_extras .extra_price');

      var added_extras_total = 0;

      $.each( extras, function( key, extra_price ) {
        added_extras_total = parseFloat(added_extras_total) + parseFloat($(extra_price).val());
      });

      // console.log(base_price);
      var total = added_extras_total + base_price;

      $('#total_price').html(currency(total));
      // console.log(total);
    }

    function calculateExtraRow(base_price, price, qty) {
      var quantity = parseInt($('#all_added_extras  .'+qty).val());
      console.log(quantity);

      if(!$.isNumeric(quantity)){
          $('#all_added_extras  .'+qty).val(1);
      }

      quantity = parseInt($('#all_added_extras  .'+qty).val());

      if (quantity <= 0) {
          // console.log('true');
          $('#all_added_extras  .'+qty).val(1);
      }


      var base_price = parseFloat($('#all_added_extras  .'+base_price).val());
      // var price = parseFloat($('#all_added_extras  .'+price).val());
      var quantity = parseInt($('#all_added_extras  .'+qty).val());
      var price_input = $('#all_added_extras  .'+price);


      var new_price = base_price * quantity;

      price_input.val(new_price);

      calculateTotal();
    }

  </script>
@endsection
