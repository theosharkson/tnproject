@guest
   
@else
   @if(!empty(Auth::user()->tempOrder))

		@foreach(Auth::user()->tempOrder->packages as $key => $cart_item)
		     <div class="modal fade" id="cartModal-{{$key}}"  role="dialog" >
		         <div class="modal-dialog modal-sm" role="document">
		           <div class="modal-content">
		             <div class="modal-header">
		               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		               <div class="section-title mb-10">
		                 <h6><i class="fa fa-shopping-cart icon"></i> CART ITEM REMOVAL</h6>
		                 <h2>{{$cart_item->package->name}}</h2>
		                 <p>{{$cart_item->package->type->name}}</p>
		               </div>
		             </div>
		             <div class="modal-body" style="padding-top: 0px; padding-bottom:10px;">
		             	Are you sure you want to remove this package from your cart?
		             </div>
		             <div class="modal-footer" style="text-align: center; background: #f7f7f7;">
		               
		               
		               <form action="{{route('site.order-package.delete',['orderPackage'=>$cart_item->id])}}"  method="POST">
	                    {{ csrf_field() }} 

	                    	<button type="button" class="button gray small" data-dismiss="modal">Close</button>
	                    	
			               <button type="submit" class="button small" >
			               	<i class="fa fa-times-circle"></i>
			               	Remove
			               </button>

			           </form>

		             </div>
		           </div>
		         </div>

		       </div>
		@endforeach
   @endif
@endguest