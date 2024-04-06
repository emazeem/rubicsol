@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('task.index')}}">Task List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Task Details</li>
      </ol>
    </nav>
<div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>My Task</h3>
    @if($show->status == 0)
    <a href="{{route('task.start',['id'=>$show->id])}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-tasks mr-1"></i>Start</a>
    @endif
    @if($show->status == 1)
    <a href="{{route('task.complete',['id'=>$show->id])}}" class="btn btn-danger shadow-sm float-right mt-2"><i class="fa fa-tasks mr-1"></i>Complete</a>
    @endif
    
  </div>
    <table class="table table-bordered table-sm bg-white">
    <tr>
      <th scope="col">Id</th>
      <td scope="col">{{$show->id}}</td>
    </tr>
    <tr>
      <th scope="col">Users</th>
      <td scope="col">{{$show->user->fname}} {{$show->user->lname}}</td>
    </tr>
    <tr>
      <th scope="col">Title</th>
      <td scope="col">{{$show->title}}</td>
    </tr>
    <tr>
      <th scope="col">Description</th>
      <td scope="col">{{$show->description}}</td>
    </tr>
    <tr>
      <th scope="col">Status</th>
      <td scope="col">
        @if($show->status == 0)
        Pending  
        @elseif($show->status == 2)
        Complete
        @elseif($show->status == 1)
        In-Progress
        @endif
      </td>
    </tr>
    <tr>
    <th scope="col">Priority</th>
    <td scope="col">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="prioritySwitch" @if($show->priority == 1) checked @endif>
            <label class="custom-control-label" for="prioritySwitch"></label>
            @if($show->priority == 0)
            Low
            @elseif($show->priority == 1)
            High
            @endif
        </div>
    </td>
</tr>
<tr>
            <th scope="col">Sub Task</th>
            <td scope="col"> 
              <form action="{{route('subtask.store')}}" method="post">
                @csrf
                <input type="hidden" value="{{$show->id}}" name="id">
                <div class="input-group mb-3">
                    <input type="text" id="subtask" name="subtask" class="form-control" placeholder="subtask" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
                </div>
            </form>
        </td>
      
    </tr>
    <tr>

      <td colspan="2">
        @foreach($show->subtasks as $subtask)
        <a href="{{route('subtask.complete',['id'=>$subtask->id])}}"
        @if($subtask->status==1) style="text-decoration:line-through" @endif>
        <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" readonly
         @if($subtask->status==1) checked 
         @endif>
         {{$subtask->description}}</a>
         <br>
         @endforeach
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
