@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12 mb-2">
            <h3 class="float-left pb-1 font-weight-light"><i class="fa fa-tasks"></i>Tasks</h3>
            <a href="{{route('tasks.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-tasks"></i>Add Task</a>
        </div>
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-c-blue">
                        <th>ID</th>
                        <th>User</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{$tasks->id}}</td>
                        <td>{{$tasks->user->name}}</td>
                        <td>{{$tasks->id}}</td>
                        <td>{{$tasks->id}}->Description</td>
                        <td>{{$tasks->id}}->Action</td>
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


