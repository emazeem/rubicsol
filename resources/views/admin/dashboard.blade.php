@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
      <div class="col-12 mb-2">
        <h4 class="float-left">Dashboard</h4>
        @if($attendanceExist)
        @if(!$ifUserCheckout)
        <a href="{{route('check.out')}}" class="btn btn-danger float-right" >Check Out</a>
        @endif
        @else
        <a href="{{route('check.in')}}" class="btn btn-success float-right" >Check In</a>
        @endif
      </div>
      <!--My Attendence-->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h5 class="float-left pb-1 font-weight-light"><i class="feather icon-clock mr-1"></i>My Attendance</h5>
            <table id="example" class="table table-bordered table-hover table-sm display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-c-blue">
                  <th>ID</th>
                  <th>Start Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                @if(count($attendances)>0)
                @foreach($attendances as $attendance)
                <tr>
                  <td>{{$attendance->id}}</td>
                  <td>{{date('d F, y',strtotime($attendance->check_in_date))}}</td>
                  <td>{{date('h:i A',strtotime($attendance->check_in))}}</td>
                  <td>{{date('h:i A',strtotime($attendance->check_out))}}</td>
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
                @else
                  <tr>
                    <td colspan="100%" class="text-center">No record found</td>
                  </tr>
                  @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--My task-->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h5 class="float-left pb-1 font-weight-light"><i class="bx bx-task mr-1"></i>My Tasks</h5>
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
                @if(count($tasks)>0)
                @foreach ($tasks as $task)
                <tr>
                  <td>{{$task->id}}</td>
                  <td>{{$task->user->fname}}{{$task->user->lname}}</td>
                  <td>{{$task->title}}</td>
                  <td>{{$task->description}}</td>
                  <td>
                    @if($task->status == 0)
                    <span class="badge badge-success">Low</span>
                    @endif
                    @if($task->status == 1)
                    <span class="badge badge-danger">High</span>
                    @endif
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
                  @else
                  <tr>
                    <td colspan="100%" class="text-center">No record found</td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      
      <!--My leave-->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h5 class="float-left pb-1 font-weight-light"><i class="fa fa-question mr-1"></i>My Leave</h5>
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">              
              <thead>
                <tr class="bg-c-blue">
                  <th>ID</th>
                  <th>USERS</th>
                  <th>START DATE</th>
                  <th>END DATE</th>
                  <th>REMARKS</th>
                  <th>STATUS</th>
                </tr>
              </thead>
              <tbody>
              @if(count($leaves)>0)
                @foreach ($leaves as $leave)
                <tr>
                  <td>{{$leave->id}}</td>
                  <td>{{$leave->user->fname}} {{$leave->user->lname}}</td>
                  <td>
                    {{$leave->start}}
                  </td>
                  <td>
                    {{$leave->end}}
                  </td>
                  <td>
                    {{$leave->remarks}}
                  </td>
                  <td>
                  @if($leave->status==1)
                  <span class="badge badge-info">Approved</span>
                  @endif
                  @if($leave->status==0)
                  <span class="badge badge-warning">Pending</span>
                  @endif
                  @if($leave->status==2)
                  <span class="badge badge-success">Declined</span>
                  @endif
                  </td>                  
                </tr>
                @endforeach
                @else
                  <tr>
                    <td colspan="100%" class="text-center">No record found</td>
                  </tr>
                  @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>


      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div id='calendar'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
  </div>
  
  <script>
  $(document).ready(function () {
    var SITEURL = "{{ url('/') }}";
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var calendar = $('#calendar').fullCalendar({
      editable: true,
      events: SITEURL + "/fullcalender",
      displayEventTime: false,
      editable: true,
      eventRender: function (event, element, view) {
        if (event.allDay === 'true') {
          event.allDay = true;
        } else {
          event.allDay = false;
        }
      },
      selectable: true,
      selectHelper: true,
      select: function (start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
           var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
           var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
           $.ajax({
            url: SITEURL + "/fullcalenderAjax",
            data: {
              title: title,
              start: start,
              end: end,
              type: 'add'
            },
            type: "POST",
            success: function (data) {
              displayMessage("Event Created Successfully");
              calendar.fullCalendar('renderEvent',
              {
                id: data.id,
                title: title,
                start: start,
                end: end,
                allDay: allDay
              },
              true
              );
              calendar.fullCalendar('unselect');
            }
          }
          );
        }
      },
      eventDrop: function (event, delta) {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
        $.ajax({
          url: SITEURL + '/fullcalenderAjax',
          data: {
            title: event.title,
            start: start,
            end: end,
            id: event.id,
            type: 'update'
          },
          type: "POST",
          success: function (response) {
            displayMessage("Event Updated Successfully");
          }
        }
        );
      },
      eventClick: function (event) {
        var deleteMsg = confirm("Do you really want to delete?");
        if (deleteMsg) {
          $.ajax({
            type: "POST",
            url: SITEURL + '/fullcalenderAjax',
            data: {
              id: event.id,
              type: 'delete'
            },
            success: function (response) {
              calendar.fullCalendar('removeEvents', event.id);
              displayMessage("Event Deleted Successfully");
            }
          }
          );
        }
      }
    }
    );
  }
  );
  function displayMessage(message) {
    toastr.success(message, 'Event');
  }
  </script>
  @endsection
  <style>

.table#example thead tr th{
  background: #233560!important;

}
</style>