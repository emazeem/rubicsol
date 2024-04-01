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
          <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card ">
            <div class="card-footer bg-light border-top">
              <h5 class="font-weight-light"><i class="bx bx-task"></i>Add Post</h5>
              
              <div class="form-group col-md-4 col-12">
                <label for="user" class="control-label">User</label>
                <input type="text" class="form-control" id="user" name="user"
                placeholder="User"
                autocomplete="off" value=''>
              </div>
              <div class="form-group col-md-4 col-12">
                <label for="content" class="control-label">Content</label>
                <input type="text" class="form-control" id="content" name="content"
                placeholder="Content">
              </div> 
              <!--image uploading-->
              <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group ml-3">
                  <label for="image">Choose Image</label>
                  <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary ml-3">Upload</button>
              <!--User-Status-->
              <div class="container mt-4">
                <label for="status">Status</label>
                <span class="badge badge-success">Active</span>
                <span class="badge badge-danger">Inactive</span>
              </div>
              </div>
              <div class="card-footer bg-light border-top">
              <div class="row">
                <div class="col-12">
                  <a href="{{ URL::previous() }}" class="btn btn-md bg-white border float-left">
                    <iclass="feather icon-chevron-left></i>back</a>
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
            url: "{{route('post.create')}}",
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


