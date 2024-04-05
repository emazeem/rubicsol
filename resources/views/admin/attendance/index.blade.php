@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>


<div class="row">
  <div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="feather icon-users"></i> Attendance</h3>
    @if(auth()->user()->role == "super-admin")
    <a href="{{route('attendance.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mx-1"></i>Attendance</a>
    @endif
  </div>
  <!--Search bar-->
  <div class="row"></div>
  <div class="col-12 mb-2 mt-2">
    <form action="" class="col-4 float-right">
      <div class="input-group-append">
        <input type="search" name="search" id="" class="form-control rounded-lg" placeholder="Search..." value="{{$search}}" />
        <button class="btn btn-primary rounded-lg toggle-button px-3"><i class="fa fa-search"></i></button>
      </div>
    </form>
  </div>
</div>
    
<!--user table-->
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
      @if(count($attendances) > 0)
      @foreach($attendances as $attendance)
      <tr class="table-row">
        <td>{{$attendance->id}}</td>
        <td>{{$attendance->user->fname}} {{$attendance->user->lname}}</td>
        <td>{{$attendance->check_in_date}}</td>
        <td>{{date('h:i A', strtotime($attendance->check_in))}}</td>
        <td>{{$attendance->check_out_date}}</td>
        <td>{{date('h:i A', strtotime($attendance->check_out))}}</td>
        <td>
          @if($attendance->status == 1)
          <span class="badge badge-success">Check Out</span>
          @endif
          @if($attendance->status == 0)
          <span class="badge badge-primary">Check In</span>
          @endif
        </td>
        @if(auth()->user()->role == "super-admin")
        <td>
          <a href="{{route('attendance.edit', ['id' => $attendance->id])}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a></button>
          <a href="{{route('attendance.show', ['id' => $attendance->id])}}" class="btn btn-warning btn-sm" ><i class="fas fa-eye"></i></a></button>
          <a href="{{route('attendance.delete', ['id' => $attendance->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
        </td>
        @else
        <td class="text-center">
            <a href="{{route('attendance.show', ['id' => $attendance->id])}}" class="btn btn-warning btn-sm" ><i class="fas fa-eye"></i></a></button>
          </td>
        </tr>
        @endif
        @endforeach
        @else
        <tr>
          <td colspan="100%" class="text-center">No record found</td>
        </tr>
        @endif
      </tbody>
    </table>
    <div class="row float-right mt-2 mr-0">
          {{$attendances->links('pagination::bootstrap-4')}}
        </div>
  </div>

  <style>
      table#example thead tr th{
        background: #233560!important;
      }
      .table-row{
        background: #fff!important;
      }
    </style>
    
    <script>
        swal("Deleted!", "Your file has been deleted.", "success");
    </script>

@endsection


