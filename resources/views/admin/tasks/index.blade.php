@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12 mb-2">
            <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>Tasks</h3>
            <a href="{{route('tasks.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i>Add Task</a>
        </div>
        <!--search-->
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
        <!--task table-->
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-c-blue">
                        <th>ID</th>
                        <th>User</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($tasks)>0)
                    @foreach ($tasks as $task)
                    <tr class="table-row">
                        <td>{{$task->id}}</td>
                        <td>{{$task->user->fname}} {{$task->user->lname}}</td>
                        <td>{{$task->title}}</td>
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
                        <td>
                        @if($task->priority == 0)
                        <span class="badge badge-success">Low</span>
                        @endif
                        @if($task->priority == 1)
                        <span class="badge badge-danger">High</span>
                        @endif
                        </td>
                        </td>
                        <td>
                        <a href="{{route('task.edit',['id'=>$task->id])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                        <a href="{{route('task.show',['id'=>$task->id])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{route('task.delete',['id'=>$task->id])}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
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
            <div class="row float-right mt-2 mr-0">
          {{$tasks->links('pagination::bootstrap-4')}}
        </div>
        </div>
    </div>
    <style>
    table#example thead tr th{
     background: #233560!important
     }
     .table-row{
        background: #fff!important;
     }
     </style>
<script type="text/javascript">
$(document).on('click', '.delete', function (e) {
  e.preventDefault();
                swal({
                    title: "Are you sure to delete this task?",
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