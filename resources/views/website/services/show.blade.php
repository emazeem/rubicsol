@extends('layouts.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12">
            <h3 class="float-left font-weight-light pb-1"><i class="feather icon-list"></i> View Service</h3>
            <button type="button" class="btn btn-sm btn-primary shadow-sm float-right mt-2 add"
                    data-toggle="modal" data-target="#add">
                <i class="feather icon-plus-circle"></i> Images
            </button>
        </div>
        <div class="col-lg-12 table-responsive c-scroll">
            <table id="example" class="table table-bordered bg-white table-hover table-sm display nowrap">
                <tr>
                    <th>ID</th>
                    <td>{{$show->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$show->name}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$show->description}}</td>
                </tr>
                <tr>
                    <th>Details</th>
                    <td>{!! $show->details !!}</td>
                </tr>

                <tr>
                    <th>Icon</th>
                    <td>
                        <img src='{{Storage::url('/services/'.$show->icon)}}' class='img-fluid' width='100'>
                    </td>
                </tr>
                <tr>
                    <th>Images</th>
                    <td>
                        @foreach($show->images as $image)

                            <img src='{{Storage::url('/service-images/'.$image->image)}}' data-id="{{$image->id}}" class='img-fluid delete-image' width='100'>
                        @endforeach
                    </td>
                </tr>

            </table>
        </div>
    </div>

    <script>

        $(document).ready(function () {
            $(document).on('click', '.add', function () {
                $('#id').val(0);
            });

            $("#add_form").on('submit', (function (e) {
                e.preventDefault();
                var next = {'type': 'reload'};
                cstore(this, "{{route('services.images.store')}}", next);
            }));

            $(document).on('click', '.delete-image', function (e) {
                e.preventDefault();
                var next = {'type': 'reload'};
                cdelete('Are you sure to delete this image?', $(this).attr('data-id'), '{{csrf_token()}}', '{{route('services.images.destroy')}}',next);
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
                                class="feather icon-plus-circle"></i> Image</h5>
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                    </button>
                </div>
                <form id="add_form">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" value="{{$show->id}}" name="id">
                        <div class="form-group">
                            <label for="image" class="control-label">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image[]" multiple id="image">
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
