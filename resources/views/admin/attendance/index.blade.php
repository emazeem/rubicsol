@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<!--top header-->
<div class="row">
  <div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="feather icon-users"></i> Attendance</h3>
    @if(auth()->user()->role == "super-admin")
    <a href="{{route('attendance.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mx-1"></i>Attendance</a>
    @endif
  </div>
  <!--Search bar-->
  <div class="col-12 mb-2 mt-2">
    <form action="" class="col-4 float-right">
      @if(auth()->user()->role == "super-admin")
      <div class="form-group input-group-append mr-4 col-8 float-right">
        <label for="date" class="control-label font-weight-bold"></label>
        <input type="date" class="form-control" id="" name="search" placeholder="date" value="{{$search}}">
        <button class="btn btn-primary rounded-lg toggle-button px-3"><i class="fa fa-search"></i></button>
      </div>
      <select class="form-select custom-select input-group-append float-right mt-1" name="user_id">
        <option selected value="">-- All User</option>
        @foreach($users as $user)
        <option value="{{ $user->id }}" {{$searchUser == $user->id ?'selected':''}}>{{ $user->fname }} {{ $user->lname }}</option>
        @endforeach
      </select>
      @endif
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
        <td>{{date('d F, y',strtotime($attendance->check_in_date))}}</td>
        <td>{{date('h:i A', strtotime($attendance->check_in))}}</td>
        <td>{{date('d F, y',strtotime($attendance->check_out_date))}}</td>
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
          <a href="{{route('attendance.delete', ['id' => $attendance->id])}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
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
  <script type="text/javascript">
  $(document).on('click', '.delete', function (e) {
  e.preventDefault();
                swal({
                    title: "Are you sure to delete this attendance?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var id = $(this).attr('data-id');
                            var token = '{{csrf_token()}}';
                            e.preventDefault();
                            $.ajax({
                              url: $(this).attr('href'),
                                type: 'POST',
                                dataType: "JSON",
                                data: {id:id,_token:token},
                                success: function (data) {
                                    swal('success', data.success, 'success').then(function (){
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
