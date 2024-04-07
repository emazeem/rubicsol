@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('leave.application.index')}}">Leave Application List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Leave Details</li>
      </ol>
    </nav>
    <div class="col-12 mb-2">
        <h3 class="float-left pr-1 font-weight-light"><i class="bx bx-task"></i>My leave</h3>
        @if(auth()->user()->role=="super-admin")
            @if($show->status==2)
                <a href="{{route('leave.approve',['id'=>$show->id])}}" class="btn float-right btn-success ml-2 approve">Approve</button></a> 
                <a href="{{route('leave.reject',['id'=>$show->id])}}" class=" disabled btn float-right btn-danger reject">Reject </a>
            @elseif($show->status==1)
                <a href="{{route('leave.approve',['id'=>$show->id])}}" class="disabled btn float-right btn-success ml-2 approve">Approve</button></a> 
                <a href="{{route('leave.reject',['id'=>$show->id])}}" class="btn float-right btn-danger reject">Reject </a>
            @else
            <a href="{{route('leave.approve',['id'=>$show->id])}}" class="btn float-right btn-success ml-2 approve">Approve</button></a> 
            <a href="{{route('leave.reject',['id'=>$show->id])}}" class="btn float-right btn-danger reject">Reject </a>
            @endif
        @endif
    </div>
    <table class="table table-bordered table-sm bg-white">
        <tr>
            <th scope="col">Id</th>
            <td scope="col">{{$show->id}}</td>
        </tr>
        <tr>
            <th scope="col">User</th>
            <td scope="col">{{$show->user->fname}} {{$show->user->lname}}</td>
        </tr>
        <tr>
            <th scope="col">Start</th>
            <td scope="col">{{$show->start}}</td>
        </tr>
        <tr>
            <th scope="col">End</th>
            <td scope="col">{{$show->end}}</td>
        </tr>
        <tr>
            <th scope="col">Leave type</th>
            <td scope="col">{{$show->type}}</td>
        </tr>
        <tr>
            <th scope="col">Leave nature</th>
            <td scope="col">{{$show->nature}}</td>
        </tr>
        <tr>
            <th scope="col">Status</th>
            <td scope="col">
                @if($show->status == 0)
                <span class="badge badge-warning">Pending</span>
                @elseif($show->status == 2)
                <span class="badge badge-success">Declined</span>
                @else
                <span class="badge badge-info">Approved</span>
                @endif
            </td>
        </tr>
        <tr>
            <th scope="col">Reason</th>
            <td scope="col">{{$show->reason}} 
              <form action="{{route('leave.reason')}}" method="post">
                @csrf
                <input type="hidden" value="{{$show->id}}" name="id">
                <div class="input-group mb-3">
                    <input type="text" id="reason" name="reason" class="form-control" placeholder="type reason here" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
                </div>
            </form>
        </td>
    </tr>
  </table>
</div>

<script>
    $(document).ready(function(){
        $('#prioritySwitch').on('change', function() {
            var priority = $(this).is(':checked') ? 1 : 0;
            $.ajax({
                url: "{{ route('task.switchPriority', ['id' => $show->id]) }}",
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    priority: priority
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

    $(document).on('click', '.reject, .approve', function (e) {
    e.preventDefault();

    var actionType = $(this).hasClass('reject') ? 'reject' : 'approve';
    var confirmationMessage = actionType === 'reject' ? "Are you sure to reject the application?" : "Are you sure to approve the application?";

    swal({
        title: confirmationMessage,
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willMarkUpload) => {
        if (willMarkUpload) {
            var id = $(this).attr('data-id');
            var token = '{{ csrf_token() }}';

            $.ajax({
                url: $(this).attr('href'),
                type: 'POST',
                dataType: "JSON",
                data: { id: id, _token: token },
                success: function (data) {
                    swal('Success', data.success, 'success').then(function () {
                        location.reload();
                    });
                },
                error: function (xhr) {
                    erroralert(xhr);
                },
            });
        }
    });
});
</script>
@endsection







