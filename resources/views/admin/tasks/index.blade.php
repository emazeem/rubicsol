@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12 mb-2">
            <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>Tasks</h3>
            <a href="{{route('tasks.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle"></i>Add Task</a>
        </div>
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-c-blue">
                        <th>ID</th>
                        <th>User</th>
                        <th>Title</th>
                        <th>Subtask</th>
                        <th>Status</th>
                        <th>Priority</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->user->fname}} {{$task->user->lname}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->subtask}}</td>
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
                        <a href="{{route('task.delete',['id'=>$task->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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