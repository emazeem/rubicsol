@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12 mb-2">
            <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>Leaves</h3>
            <a href="{{route('tasks.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle"></i> Add Leave</a>
        </div>
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-c-blue">
                        <th>ID</th>
                        <th>User</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Status</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leaves as $leave)
                    <tr>
                        <td>{{$leave->id}}</td>
                        <td>{{$leave->user->name}}</td>
                        <td>{{$leaves->start}}</td>
                        <td>{{$leaves->end}}</td>
                        <td>
                        @if($task->status==1)
                        <span class="badge badge-info">Approved</span>
                        @endif
                        @if($task->status==0)
                        <span class="badge badge-warning">Pending</span>
                        @endif
                        @if($task->status==2)
                        <span class="badge badge-success">Declined</span>
                        @endif
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


