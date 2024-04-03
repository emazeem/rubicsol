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
            <div class="col-12">
            <form  id="user-form" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{$edit->id}}" name="id">
          <div class="card ">
            <div class="card-footer bg-light border-top">
              <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Update Post</h5>
                
                
              </div>
              <div class="form-group col-md-4 col-12">
                <label for="content" class="control-label">Content</label>
                <input type="text" class="form-control" id="content" name="content"
                placeholder="Content" value="{{$edit->content}}">
              </div> 
              <!--image uploading-->
                <div class="form-group ml-3">
                  <label for="image">Choose Image</label>
                  <input type="file" class="form-control-file" id="image" name="image" value="{{$edit->image}}">
                </div>
               
              </div>
                <div class="card-footer bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                        <a href="{{ URL::previous() }}" class="btn btn-md bg-white border float-left">
                            <iclass="feather icon-chevron-left></i>back</a>
                            <button type="submit" class="btn btn-primary btn-md user-btn float-right">
                            <iclass="feather icon-save></i>Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </form>
            </div>
        </div>
        <script type="text/javascript">
 $(document).ready(function () {
    $("#user-form").on('submit', (function (e) {
        var button = $('.user-btn');
        var previous = $('.user-btn').html();
        button.attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing');
        e.preventDefault();
        $.ajax({
            url: "{{route('post.update')}}",
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


