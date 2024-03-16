@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    @if(Session::has('success'))
        <script>
        $(document).ready(function () {
            swal("Done!", '{{Session('success')}}', "success");
            });
        </script>
        @endif
        <div class="row pb-3">
            <form class="form-horizontal row" id="user-form" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$edit->id}}">
                <div class="col-12">
                    <div class="card user-card user-card-3 support-bar1">
                        <div class="card-footer bg-light border-top">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="font-weight-light"><i class="feather icon-user"></i>Edit User</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3 col-12">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="First Name"
                                autocomplete="off" value='{{$edit->name}}'>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$edit->email}}">
                            </div>
                            <div class="form-group col-md-3 col-12 ">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="phone" class="control-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$edit->phone}}">
                            </div>
                            <div class="col-md-3">
                                <label for="role" class="control-label">Role</label>
                                <select class="form-select custom-select" name="role">
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light border-top">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ URL::previous() }}" class="btn btn-sm bg-white border float-left">
                                    <i class="feather icon-chevron-left"></i> back</a>
                                    <button type="submit" class="btn btn-primary btn-sm user-btn float-right"><i
                                    class="feather icon-save"> </i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
    $(":input").inputmask();
    
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#user-form").on('submit', (function (e) {
                var button = $('.user-btn');
                var previous = $('.user-btn').html();
                button.attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing');
                e.preventDefault();
                $.ajax({
                    url: "{{route('users.update')}}",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        button.attr('disabled', null).html(previous);
                        swal('success', data.success, 'success').then(() => {
                            window.location.href = '{{url('users/view')}}/' + data.id;
                        });

                    },
                    error: function (xhr) {
                        button.attr('disabled', null).html(previous);
                        erroralert(xhr);
                    }
                });
            }));
            

        });
    </script>
    
@endsection