@extends('admin.layout.master')
@section('content')
<div class="row pb-3">
<div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="fa fa-tasks"></i>My Task</h3>
    @if($show->status == 0)
    <a href="{{route('task.start',['id'=>$show->id])}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-tasks"></i>Start</a>
    @endif
    @if($show->status == 1)
    <a href="{{route('task.complete',['id'=>$show->id])}}" class="btn btn-danger shadow-sm float-right mt-2"><i class="fa fa-tasks"></i>Complete</a>
    @endif
    
  </div>
    <table class="table table-bordered table-sm bg-white">
    <tr>
      <th scope="col">Id</th>
      <td scope="col">{{$show->id}}</td>
    </tr>
    <tr>
      <th scope="col">Users</th>
      <td scope="col">{{$show->user->name}}</td>
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
</table>
    </div>
@endsection


