@extends('layouts.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12">
            <h3 class="float-left font-weight-light pb-1"><i class="feather icon-list"></i> Website Settings</h3>
            <button type="button" class="btn btn-sm btn-primary shadow-sm float-right mt-2 add"
                    data-toggle="modal" data-target="#add">
                <i class="feather icon-plus-circle"></i> Setting
            </button>
        </div>
        <div class="col-lg-12 table-responsive c-scroll">
            <table id="example" class="table table-bordered bg-white table-hover table-sm display nowrap"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <script>

        function InitTable() {
            var route = "{{ route('website.setting.fetch') }}";
            var columns = [
                {"data": "id"},
                {"data": "name"},
                {"data": "slug"},
                {"data": "value"},
                {"data": "options", "orderable": false},
            ];
            var token = "{{csrf_token()}}";
            InitTableS(route, columns, token);
        }

        $(document).ready(function () {
            InitTable();

            $(document).on('click', '.add', function () {
                $('#slug').attr('disabled',null);
                $('#id').val(0);
            });
            $(document).on('click', '.edit', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    "url": "{{ route('website.setting.edit') }}",
                    type: "POST",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    dataType: "json",
                    success: function (data) {
                        $('#add').modal('toggle');
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#slug').val(data.slug).attr('disabled',null);
                        $('#t').val(data.type);
                        $('#type').val(data.type);
                        if (data.type==0){
                            $('.value-div').show();
                            $('.image-div').hide();
                            $('.para-div').hide();
                            $('#value').val(data.value);
                        }
                        else if (data.type==2){
                            CKEDITOR.instances['paragraph'].setData(data.value);
                            $('.para-div').show();
                            $('.value-div').hide();
                            $('.image-div').hide();
                            $('#value').val(data.value);
                        }
                        else{
                            $('.para-div').hide();
                            $('.value-div').hide();
                            $('.image-div').show();

                        }
                    }
                });
            });
            $("#add_form").on('submit', (function (e) {
                e.preventDefault();
                for (instance in CKEDITOR.instances) {
                    $('#' + instance).val(CKEDITOR.instances[instance].getData());
                }

                var next = {'type': 'd-t-and-m'};
                cstore(this, "{{route('website.setting.store')}}", next);
            }));

            $(document).on('change', '#type', function (e) {
                $('#t').val($(this).val());
                if ($(this).val()=='0'){
                    $('.value-div').show();
                    $('.image-div').hide();
                    $('.para-div').hide();
                }else if ($(this).val()=='2'){
                    $('.value-div').hide();
                    $('.image-div').hide();
                    $('.para-div').show();
                } else{
                    $('.value-div').hide();
                    $('.image-div').show();
                    $('.para-div').hide();
                }
            });
            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                cdelete('Are you sure to delete this setting?', $(this).attr('data-id'), '{{csrf_token()}}', '{{route('website.setting.destroy')}}');
            });

        });
    </script>
    <div class="modal fade zoom add_form_modal" id="add" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" id="exampleModalCenterTitle"><i
                                class="feather icon-plus-circle"></i> Setting</h5>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                    </button>
                </div>
                <form id="add_form">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" value="0" id="id">
                        <input type="hidden" name="t" value="text" id="t">
                        <div class="form-group ">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"/>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select type="text" class="form-control" id="type" name="type">
                                <option value="0" selected>Text</option>
                                <option value="1">Image</option>
                                <option value="2">Paragraph</option>
                            </select>
                        </div>
                        <div class="form-group value-div">
                            <label for="value">Value</label>
                            <input type="text" class="form-control" id="value" name="value" placeholder="Value"/>
                        </div>
                        <div class="form-group image-div" style="display: none;">
                            <label for="image" class="control-label ">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="image">Image</label>
                            </div>
                        </div>
                        <div class="form-group para-div" style="display: none;">
                            <label for="paragraph">Paragraph</label>
                            <input type="text" class="form-control" id="paragraph" name="paragraph" placeholder="paragraph"/>
                        </div>

                    </div>
                    <div class="modal-footer bg-light">
                        <button class="btn btn-primary add_form_btn" type="submit"><i class="feather icon-save"></i>
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'paragraph', {
            toolbar: [
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                { name: 'insert', items: [  'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                { name: 'others', items: [ '-' ] },
            ]
        } );
    </script>
@endsection
