@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('post.index')}}">Posts List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Post Details</li>
      </ol>
    </nav>
<div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task mr-1"></i>Posts</h3>
    @if(auth()->user()->role=="super-admin")
        <a href="{{route('post.approve',['id'=>$show->id])}}" class="btn float-right btn-success ml-2">Mark as Uploaded</button></a> 
    @endif
  </div>
    <table class="table table-bordered table-sm bg-white">

    <tr>
      <th scope="col">Id</th>
      <td scope="col">{{$show->id}}</td>
    </tr>
      <th scope="col">Content</th>
      <td scope="col">{{$show->content}}</td>
    </tr>
    <tr>
        <th scope="col">Status</th>
        @if($show->status==0)
                        <td><span class="badge badge-warning">Pending</span></td>
                        @endif
                        @if($show->status==1)
                        <td><span class="badge badge-success">Marked as Uploaded</span></td>
                        @endif
    </tr>
    <tr>
      <th scope="col">Image</th>
      <td scope="col"><img src="{{ asset('storage/posts/' . $show->image) }}" alt="" class="img-fluid img-thumbnail" width="220" height="130"></td>
    </tr>
    
  </table>
</div>

<script>
    $(document).ready(function(){
        $('#prioritySwitch').on('change', function() {
            var priority = $(this).is(':checked') ? 1 : 0;
            $.ajax({
                url: "{{ route('task.switchPriority', ['id' => $show->id]) }}",
                method: 'GEt',
                data: {
                    _token: '{{ csrf_token() }}',
                    priority: priority
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


@endsection
