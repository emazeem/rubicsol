@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12 mb-2">
            <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task mr-1"></i>Posts</h3>
            <a href="{{route('post.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i>Add Post</a>
        </div>
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-c-blue">
                        <th>ID</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($posts)>0)
                    @foreach ($posts as $post)
                    @if($post->status==1 && auth()->user()->role=="user")
                    <tr class="table-row">
                        <td>{{$post->id}}</td>
                        <td class="text-wrap">{{$post->content}}</td>
                        <td><img src="{{ asset('storage/posts/' . $post->image) }}" alt="" class="img-fluid img-thumbnail border-dark" width="160" height="90"></td>
                        <td>
                        @if($post->status==0)
                        <span class="badge badge-warning">Pending</span>
                        @endif
                        @if($post->status==1)
                        <span class="badge badge-success">Uploaded</span>
                        @endif
                        </td>
                        <td>
                         <a href="{{route('post.show',['id'=>$post->id])}}" class="btn btn-warning btn-sm ml-3"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                    @endif
                    @if (auth()->user()->role=="super-admin")
                    <tr class="table-row">
                        <td>{{$post->id}}</td>
                        <td class="text-wrap">{{$post->content}}</td>
                        <td><img src="{{ asset('storage/posts/' . $post->image) }}" alt="" class="img-fluid img-thumbnail border-dark" width="160" height="90"></td>
                        <td>
                        @if($post->status==0)
                        <span class="badge badge-warning">Pending</span>
                        @endif
                        @if($post->status==1)
                        <span class="badge badge-success">Uploaded</span>
                        @endif
                        </td>
                        @if(auth()->user()->role=="super-admin")
                        <td>
                        <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                        <a href="{{route('post.show',['id'=>$post->id])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger btn-sm delete" data-id="{{$post->id}}"><i class="fas fa-trash-alt"></i></a> 
                        </td>
                        @else 
                        <td class="text-center">
                        <a href="{{route('post.show',['id'=>$post->id])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        </td>                   
                        @endif
                    @endif
                    @endforeach
                @else
                  <tr><td colspan="100%" class="text-center">No record found</td></tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <style>
    .text-wrap{
    text-wrap: balance;
    }
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
                    title: "Are you sure to delete this post?",
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
