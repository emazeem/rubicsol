@extends('layouts.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12">
            <h3 class="float-left font-weight-light pb-1"><i class="feather icon-list"></i> All Services</h3>
            <button type="button" class="btn btn-sm btn-primary shadow-sm float-right mt-2 add"
                    data-toggle="modal" data-target="#add">
                <i class="feather icon-plus-circle"></i> Service
            </button>
        </div>
        <div class="col-lg-12">
            <table id="example" class="table table-bordered bg-white table-hover table-sm display nowrap"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script>

        function InitTable() {
            var route="{{ route('services.fetch') }}";
            var columns=[
                {"data": "id"},
                {"data": "name"},
                {"data": "category_id"},
                {"data": "description"},
                {"data": "icon"},
                {"data": "options", "orderable": false},
            ];
            var token="{{csrf_token()}}";
            InitTableS(route,columns,token);
        }
        $(document).ready(function () {
            InitTable();

            $(document).on('click', '.add', function () {
                $('#id').val(0);
            });
            $(document).on('click', '.edit', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    "url": "{{ route('services.edit') }}",
                    type: "POST",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    dataType: "json",
                    success: function (data) {
                        $('#add').modal('toggle');
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#description').val(data.description);
                        $('#category_id').val(data.category_id);
                        CKEDITOR.instances['details'].setData(data.details);
                    }
                });
            });
            $("#add_form").on('submit', (function (e) {
                e.preventDefault();
                var next ={'type':'d-t-and-m'};
                cstore(this,"{{route('services.store')}}",next);
            }));

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                cdelete('Are you sure to delete this category?', $(this).attr('data-id'), '{{csrf_token()}}', '{{route('services.destroy')}}');
            });
        });
    </script>
    <div class="modal fade zoom add_form_modal " id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" id="exampleModalCenterTitle"><i
                                class="feather icon-plus-circle"></i> Service</h5>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                    </button>
                </div>
                <form id="add_form">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" value="0" id="id">
                        <div class="form-group">
                            <label for="name">Name of Category</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea class="form-control" id="details" name="details" rows="3" placeholder="details"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select type="text" class="form-control" id="category_id" name="category_id">
                                <option selected disabled>-- Choose an option</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="attachments" class="control-label">Icon</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="icon" multiple id="icon">
                                <label class="custom-file-label" for="icon">Icon (opt)</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button class="btn btn-primary add_form_btn" type="submit"><i class="feather icon-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'details', {
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


