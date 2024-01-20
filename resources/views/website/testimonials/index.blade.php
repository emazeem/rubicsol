@extends('layouts.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12">
            <h3 class="float-left font-weight-light pb-1"><i class="feather icon-list"></i> All Testimonials</h3>
            <button type="button" class="btn btn-sm btn-primary shadow-sm float-right mt-2 add"
                    data-toggle="modal" data-target="#add">
                <i class="feather icon-plus-circle"></i> Testimonial
            </button>
        </div>
        <div class="col-lg-12">
            <table id="example" class="table table-bordered bg-white table-hover table-sm display nowrap"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Feedback</th>
                    <th>Date</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Feedback</th>
                    <th>Date</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <script>

        function InitTable() {
            var route="{{ route('testimonials.fetch') }}";
            var columns=[
                {"data": "id"},
                {"data": "name"},
                {"data": "position"},
                {"data": "feedback"},
                {"data": "date"},
                {"data": "profile"},
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
                    "url": "{{ route('testimonials.edit') }}",
                    type: "POST",
                    data: {'id': id, _token: '{{csrf_token()}}'},
                    dataType: "json",
                    success: function (data) {
                        $('#add').modal('toggle');
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#position').val(data.position);
                        $('#date').val(data.date);
                        $('#feedback').val(data.feedback);
                    }
                });
            });
            $("#add_form").on('submit', (function (e) {
                e.preventDefault();
                var next ={'type':'d-t-and-m'};
                cstore(this,"{{route('testimonials.store')}}",next);
            }));

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                cdelete('Are you sure to delete this category?', $(this).attr('data-id'), '{{csrf_token()}}', '{{route('testimonials.destroy')}}');
            });
        });
    </script>
    <div class="modal fade zoom add_form_modal" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" id="exampleModalCenterTitle"><i
                                class="feather icon-plus-circle"></i> Service Category</h5>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                    </button>
                </div>
                <form id="add_form">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" value="0" id="id">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"/>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" id="position" name="position" placeholder="Position"/>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="date"/>
                        </div>

                        <div class="form-group">
                            <label for="feedback">Feedback</label>
                            <textarea class="form-control" id="feedback" name="feedback" rows="5" placeholder="Feedback"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="profile" class="control-label">Profile</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="profile" multiple id="profile">
                                <label class="custom-file-label" for="profile">Profile (opt)</label>
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
@endsection


