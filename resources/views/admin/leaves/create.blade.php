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
              <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Add Application</h5>
              
              <div class="form-group col-md-4 col-12">
                <label for="start" class="control-label">Start Date</label>
                <input type="date" class="form-control" id="start" name="start"
                placeholder="Enter the date"
                autocomplete="off" value=''>
              </div>
              <div class="form-group col-md-4 col-12">
                <label for="end" class="control-label">End Date</label>
                <input type="date" class="form-control" id="end" name="end"
                placeholder="Ending date">
              </div>
                <div class="col-md-4 pb-4">
                  <label for="remarks" class="control-label">Remarks</label>
                  <textarea class="form-control" name="remarks" placeholder="Reason">
                  </textarea>
                </div>
                <div class="card-footer bg-light border-top">
                  <div class="row">
                    <div class="col-12">
                      <a href="{{ URL::previous() }}" class="btn btn-sm bg-white border float-left">
                        <i class="feather icon-chevron-left"></i>back</a>
                        <button type="submit" class="btn btn-primary btn-sm user-btn float-right">
                          <i class="feather icon-save"></i>Save</button>
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
            url: "{{route('leave.application.store')}}", //leave.application.store
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


