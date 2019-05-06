<script src="{{asset('/admin-assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
    {{-- <script src="https://code.jquery.com/jquery-latest.min.js')}}"></script> --}}
    <script src="{{asset('/admin-assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--[if lt IE 9]>
        <script src="{{asset('/admin-assets/crossbrowserjs/html5shiv.js')}}"></script>
        <script src="{{asset('/admin-assets/crossbrowserjs/respond.min.js')}}"></script>
        <script src="{{asset('/admin-assets/crossbrowserjs/excanvas.min.js')}}"></script>
    <![endif]-->
    <script src="{{asset('/admin-assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/parsley/dist/parsley.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-wizard/js/bwizard.js')}}"></script>
    <script src="{{asset('/admin-assets/js/form-wizards-validation.demo.min.js')}}"></script>

    <script src="{{asset('/admin-assets/intl-tel-input-master/build/js/intlTelInput.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/switchery/switchery.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/powerange/powerange.min.js')}}"></script>
    <script src="{{asset('/admin-assets/js/form-slider-switcher.demo.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/select2/dist/js/select2.min.js')}}"></script>

    <script src="{{asset('/admin-assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    {{-- <script src="{{asset('/admin-assets/js/form-plugins.demo.min.js')}}"></script> --}}
    <script src="{{asset('/admin-assets/plugins/DataTables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/admin-assets/js/table-manage-default.demo.min.js')}}"></script>

    <script src="{{asset('/admin-assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/masked-input/masked-input.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/password-indicator/js/password-indicator.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/jquery-tag-it/js/tag-it.min.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-daterangepicker/moment.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('/admin-assets/plugins/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('/admin-assets/js/form-plugins.demo.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('/admin-assets/plugins/fileinput/fileinput.min.js')}}"></script>

    <script src="{{asset('/admin-assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
    <script src="{{asset('/admin-assets/js/ui-modal-notification.demo.min.js')}}"></script>

    <script src="{{asset('admin-assets/plugins/toastr/toastr.js')}}"></script>

    <script src="{{asset('admin-assets/plugins/money/simple.money.format.js')}}"></script>

    {{-- <script src="build/js/countrySelect.min.js"></script> --}}
    
    <script src="{{asset('/js/dropzone.js')}}"></script>  

    <script src="{{asset('/admin-assets/js/apps.min.js')}}"></script>
    
    <script src="{{asset('/admin-assets/js/myscript.js')}}"></script>




    <script>
        $(document).ready(function() {
            App.init();
            // FormPlugins.init();

            $(".datatable").DataTable( {
              "aaSorting": []
            } );

            $("#country").select2();
            $(".select2").select2();
            // alert('theo');


            $(".selectpicker").selectpicker();

            $(".datepicker-autoClose").datepicker({
                todayHighlight:!0,
                autoclose:!0,
                format: "yyyy-mm-dd"
              });

            $(".input-daterange").datepicker({
                todayHighlight: !0,
                // autoclose:!0,
                format: "yyyy-mm-dd"
            });


            $(".file-simple-image").fileinput({
                showUpload: false,
                showCaption: false,
                browseClass: "btn btn-danger",
                // fileType: ".PNG"
            });

            $(".file-simple").fileinput({
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

            $('.file-simple .file-simple-image .file-simple-audio').on('fileloaded', function(event, file, previewId, index, reader) {
                // console.log("fileloaded");
                $(window).trigger('resize');
            });


            FormSliderSwitcher.init();
            TableManageDefault.init();



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


        function checkmax(row_id) {
            var max_qty = parseFloat( $('#'+row_id).find('.available_quantity').val() );
            var qty = parseFloat( $('#'+row_id).find('.quantity').val() );
            var unit_cost = parseFloat( $('#'+row_id).find('.unit_cost').val() );
            var total_cost_td = $('#'+row_id).find('.total_cost');
            var sum_total = $('#sum_total');
            
            // console.log(max_qty);
            // console.log(qty);

            if (qty < 0) {
                // console.log('true');
                $('#'+row_id).find('.quantity').val(max_qty);
            }

            var max_qty = parseFloat( $('#'+row_id).find('.available_quantity').val() );
            var qty = parseFloat( $('#'+row_id).find('.quantity').val() );
            var unit_cost = parseFloat( $('#'+row_id).find('.unit_cost').val() );
            var total_cost_td = $('#'+row_id).find('.total_cost');
            var sum_total = $('#sum_total');



            if (qty > max_qty) {
                // console.log('true');
                $('#'+row_id).find('.quantity').val(max_qty);
                qty = max_qty;
            }


            var total = unit_cost * qty;

            total_cost_td.html(total);


            var sum = 0;
            $('.total_cost').each(function(){
                sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
            });

            sum_total.html(sum);


        }

        function currency(amount){
            return amount.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "1,").toString();
        }

        function calTotal(){
            var qty_input = $('#quantity');
            var qty = qty_input.val();
            var price_input = $('#price');

            if(qty_input.val() == ""){
                qty = 0;
            }

            var total = parseInt( qty ) * parseFloat( price_input.val() );
            $('#total').html(total).simpleMoneyFormat();
        }


        function calTotalRow(quantity, price, total_span){
            var qty_input = $('#'+quantity);
            var qty = qty_input.val();
            var price_input = $('#'+price);
            var total_input = $('#'+total_span);

            if(qty_input.val() == ""){
                qty = 0;
            }

            var total = parseInt( qty ) * parseFloat( price_input.val() );
            // console.log(total);
            // console.log(currency(total));

            $('#'+total_span).html(total).simpleMoneyFormat();
        }




        function getTotal(unit_cost_input_id, qty_input_id, total_input_id) {
            var unit_cost = $('#'+unit_cost_input_id);
            var qty = $('#'+qty_input_id);
            var total = $('#'+total_input_id);

            total.val( unit_cost.val() * qty.val() );
            // console.log(qty.val());
        }


        function copyRow(main_container, base_row,){

            var itm = document.getElementById(base_row);

            var cln = itm.cloneNode(true);

            cln.id = "";
            $(cln).removeClass('item0');
            cln.style = "";

            /* get the inputs in the row */
            var inputs = $(cln).find("input");
            var textareas = $(cln).find("textarea");
            var selects = $(cln).find("select");
            
            /* get the row count */
            var rowlenght = $("#"+main_container+" .row").length;

            /* Change the input names to hold the correct index */
            inputs.each(function() {
              var new_name = $( this ).attr("name").replace("[0]", "["+rowlenght+"]");
              $( this ).attr("name", new_name);
              $( this ).attr("onkeyup", "calRow('item"+rowlenght+"')");
              $( this ).val("");
            });

            textareas.each(function() {
              var new_name = $( this ).attr("name").replace("[0]", "["+rowlenght+"]");
              $( this ).attr("name", new_name);
              $( this ).val("");
            });

            selects.each(function() {
              var new_name = $( this ).attr("name").replace("[0]", "["+rowlenght+"]");
              $( this ).attr("name", new_name);
              $( this ).val("");
              $( this ).addClass("select2");
            });



            $(cln).addClass("item"+rowlenght);

            document.getElementById(main_container).appendChild(cln);
            $(".select2").select2();
            $(".datepicker-autoClose").datepicker({
                todayHighlight:!0,
                autoclose:!0,
                format: "yyyy-mm-dd"
              });

        }

        function calRow(row) {
            var quantity_confirmed = parseFloat( $('.'+row).find('.quantity_confirmed').val() );
            var quantity_used = parseFloat( $('.'+row).find('.quantity_used').val() );

            var not_used = quantity_confirmed-quantity_used;
            console.log();

            $('.'+row).find('.quantity_used').html(not_used);
        }





        Dropzone.autoDiscover = false;


        function InitiateImageUploader() {

            //Set Initialized var to true
            UPLOAD_INITIALIZED = true;

            var delete_photobook_url =  "{{ route('portfolio-items.delete-images') }}";
            console.log(delete_photobook_url);
            // var total_photos_counter = 0;
            $("#my-dropzone").dropzone ({
                uploadMultiple: false,
                acceptedFiles: 'image/*',
                parallelUploads: 1,
                // maxFilesize: 16,
                // maxFiles: picture_upload_limit,
                previewTemplate: document.querySelector('#preview').innerHTML,
                addRemoveLinks: true,
                dictRemoveFile: 'Remove image',
                dictFileTooBig: 'Image is larger than 16MB',
                timeout: 10000,

                init: function () {
                    var dz = this;
                    this.on("removedfile", function (file) {
                        // var name = file.previewElement.querySelector('[data-dz-name]').innerHTML;
                        var id = file.previewElement.querySelector('[data-dz-id]').innerHTML;

                        $.ajax({
                        type: "POST",
                            url: delete_photobook_url,
                            data: {id: id, _token: $('[name="_token"]').val()},
                            dataType: 'json',
                            success: function (data) {
                                // total_photos_counter--;

                                // $("#counter").html(data.uploaded);
                                // checkAddToCart(data.uploaded)
                                console.log(data);
                            }
                        });
                        // $("#selected_count").html(dz.files.length);
                    });

                    this.on('error', function(file, response) {
                        if(typeof response === 'object'){
                            
                            if (response.exception == "Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException") {
                                $(file.previewElement).find('.dz-error-message').text("This Image is too Large");
                            }else{
                                $(file.previewElement).find('.dz-error-message').text(response.message);
                            }


                        }else{
                            $(file.previewElement).find('.dz-error-message').text(response);
                        }


                        if (!file.accepted) this.removeFile(file);

                        console.log(response);


                    });

                    
                },


                success: function (file, response) {
                    console.log(response);

                    var fileuploded = file.previewElement.querySelector("[data-dz-name]");
                    var fileuplodedid = file.previewElement.querySelector("[data-dz-id]");
                        fileuploded.innerHTML = response.newfilename;
                        fileuplodedid.innerHTML = response.newfileid;

                },


                renameFilename: function (filename) {
                    console.log(filename)
                    return new Date().getTime() + '_' + filename;
                }

            });

        }


        function InitiateVideoUploader() {

            //Set Initialized var to true
            UPLOAD_INITIALIZED = true;

            var delete_photobook_url =  "{{ route('portfolio-items.delete-videos') }}";
            console.log(delete_photobook_url);
            // var total_photos_counter = 0;
            $("#my-dropzone-video").dropzone ({
                uploadMultiple: false,
                acceptedFiles: 'video/*',
                parallelUploads: 1,
                // maxFilesize: 16,
                // maxFiles: picture_upload_limit,
                // previewTemplate: document.querySelector('#preview').innerHTML,
                // addRemoveLinks: true,
                dictRemoveFile: 'Remove Video',
                dictFileTooBig: 'Video is larger than 16MB',
                timeout: 10000,

                init: function () {
                    var dz = this;
                    this.on("removedfile", function (file) {
                        // var name = file.previewElement.querySelector('[data-dz-name]').innerHTML;
                        var id = file.previewElement.querySelector('[data-dz-id]').innerHTML;

                        $.ajax({
                        type: "POST",
                            url: delete_photobook_url,
                            data: {id: id, _token: $('[name="_token"]').val()},
                            dataType: 'json',
                            success: function (data) {
                                // total_photos_counter--;

                                // $("#counter").html(data.uploaded);
                                // checkAddToCart(data.uploaded)
                                console.log(data);
                            }
                        });
                        // $("#selected_count").html(dz.files.length);
                    });

                    this.on('error', function(file, response) {
                        if(typeof response === 'object'){
                            
                            if (response.exception == "Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException") {
                                $(file.previewElement).find('.dz-error-message').text("This Image is too Large");
                            }else{
                                $(file.previewElement).find('.dz-error-message').text(response.message);
                            }


                        }else{
                            $(file.previewElement).find('.dz-error-message').text(response);
                        }


                        if (!file.accepted) this.removeFile(file);

                        console.log(response);


                    });

                    
                },


                success: function (file, response) {
                    console.log(response);

                    // var fileuploded = file.previewElement.querySelector("[data-dz-name]");
                    // var fileuplodedid = file.previewElement.querySelector("[data-dz-id]");
                    //     fileuploded.innerHTML = response.newfilename;
                    //     fileuplodedid.innerHTML = response.newfileid;

                },


                renameFilename: function (filename) {
                    console.log(filename)
                    // return new Date().getTime() + '_' + filename;
                }

            });

        }


    </script>