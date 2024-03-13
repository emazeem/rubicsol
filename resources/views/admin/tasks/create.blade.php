@extends('admin.layout.master')
@section('content')
<script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
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
              <h5 class="font-weight-light"><i class="feather icon-clock"></i>Add Task</h5>
              <div class="row">
                <div class="form-group col-md-3 col-12 ">
                  <label for="end_time" class="control-label">Title</label>
                  <input type="text">
                </div>
                <div class="form-group col-md-3 col-12 ">
                  <label for="end_time" class="control-label">Discription</label>
                  <input type="text">
                </div>
                <div class="col-md-3">
                  <label for="user_id" class="control-label">User</label>
                  <select class="form-select custom-select" name="user_id">
                    <option selected disabled>Select User</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="status" class="control-label">Status</label>
                  <select class="form-select custom-select" name="status">
                    <option value="0">CheckIn</option>
                    <option value="1">CheckOut</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="card-footer bg-light border-top">
              <div class="row">
                <div class="col-12">
                  <a href="{{ URL::previous() }}" class="btn btn-sm bg-white border float-left">
                    <iclass="feather icon-chevron-left></i>back</a>
                    <button type="submit" class="btn btn-primary btn-sm user-btn float-right">
                      <iclass="feather icon-save></i>Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <script>
        $(":input").inputmask();
        </script>
        <script type="text/javascript">
        $(document).ready(function () {
          $("#user-form").on('submit', (function (e) {
            var button = $('.user-btn');
            var previous = $('.user-btn').html();
            button.attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing');
            e.preventDefault();
            $.ajax({
              url: "{{route('attendance.store')}}",
              type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData: false,
               success: function (data) {
                button.attr('disabled', null).html(previous);
                swal('success', data.success, 'success').then(() => {
                  window.location.href = '{{url('attendance')}}/';
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


