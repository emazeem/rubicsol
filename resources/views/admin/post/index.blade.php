@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12 mb-2">
            <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>Posts</h3>
            <a href="{{route('post.index')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle"></i>Add Post</a>
        </div>
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-c-blue">
                        <th>ID</th>
                        <th>User</th>
                        <th>Contact</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->user->fname}} {{$post->user->lname}}</td>
                        <td>{{$post->contact}}</td>
                        <td>{{$post->image}}</td>
                        <td>{{$post->status}}</td>
                        <td>
                        @if($post->status==1)
                        <span class="badge badge-info">In-Progress</span>
                        @endif
                        @if($task->status==0)
                        <span class="badge badge-warning">Pending</span>
                        @endif
                        @if($post->status==2)
                        <span class="badge badge-success">Completed</span>
                        @endif
                        <td>
                        @if($post->priority == 0)
                        <span class="badge badge-success">Low</span>
                        @endif
                        @if($post->priority == 1)
                        <span class="badge badge-danger">High</span>
                        @endif
                        </td>
                        </td>
                        <td>
                        <a href="{{route('post.edit',['id'=>$task->id])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                        <a href="{{route('post.show',['id'=>$task->id])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{route('post.delete',['id'=>$task->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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