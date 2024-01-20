@extends('website.layouts.master')
@section('content')
    <script src="{{url('js/custom.js')}}"></script>
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" href="{{url('assets/css/plugins/select2.min.css')}}">
    <script src="{{url('assets/js/plugins/select2.full.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <main id="main" class="mt-5">
        <section id="contact" class="contact">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-container">
                            <div class="tab-accordian">
                                <div class="titleWrapper inactive">
                                    <h4>Request for new customer?</h4>
                                    <div class="collapse-icon">
                                        <div class="acc-close"></div>
                                        <div class="acc-open"></div>
                                    </div>
                                </div>
                                <div id="descwrapper" class="desWrapper">
                                    <form id="add_form" method="post" role="form" class="row">
                                        @csrf
                                        <div class="col-md-12">
                                            <h5>Contact Person Details</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="add_contact_type">Type</label>
                                                <select class="form-control" id="add_contact_type" name="add_contact_type">
                                                    <option selected disabled="disabled">--Select Type</option>
                                                    <option value="principal">Principal</option>
                                                    <option value="purchase">Purchase</option>
                                                    <option value="account">Account</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="add_contact_name">Name</label>
                                                <input type="text" class="form-control" id="add_contact_name" name="add_contact_name" placeholder="i.e, Manzoor Ali">
                                            </div>
                                         </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_contact_email">Email</label>
                                                <input type="email" class="form-control" id="add_contact_email" name="add_contact_email" placeholder="i.e, manzoor@company.com">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_contact_phone">Phone</label>
                                                <input type="text" class="form-control" id="add_contact_phone" name="add_contact_phone" placeholder="i.e, +92 304 123 3219">
                                            </div>
                                        </div>
                                        <div class="col-md-12 border-bottom my-2"></div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="customer">Customer Name</label>
                                                <input type="text" class="form-control" placeholder="e.g US Denim Mills (Pvt.) Ltd." name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="plant" class="control-label">Plant / Site</label>
                                                <input type="text" class="form-control" id="plant" name="plant"
                                                       placeholder="e.g Lahore">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group">
                                                <label for="industry" class="control-label">Industry / Sector</label>
                                                <input type="text" class="form-control" id="industry" name="industry"
                                                       placeholder="e.g Manufacturing, Textile, Pharmaceutical ">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="ntn" class="control-label">NTN / FTN</label>
                                                <input type="text" class="form-control" id="ntn" name="ntn"
                                                       placeholder="0622438-9" size="9" maxlength="9">

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="strn" class="control-label">STRN</label>
                                                <input type="text" class="form-control" id="strn" name="strn"
                                                       placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="region" class="control-label">Select Region</label>
                                                <select class="form-control" id="region" name="region">
                                                    <option selected disabled="">-- Choose an option</option>
                                                    @foreach($saletaxes as $saletax)
                                                        <option value="{{$saletax->id}}">{{$saletax->name}}
                                                            -{{$saletax->value}} %
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12"></div>
                                        <div class="form-group m-0 col-md-6 col-12">
                                            <label for="address" class="control-label">Shipping Address</label>
                                            <textarea type="text" class="form-control" rows="3" id="address"
                                                      name="address"
                                                      placeholder="Shipping Address" autocomplete="off"></textarea>
                                        </div>
                                        <div class="form-group m-0 col-md-6 col-12">
                                            <label for="bill_to_address" class="control-label">Bill to Address</label>
                                            <textarea type="text" class="form-control" rows="3" id="bill_to_address"
                                                      name="bill_to_address"
                                                      placeholder="Bill To Address" autocomplete="off"></textarea>
                                        </div>
                                        <div class="col-md-12 mt-4">
                                            <button class="btn third add_form_btn" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container " data-aos="fade-up">
                <form id="submit_rfq">
                    @csrf
                    <div class="container">
                        <div class="row border">
                            <div class="col-md-12 py-2  bg-light pt-3">
                                <h4>Generate Request for Quote :</h4>
                                <h6>
                                    {{$customer->reg_name}}
                                    {{$customer->plant}}
                                </h6>
                                <p class="text-danger m-0">
                                    This URL will expire after <span id="minutes"><i class="fa fa-spinner fa-spin"></i> </span> minutes
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="container  py-2 first-row">
                        <div class="row border">
                            <div class="col-md-12 pt-0 mt-0 loader-line" style="display: none;background-image: url('{{url('img/line.gif')}}');background-position: center"><p></p></div>
                            <div class="col-md-3">
                                <label for="type">Item Type</label>
                                <select class="select-2-type form-control" id="type" name="type">
                                    <option selected disabled="disabled">-- Choose an option</option>
                                    <option value="0">Single Parameter</option>
                                    <option value="1">Multi Parameter</option>
                                    <option value="2">Non-Listed</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="parameter">Parameters list</label>
                                <select class="select-2-parameter form-control" id="parameter" name="parameter">
                                    <option selected disabled>-- Choose an option</option>
                                </select>
                            </div>

                            <div class="col-md-3 listed-capability">
                                <label for="capability">Capabilities list</label>
                                <select class="form-control select-2-capability" id="capability" name="capability"><option selected disabled>-- Choose an option</option></select>
                            </div>
                            <div class="col-md-3 non-listed-capability" style="display: none">
                                <label for="ncapability">Non-listed Capability</label>
                                <input class="form-control" id="ncapability" name="ncapability">
                            </div>

                            <div class="col-md-3">
                                <label for="unit">Units list</label>
                                <select class="form-control select-2-unit" id="unit" name="unit"><option selected disabled>-- Choose an option</option></select>
                            </div>
                            <div class="col-md-3">
                                <label for="make">Make</label>
                                <input type="text" class="form-control" id="make" name="make" placeholder="Make">
                            </div>
                            <div class="col-md-3">
                                <label for="model">Model</label>
                                <input type="text" class="form-control" id="model" name="model" placeholder="Model">
                            </div>
                            <div class="col-md-3">
                                <label for="serial">Serial</label>
                                <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial">
                            </div>
                            <div class="col-md-3">
                                <label for="eq_id">Equipment ID</label>
                                <input type="text" class="form-control" id="eq_id" name="eq_id" placeholder="Equipment ID">
                            </div>
                            <div class="col-md-1">
                                <label for="min_range">Range Min</label>
                                <input type="text" class="form-control" id="min_range" name="min_range"  placeholder="Min">
                            </div>
                            <div class="col-md-1">
                                <label for="max_range">Range Max</label>
                                <input type="text" class="form-control" id="max_range" name="max_range" placeholder="Max">
                            </div>
                            <div class="col-md-2">
                                <label for="resolution">Resolution</label>
                                <input type="text" class="form-control" id="resolution" name="resolution" placeholder="Resolution">
                            </div>
                            <div class="col-md-2">
                                <label for="accuracy">Accuracy</label>
                                <input type="text" class="form-control" id="accuracy" name="accuracy" placeholder="Accuracy">
                            </div>
                            <div class="col-md-2">
                                <label for="location">Location</label>
                                <select class="form-control" id="location" name="location"><option selected disabled>-- Choose location</option><option value="lab" selected>Lab</option><option value="site">Site</option></select>
                            </div>
                            <div class="col-md-2">
                                <label for="accredited">Accredited</label>
                                <select class="form-control" id="accredited" name="accredited"><option selected disabled>-- Choose an option</option><option value="yes" selected>Accredit</option><option value="no">Non-Accredit</option></select>
                            </div>
                            <div class="col-md-2">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control text-right" id="quantity" name="quantity" placeholder="Quantity" value="1">
                            </div>
                            <div class="col-md-12 mb-3 position-relative mb-5">
                                <button id="add-row" data-type="v" class="submit_rfq_btn border-0 px-3 rounded position-absolute mt-2" style="right: 13px">+ Add item </button>
                            </div>
                        </div>
                        <div class="row table-responsive">
                            <table class="table table-bordered table-striped table-hover items-table">
                                <tr>
                                    <th>Type</th>
                                    <th>Capability</th>
                                    <th>Parameter</th>
                                    <th>Unit</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Serial</th>
                                    <th>EquipmentID</th>
                                    <th>Range</th>
                                    <th>Resolution</th>
                                    <th>Accuracy</th>
                                    <th>Location</th>
                                    <th>Qty</th>
                                </tr>
                                <tr id="not-available">
                                    <td colspan="100%" class="text-center">
                                        <i>No data available</i>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </form>
                <div class="row">
                    <div class="col-md-12 text-right mt-2">
                        <button class="btn btn-success btn-p-m px-3 submit-rfq" data-type="s" style="width: auto"><i class="fa fa-save"></i> Submit RFQ</button>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
    <script>
        $(function () {
            $('#customers_list').select2();
            $("#capability").select2();
            $("#unit").select2();


            $('#parameter').on('change', function () {
                var parameter = $(this).val();

                var type = $('#type').val();
                if (parameter) {
                    $.ajax({
                        url: '{{route('w.parameter.get.capabilities')}}',
                        type: "POST",
                        data: {'parameter': parameter,'type': type, _token: '{{csrf_token()}}'},
                        dataType: "json",
                        beforeSend: function () {
                            $('.loader-line').fadeIn();
                        },
                        success: function (data) {
                            $('.loader-line').hide();
                            $('select[name="capability"]').empty();

                            $('select[name="capability"]').append('<option disabled selected>-- Choose an option</option>');
                            $.each(data['capabilities'], function (key, value) {
                                $('select[name="capability"]').append('<option value="' + value.id + '">' + value.name + ' - ' + value.max_range + '</option>');
                            });
                            $('select[name="unit"]').empty();
                            $('select[name="unit"]').append('<option disabled selected>-- Choose an option</option>');
                            $.each(data['unit'], function (key, value) {
                                $('select[name="unit"]').append('<option value="' + value + '">' + key + '</option>');
                            });
                        },
                        error:function () {
                            $('.loader-line').hide();
                            $('select[name="capability"]').empty();
                            $('select[name="unit"]').empty();
                        }
                    });
                }
            });

            var formdata=[];
            $("#submit_rfq").on('submit', (function (e) {
                e.preventDefault();
                var url="{{route('w.validate.rfq')}}";
                var data=new FormData(this);
                $.ajax({
                    url: url,
                    type: "POST",
                    data: data ,
                    processData: false,
                    contentType: false,
                    dataType:'JSON',
                    beforeSend: function () {
                        $('.loader-line').fadeIn();
                    },
                    success: function(data) {
                        $('.loader-line').hide();
                        $('#not-available').remove();
                        $('.items-table').append('<tr id="data-'+data.id+'"><td>'+data.type_name+'</td> <td> <i class="fa fa-times-circle text-danger tbl-remove-item" data-id="'+data.id+'"></i> '+data.capability_name+'</td> <td>'+data.parameter_name+'</td> <td>'+data.unit_name+'</td> <td>'+data.make+'</td> <td>'+data.model+'</td> <td>'+data.serial+'</td> <td>'+data.eq_id+'</td> <td>'+data.min_range+','+data.max_range+'</td> <td>'+data.resolution+'</td> <td>'+data.accuracy+'</td> <td>'+data.location+'</td> <td>'+data.quantity+'</td> </tr>');
                        formdata.push(data);
                        $('#model').val(null);
                        $('#make').val(null);
                        $('#serial').val(null);
                        $('#eq_id').val(null);
                        $('#min_range').val(null);
                        $('#max_range').val(null);
                        $('#resolution').val(null);
                        $('#acuracy').val(null);
                    },
                    error: function(xhr) {
                        $('.loader-line').hide();
                        erroralert(xhr);
                    }
                });
            }));
            $('.items-table').on('click','.tbl-remove-item',function () {
               var id=$(this).attr('data-id');
               $('#data-'+id).remove();
                formdata = jQuery.grep(formdata, function(value) {
                    return value.id!=id;
                });
            });
            var parameteradd=false;
            $('#type').on('change',function () {
                if (parameteradd == false){
                    $("#parameter").append($('#parameters').html()).select2();
                }
                parameteradd=true;
                if ($(this).val()==1){
                    $('#parameter').val(0).trigger('change');
                } else{
                    $('#parameter option').each(function () {
                       if($(this).attr('disabled')){
                           $(this).prop('selected', true).trigger('change');
                       }else{
                           $(this).prop('selected', false);
                       }
                    });
                }
                if ($(this).val()==2){
                    $('.non-listed-capability').show();
                    $('.listed-capability').hide();
                } else{
                    $('.non-listed-capability').hide();
                    $('.listed-capability').show();
                }
            });

            $("#add_form").on('submit', (function (e) {
                e.preventDefault();
                var next = {'type': 'reload'};
                cstore(this, "{{route('w.online.customer.store')}}", next);
            }));

            $(".submit-rfq").on('click', (function (e) {
                e.preventDefault();
                var url="{{route('w.submit.rfq')}}";
                var data={'data':formdata,'customer':'{{$c}}',_token:'{{csrf_token()}}'};
                var button = $(this);
                var previous = $(button).html();
                button.attr('disabled', 'disabled').html('Processing <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');

                $.ajax({
                    url: url,
                    type: "POST",
                    data: data ,
                    dataType:'JSON',
                    beforeSend: function () {
                        $('.loader-line').fadeIn();
                    },
                    success: function(data) {
                        $('.loader-line').hide();
                        button.attr('disabled', null).html(previous);
                        swal('success', data.success, 'success').then(function () {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        $('.loader-line').hide();
                        button.attr('disabled', null).html(previous);
                        erroralert(xhr);
                    }
                });
            }));


        });

    </script>
    <p id="array-data"></p>
    <div id="parameters" style="display: none;">
        <option value="0">Parameter not required</option>
        @foreach(\App\Models\Parameter::all() as $parameter)
            <option value="{{$parameter->id}}">{{$parameter->name}}</option>
        @endforeach
    </div>
    <style>
        .select2-results__option{
            font-size: 11px;
        }

        .ease {
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .tabs {
            background: #fff;
            position: relative;
            margin-bottom: 50px;
        }

        .tabs > input,
        .tabs > span {
            width: 50%;
            height: 60px;
            line-height: 60px;
            position: absolute;
            top: 0;
        }

        .tabs > input {
            cursor: pointer;
            filter: alpha(opacity=0);
            opacity: 0;
            position: absolute;
            z-index: 99;
        }

        .tabs > span {
            background: #f0f0f0;
            text-align: center;
            overflow: hidden;
        }

        .tabs > span i,
        .tabs > span {
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .tabs > input:hover + span {
            background: rgba(255, 255, 255, .1);
        }

        .tabs > input:checked + span {
            background: #fff;
        }

        .tabs > input:checked + span,
        .tabs > input:hover + span {
            color: #3498DB;
        }

        #tab-1, #tab-1 + span {
            left: 0;
        }

        #tab-2, #tab-2 + span {
            left: 50%;
        }
        .tab-content {
            padding-top: 20px;
            width: 100%;
        }

        .tab-content section {
            width: 100%;
            display: none;
        }

        .tab-content section h1 {
            margin-top: 15px;
            font-size: 100px;
            font-weight: 100;
            text-align: center;
        }

        #tab-1:checked ~ .tab-content #tab-item-1 {
            display: block;
        }

        #tab-2:checked ~ .tab-content #tab-item-2 {
            display: block;
        }

        .effect-3 .line {
            background: #3498DB;
            width: 50%;
            height: 4px;
            position: absolute;
            top: 56px;
        }

        #tab-1:checked ~ .line {
            left: 0;
        }

        #tab-2:checked ~ .line {
            left: 50%;
        }

        .form-control:focus {
            box-shadow: none;
            outline: none;
            border: 1px solid #3498DB;
        }

        .form-group label {
            font-size: 12px;
        }

        .form-control {
            font-size: 13px;
        }

        .btn {
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            float: right;
            cursor: pointer;
            align-self: center;
            font-size: 1rem;
            font-weight: 400;
            padding: 7px 20px;
            text-decoration: none;
            text-align: center;
            font-family: "Montserrat", sans-serif;

        }

        .btn:hover, .btn:focus {
            color: #fff;
            outline: 0;
        }

        .third {
            border-color: rgba(52, 152, 219, 0.75);
            color: #fff;
            border-width: 2px;
            box-shadow: 0 0 40px 40px #2487ce inset, 0 0 0 0 #2487ce;
            transition: all 0.5s ease-in-out;
            border-radius: 5px;
        }

        .third:hover {
            box-shadow: 0 0 10px 0 rgba(52, 152, 219, 0.04) inset, 0 0 10px 4px rgba(52, 152, 219, 0.13);
            color: #3498db;
        }

        .btn-p-m {
            width: 32px;
            height: 32px;
            padding: 0;
            font-size: 12px;
        }

        .btn-p-m i {
            margin-top: 8px;
        }

        .form-control{
            display: block;
            width: 100%;
            background: #ededed;
            color: #743db0;
            border-radius: 3px;
            border: solid 1px;
            border-color: #ededed !important;
            transition: all 0.3s ease-in;
            margin-bottom: 10px;
            padding: 3px 8px;
        }
        .select2-container--default .select2-selection--single{
            display: block;
            width: 100%;
            background: #ededed;
            color: #743db0;
            border-radius: 3px;
            border: solid 1px;
            border-color: #ededed;
            transition: all 0.3s ease-in;
            margin-bottom: 10px;
        }
        .select2-container .select2-selection--single .select2-selection__rendered{
            font-size: 11px;
        }
        .capability{
            width: 100% !important;
        }
        .form-control:focus ,.select2-container--default .select2-selection--single:focus{
            background: #fff;
        }
        .first-row label{
            padding: 0;
            margin: 0;
            font-size: 12px;
        }
        table.table.table-bordered.table-striped.table-hover.items-table{
            font-size: 12px;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');


        .tab-accordian ul{
            padding-left: 22px;
        }
        .tab-accordian p{
            margin-top: 0;
        }
        .tab-accordian{
            width: 100%;
            border-radius: 0;
            border: 1px solid #cecece;
            background: transparent;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .titleWrapper{
            padding: 10px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            -webkit-user-select: none;
            user-select: none;
            transition: background-color .8s linear;
        }
        /* .titleWrapper.active{
            background: #fff;
        } */
        .desWrapper{
            background: #fff;
            max-height: 500px;
            display: none;
            padding: 20px;
            transition: max-height 1s ease-in;
        }

        /* Collapse Icon */

        .collapse-icon{
            position: relative;
        }
        .collapse-icon .acc-close{
            height: 20px;
            border-left: 2px solid #0a7a7f;
            transition: all .5s ease-in-out;
            transform: rotate(-90deg);
            opacity: 1;
        }

        .collapse-icon .acc-open {
            width: 19px;
            position: absolute;
            border-top: 2px solid #0a7a7f;
            transition: all .5s ease-in-out;
            transform: rotate(90deg);
            top: 43%;
            right: -8px;
        }

        .titleWrapper.active .collapse-icon{
            transition: all .5s ease-in-out;
            transform: rotate(180deg);
        }

        .titleWrapper.inactive .collapse-icon{
            transition: all .5s ease-in-out;
            transform: rotate(-180deg);
        }

        .titleWrapper.active .collapse-icon .acc-open{
            opacity: 0;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('.titleWrapper').click(function(){
                var toggle = $(this).next('div#descwrapper');
                $(toggle).slideToggle("slow");
            });
            $('.inactive').click(function(){
                $(this).toggleClass('inactive active');
            });
            get_time();

            window.setInterval(function(){
                get_time();
            }, 10*1000);
        });


        /*get_time();*/

        function get_time() {
            $.ajax({
                url: '{{route('w.check.time')}}',
                type: "POST",
                data: {'id':'{{$c}}',_token:"{{csrf_token()}}"} ,
                dataType:'JSON',
                beforeSend: function () {
                    $('#minutes').html('<i class="fa fa-spinner fa-spin"></i>');
                },
                success: function(data) {
                    if (data.next){
                        window.location.href='{{route('w.url.expired')}}'
                    } else{
                        $('#minutes').text(45 - parseFloat(data.span));
                    }
                },
                error: function(xhr) {
                }
            });
        }
    </script>
@endsection
