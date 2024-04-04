@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
    <div class="col-12 mb-2">
        <h3 class="float-left pr-1 font-weight-light"><i class="bx bx-task"></i>My leave</h3>
        @if(auth()->user()->role=="super-admin")
        <a href="{{route('leave.approve',['id'=>$show->id])}}" class="btn float-right btn-success ml-2">Approve</button></a> 
        <a href="{{route('leave.reject',['id'=>$show->id])}}" class="btn float-right btn-danger">Reject </a>
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
                Rejected
                @else
                Approved
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
                    // Optionally, you can display an error message to the user
                }
            });
        });
    });
</script>
@endsection







