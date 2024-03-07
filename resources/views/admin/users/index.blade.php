@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<div class="row">
    <div class="col-12 mb-2">
        <h3 class="float-left pb-1 font-weight-light"><i class="feather icon-users"></i> Personnel</h3>
        <a href="{{route('users.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle"></i>Users</a>
    </div>
  <div class="col-lg-12 table-responsive">
      <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
      <thead >
      <tr class="bg-c-blue">
    
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->role}}</td>
            <td>
                <a href="{{route('users.edit',['id'=>$user->id])}}" target="_blank">Edit</a>
                <a href="{{route('users.show',['id'=>$user->id])}}" target="_blank">Show</a>
                <a href="" target="_blank">Delete</a>
            </td>


        </tr>
        @endforeach
      </tbody>
    </table>

  </div>

 </div>
    <style>
      table#example thead tr th{
        background: #233560!important
      }
    </style>
@endsection


