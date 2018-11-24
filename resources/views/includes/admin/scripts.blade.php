

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/bootstrap/bootstrap.min.js')}}"></script>        
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->        
<script type='text/javascript' src="{{asset('/admin-assets/js/plugins/icheck/icheck.min.js')}}"></script>        
<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/morris/raphael-min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/morris/morris.min.js')}}"></script>       
<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/rickshaw/d3.v3.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/rickshaw/rickshaw.min.js')}}"></script>
<script type='text/javascript' src="{{asset('/admin-assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script type='text/javascript' src="{{asset('/admin-assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>                
<script type='text/javascript' src="{{asset('/admin-assets/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/bootstrap/bootstrap-timepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/owl/owl.carousel.min.js')}}"></script>                 

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- END THIS PAGE PLUGINS-->        

<!-- START TEMPLATE -->
{{-- <script type="text/javascript" src="{{asset('/admin-assets/js/settings.js')}}"></script> --}}

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins.js')}}"></script>        
<script type="text/javascript" src="{{asset('/admin-assets/js/actions.js')}}"></script>

<!-- END TEMPLATE -->

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/fileinput/fileinput.min.js')}}"></script>

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/bootstrap/bootstrap-select.js')}}"></script>

<script type="text/javascript" src="{{asset('/admin-assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>

 <script>
  $( function() {
    $( "#accordion" ).accordion();
    $(".fancybox").fancybox();
  } );
  </script>

<script src="{{asset('/admin-assets/assets/plugins/toastr/toastr.js')}}"></script>

<script src="{{asset('/admin-assets/js/plugins/smooth-signature-pad/assets/numeric-1.2.6.min.js')}}"></script> 
<script src="{{asset('/admin-assets/js/plugins/smooth-signature-pad/assets/bezier.js')}}"></script> 
<script src="{{asset('/admin-assets/js/plugins/smooth-signature-pad/jquery.signaturepad.js')}}"></script>
<script src="{{asset('/admin-assets/js/plugins/smooth-signature-pad/assets/json2.min.js')}}"></script>

@if(Request::route()->getName() == "admin")
    <script type="text/javascript" src="{{asset('/admin-assets/js/demo_dashboard.js')}}"></script>
@endif

<script>

    $(document).ready(function() {
        $('.signpad').signaturePad({
            drawOnly:true, 
            // drawBezierCurves:true, 
            lineTop:200
        });
    });

    $(".file-simple-image").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-danger",
        // fileType: ".PNG"
    });

    $(".file-simple-audio").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-info",
        browseIcon: "<i class='fa fa-microphone'></i> ",
        // fileType: ".PNG"
    });


    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight:'TRUE',
        autoclose: true,
    });

    $('.datatable-no-sort').dataTable( {
      "ordering": false
    } );

     $('.datatable').dataTable( {
      "ordering": false
    } );

    $(".file-simple").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-danger",
        // fileType: ".PNG"
    });

    $('.file-simple').on('fileloaded', function(event, file, previewId, index, reader) {
        // console.log("fileloaded");
        $(window).trigger('resize');
    });





            
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




    function copyRow(main_container, base_row,){

        var itm = document.getElementById(base_row);

        var cln = itm.cloneNode(true);

        cln.id = "";
        cln.style = "";

        /* get the inputs in the row */
        var inputs = $(cln).find("input");
        
        /* get the row count */
        var rowlenght = $("#"+main_container+" .row").length;

        /* Change the input names to hold the correct index */
        inputs.each(function() {
          var new_name = $( this ).attr("name").replace("[0]", "["+rowlenght+"]");
          $( this ).attr("name", new_name);
          $( this ).val("");
        });

        document.getElementById(main_container).appendChild(cln);

    }


</script>


