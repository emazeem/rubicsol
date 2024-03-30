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
         <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-footer bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-light"><i class="feather icon-user"></i>Add User</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3 col-12">
                            <label for="fname" class="control-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname"placeholder="First Name"autocomplete="off" value=''>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="lname" class="control-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname"placeholder="Last Name"autocomplete="off" value=''>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-3 col-12 ">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3 ">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"value="">
                        </div>
                        <div class="col-md-3">
                            <label for="role" class="control-label">Role</label>
                            <select class="form-select custom-select" name="role">
                                <option value="user">User</option>
                            </select>
                        </div>
                        <!--Date Of Joining-->
                        <div class="col-md-3">
                            <label for="joining" class="control-label">Date of Joining</label>
                            <input type="date" id="joining" name="joining" class="form-control w-100">
                        </div>
                        <div class="col-md-3">
                            <label for="designation" class="control-label">Designation</label>
                            <select type="dropdown" id="designation" name="designation" class="form-control w-100">
                            <option value="super admin">Laravel Internee</option>
                            <option value="admin">Sales Executive</option>
                            <option value="employee">Cheif Executive Officer</option>
                            <option value="employee">Sales Internee</option>
                    </select>
                        </div>
                        <div class="col-md-3">
                            <label for="department" class="control-label">Department</label>
                            <select type="dropdown" id="department" name="department" class="form-control w-100">
                            <option value="IT expert"></option>
                            <option value="technican">Sales Department</option>
                            <option value="lab expert">Software Department</option>
                    </select>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="cnic_no" class="control-label">CNIC</label>
                            <input type="text" class="form-control" id="cnic_no" name="cnic_no" placeholder="CNIC"autocomplete="off" value=''>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="address" class="control-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"placeholder="address"autocomplete="off" value=''>
                        </div><br>
                        <div class="row float-left ml-3">
                            <div class="form-group">
                                <label for="account" class="control-label">Account No</label>
                                <input type="text" class="form-control" id="account" name="account"placeholder="Account"autocomplete="off" value=''>
                            </div>
                            <div class="form-group ml-5">
                                <label for="bank" class="control-label">Bank Name</label>
                                <input type="text" class="form-control" id="bank" name="bank"placeholder="Bank"autocomplete="off" value=''>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light border-top">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ URL::previous() }}" class="btn bg-white border float-left"><i class="feather icon-chevron-left"></i> back</a>
                                <button type="submit" class="btn btn-primary user-btn float-right"><i class="feather icon-save"> </i> Save</button>
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
            url: "{{route('users.store')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                button.attr('disabled', null).html(previous);
                swal('success', data.success, 'success').then(() => {
                    window.location.href = '{{url('users/show')}}/' + data.id;
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