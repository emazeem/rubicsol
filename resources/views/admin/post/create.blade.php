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
        <li class="breadcrumb-item"><a href="{{route('post.index')}}">Post List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create Post</li>
      </ol>
    </nav>
          <form action="{{route('post.store')}}"  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card ">
            <div class="card-footer bg-light border-top">
              <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Add Post</h5>
                
                
              </div>
              <div class="form-group col-md-4 col-12">
                <label for="content" class="control-label">Content</label>
                <textarea type="text"  rows="4" cols="50" class="form-control" id="content" name="content"
                placeholder="Content">

                </textarea>
                <!-- <input type="text" class="form-control" id="content" name="content"
                placeholder="Content"> -->
              </div> 
              <!--image uploading-->
                <div class="form-group ml-3">
                  <label for="image">Choose Image</label>
                  <input type="file" class="form-control-file" id="image" name="image">
                </div>
               
              </div>
              <div class="card-footer bg-light border-top">
              <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-md user-btn float-right">
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
            url: "{{route('post.store')}}",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                button.attr('disabled', null).html(previous);
                swal('success', data.success, 'success').then(() => {
                    window.location.href = '{{url('post/show')}}/' + data.id;
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


