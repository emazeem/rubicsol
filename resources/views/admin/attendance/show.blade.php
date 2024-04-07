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
        <li class="breadcrumb-item active" aria-current="page">Attendance Details</li>
      </ol>
    </nav>
    <div class="col-12 mb-2">
    <h5 class="font-weight-light"><i class="feather icon-clock mr-1"></i>Attendance</h5>
</div>
    <table class="table table-bordered table-sm bg-white">
    
    <tr>
      <th scope="col">Start Time</th>
      <td scope="col">{{$show->check_in}}</td>
    </tr>
    <tr>
      <th scope="col">End Time</th>
      <td scope="col">{{$show->check_out}}</td>
    </tr>
    <tr>
      <th scope="col">Start Date</th>
      <td scope="col">{{$show->check_in_date}}</td>
    </tr>
    <tr>
      <th scope="col">End Date</th>
      <td scope="col">{{$show->check_out_date}}</td>
    </tr>
    <tr>
      <th scope="col">users</th>
      <td scope="col">{{$show->user->fname}} {{$show->user->lname}}</td>
    </tr>
    <tr>
      <th scope="col">Status</th>
      <td scope="col">
        @if($show->status==1)
        Check Out
        @endif
        @if($show->status==0)
        Check In
        @endif
      </td>
      
    </tr>
</table>
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