@extends('admin.layout.master')
@section('content')
<div class="row pb-3">
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
@endsection


