@include('includes.site.cart_item_removal_modal')

<!-- jquery -->
<script type="text/javascript" src="{{asset('site-assets/js/jquery-1.12.4.min.js')}}"></script>

<!-- plugins-jquery -->
<script type="text/javascript" src="{{asset('site-assets/js/plugins-jquery.js')}}"></script>

<!-- plugin_path -->
<script type="text/javascript">
var plugin_path = '{{url('site-assets/js')}}/';

console.log(plugin_path);
</script>
 

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('site-assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('site-assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- revolution custom --> 
<script type="text/javascript" src="{{asset('site-assets/revolution/js/revolution-custom.js')}}"></script> 

<script src="{{asset('/js/dropzone.js')}}"></script>  
<script src="{{asset('site-assets/js/money/simple.money.format.js')}}"></script>
<script src="{{asset('site-assets/js/accounting/accounting.js')}}"></script>

<script type="text/javascript" src="{{asset('site-assets/js/custom.js')}}"></script>

<script src="{{asset('site-assets/js/toastr/toastr.js')}}"></script>

<script type="text/javascript">
	function currency(value) {
		return accounting.formatMoney(value,"");
	}

	$(document).ready(function() {

		// Display Success messages
        @if(session()->has('success_message'))
            toastr.success('{{ session()->get('success_message') }}');
        @endif

        // Display Error messages
        @if(session()->has('error_message'))
            toastr.error('{{ session()->get('error_message') }}');
        @endif

        // Display Error messages
        @if(session()->has('warning_message'))
            toastr.warning('{{ session()->get('warning_message') }}');
        @endif

        // Display Error messages
        @if(session()->has('info_message'))
            toastr.info('{{ session()->get('info_message') }}');
        @endif


       });
</script>