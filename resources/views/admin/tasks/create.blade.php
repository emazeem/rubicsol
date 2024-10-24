@extends('admin.layout.master')
@section('content')
<script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    @if(Session::has('success'))
        <script>
        $(document).ready(function () {
          swal("Done!", '{{Session('success')}}', "success");
        });
        </script>
        @endif
        <div class="row pb-3">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('task.index')}}">Task List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create Task</li>
      </ol>
    </nav>
          <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card ">
            <div class="card-footer bg-light border-top">
              <h5 class="font-weight-light"><i class="bx bx-task"></i>Add Task</h5>
              
              <div class="form-group col-md-4 col-12">
                <label for="title" class="control-label font-weight-bold">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                placeholder="Title"
                autocomplete="off" value=''>
              </div>
              <div class="form-group col-md-4 col-12">
                <label for="description" class="control-label font-weight-bold">Description</label>
                <textarea type="text" class="form-control" id="description" name="description"
                placeholder="Description"></textarea>
              </div>
                <div class="col-md-4">
                  <label for="user_id" class="control-label font-weight-bold">User</label>
                  <select class="form-select custom-select" name="user_id">
                    <option selected disabled>--Select User</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</option>
                     @endforeach
                  </select>
                </div>
              </div>
              <div class="card-footer bg-light border-top">
              <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-md user-btn  float-right">
                      <iclass="feather icon-save></i>Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <script type="text/javascript">
 $(document).ready(function () {
    $("#user-form").on('submit', (function (e) {
        var button = $('.user-btn');
        var previous = $('.user-btn').html();
        button.attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing');
        e.preventDefault();
        $.ajax({
            url: "{{route('tasks.store')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                button.attr('disabled', null).html(previous);
                swal('success', data.success, 'success').then(() => {
                    window.location.href = '{{url('task/show')}}/' + data.id;
                });
            },
            error: function (xhr) {
                button.attr('disabled', null).html(previous);
                erroralert(xhr);
            }
        });
    }));
});
</script>     
          @endsection


