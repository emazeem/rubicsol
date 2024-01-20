@extends('layouts.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12">
            <h3 class="float-left font-weight-light pb-1"><i class="feather icon-list"></i> Gallery</h3>
            <button type="button" class="btn btn-sm btn-primary shadow-sm float-right mt-2 add"
                    data-toggle="modal" data-target="#add">
                <i class="feather icon-plus-circle"></i> Image
            </button>
        </div>
        <div class="col-lg-12">
            <table id="example" class="table table-bordered bg-white table-hover table-sm display nowrap"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <script>

        function InitTable() {
            var route = "{{ route('gallery.fetch') }}";
            var columns = [
                {"data": "id"},
                {"data": "category"},
                {"data": "image"},
                {"data": "options", "orderable": false},
            ];
            var token = "{{csrf_token()}}";
            InitTableS(route, columns, token);
        }

        $(document).ready(function () {
            InitTable();

            $(document).on('click', '.add', function () {
                $('#id').val(0);
            });
            $(document).on('click', '.edit', function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    "url": "{{ route('gallery.edit') }}",
                    type: "POST",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    dataType: "json",
                    success: function (data) {
                        $('#add').modal('toggle');
                        $('#id').val(data.id);
                        $('#category').val(data.category);
                    }
                });
            });
            $("#add_form").on('submit', (function (e) {
                e.preventDefault();
                var next = {'type': 'd-t-and-m'};
                cstore(this, "{{route('gallery.store')}}", next);
            }));

            $(document).on('click', '.show-listed', function (e) {
                $('.listed').show();
                $('.non-listed').hide();
            });
            $(document).on('click', '.show-non-listed', function (e) {
                $('.listed').hide();
                $('.non-listed').show();
            });

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                cdelete('Are you sure to delete this image?', $(this).attr('data-id'), '{{csrf_token()}}', '{{route('gallery.destroy')}}');
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
                                class="feather icon-plus-circle"></i> Gallery</h5>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                    </button>
                </div>
                <form id="add_form">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" value="0" id="id">
                        <div class="form-group non-listed">
                            <label for="category" class="float-left">Category</label>
                            <label for="category" class="float-right show-listed">Show Listed</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="category"/>
                        </div>
                        <div class="form-group listed" style="display: none">
                            <label for="category" class="float-left">Category</label>
                            <label for="category" class="float-right show-non-listed">Add New</label>
                            <select type="text" class="form-control" id="category" name="category">
                                <option selected disabled>-- Select an option</option>
                                @foreach($categories as $category)
                                    <option value="{{$category}}">{{$category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label ">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="image">Image (opt)</label>
                            </div>
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
@endsection


