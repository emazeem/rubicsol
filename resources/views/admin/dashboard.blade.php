@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<div class="row">
  <div class="col-12 mb-2">
    @if($attendanceExist)
    @if(!$ifUserCheckout)
    <a href="{{route('check.out')}}" class="btn btn-danger float-right" >Check Out</a>
    @endif
    @else
    <a href="{{route('check.in')}}" class="btn btn-success float-right" >Check In</a>
    @endif
  </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body table-responsive">
          <h5 class="float-left pb-1 font-weight-light"><i class="feather icon-clock"></i>My Attendance</h5>
          <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
            <thead>
              <tr class="bg-c-blue">
              <th>ID</th>
                <th>Start Date</th>
                <th>Start Time</th>
                <th>End Date</th>
                <th>End Time</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($attendances as $attendance)
              <tr>
              <td>{{$attendance->id}}</td>
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
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body table-responsive">
          <h5 class="float-left pb-1 font-weight-light"><i class="feather icon-clock"></i>My Tasks</h5>
          <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
            <thead>
              <tr class="bg-c-blue">
                <th>ID</th>
                <th>USERS</th>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
                <th>Priority</th>
                <th>STATUS</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
              <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->user->name}}</td>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                  @if($task->priority == 0)
                  <span class="badge badge-success">Low</span>
                  @endif
                  @if($task->priority == 1)
                  <span class="badge badge-danger">High</span>
                  @endif
                </div>
              </td>
                <td>
                  @if($task->status==1)
                  <span class="badge badge-info">In-Progress</span>
                  @endif
                  @if($task->status==0)
                 <span class="badge badge-warning">Pending</span>
                  @endif
                  @if($task->status==2)
                 <span class="badge badge-success">Completed</span>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<style>
table#example thead tr th{
  background: #233560!important
}
</style>
@endsection


