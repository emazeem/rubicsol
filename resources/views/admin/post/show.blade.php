@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task mr-1"></i>My Post</h3>
    
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
      <th scope="col">Image</th>
      <td scope="col"><img src="{{ asset('storage/posts/' . $show->image) }}" alt="" class="img-fluid img-thumbnail" width="220" height="130"></td>
    </tr>
    
  </table>
</div>
<div class="card-footer bg-light border-top">
    <div class="row">
        <div class="col-12">
            <a href="{{ URL::previous() }}" class="btn btn-md bg-white border-dark float-left">
            <iclass="feather icon-chevron-left></i>back</a>
        </div>
    </div>
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
                    // Optionally, you can display an error message to the user
                }
            });
        });
    });
</script>


@endsection
