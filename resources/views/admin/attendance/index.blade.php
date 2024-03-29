@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<div class="row">
    <div class="col-12 mb-2">
        <h3 class="float-left pb-1 font-weight-light"><i class="feather icon-users mr-1"></i>Attendance</h3>
        <a href="{{route('attendance.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle"></i>Attendance</a>
    </div>
  <div class="col-lg-12 table-responsive">
      <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
      <thead >
      <tr class="bg-c-blue">
    
        <th>ID</th>
        <th>users</th>
        <th>Start Date</th>
        <th>Start Time</th>
        <th>End Date</th>
        <th>End Time</th>
        <th>Status</th>
        <th>Action</th>

      </tr>
      </thead>
      <tbody>
        @foreach($attendances as $attendance)
        <tr>
            <td>{{$attendance->id}}</td>
            <td>{{ optional($attendance->user)->name }}</td>
            <td>{{$attendance->check_in_date}}</td>
            <td>{{$attendance->check_in}}</td>
            <td>{{$attendance->check_out_date}}</td>
            <td>{{$attendance->check_out}}</td>
            <td>
              @if($attendance->status==1)
              <span class="badge badge-success">Check Out</span>
              @endif
              @if($attendance->status==0)
              <span class="badge badge-primary">Check In</span>
              @endif
            </td>
            <td>   
            <a href="{{route('attendance.edit',['id'=>$attendance->id])}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a></button>
            <a href="{{route('attendance.show',['id'=>$attendance->id])}}" class="btn btn-warning btn-sm" ><i class="fas fa-eye"></i></a></button>
            <a href="{{route('attendance.delete',['id'=>$attendance->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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


