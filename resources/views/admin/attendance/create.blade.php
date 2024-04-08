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
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('attendance.index')}}">Attendance List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Details</li>
      </ol>
    </nav>
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-footer bg-light border-top">
                <h5 class="font-weight-light"><i class="feather icon-clock mr-1"></i>Add Attendance</h5>
                <div class="row">
                    <div class="form-group col-md-3 col-12 ">
                        <label for="start_time" class="control-label font-weight-bold">Start Time</label>
                        <input type="time" class="form-control" id="start_time" name="start_time" placeholder="start_time">
                    </div>
                    <div class="form-group col-md-3 col-12 ">
                        <label for="end_time" class="control-label font-weight-bold">End Time</label>
                        <input type="time" class="form-control" id="end_time" name="end_time" placeholder="start_time">
                    </div>
                    <div class="col-md-3">
                        <label for="user_id" class="control-label font-weight-bold">User</label>
                        <select class="form-select custom-select" name="user_id">
                            <option selected disabled>Select User</option>
                             @foreach($users as $user)
                             <option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</option>
                             @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="date" class="control-label font-weight-bold">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" placeholder="start_date">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="date" class="control-label font-weight-bold">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" placeholder="end_date">
                        </div>
                        <div class="col-md-3">
                            <label for="status" class="control-label font-weight-bold">Status</label>
                            <select class="form-select custom-select" name="status">
                                <option value="0">CheckIn</option>
                                <option value="1">CheckOut</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary user-btn float-right"><i
                            class="feather icon-save"> </i> Save
                        </button>
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
        $.ajax({url: "{{route('attendance.store')}}",
        type: "POST",
        data: new FormData(this),
        contentType: false,
         cache: false,
         processData: false,
         success: function (data) {
            button.attr('disabled', null).html(previous);
            swal('success', data.success, 'success').then(() => {
                window.location.href = '{{url('attendance')}}/';
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