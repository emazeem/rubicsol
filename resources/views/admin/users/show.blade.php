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
    <table class="table table-bordered table-sm bg-white">
  
    <tr>
      <th scope="col">First Name</th>
      <td scope="col">{{$show->fname}}</td>
    </tr>
    <tr>
      <th scope="col">Last Name</th>
      <td scope="col">{{$show->lname}}</td>
    </tr>
    <tr>
      <th scope="col">Email</th>
      <td scope="col">{{$show->email}}</td>
    </tr>
    <tr>
      <th scope="col">Phone</th>
      <td scope="col">{{$show->phone}}</td>
    </tr>
    <tr>
      <th scope="col">Role</th>
      <td scope="col">{{$show->role}}</td>
    </tr>
    <tr>
      <th scope="col">Date of joining</th>
      <td scope="col">{{$show->joining}}</td>
    </tr>
    <tr>
      <th scope="col">Designation</th>
      <td scope="col">{{$show->designation}}</td>
    </tr>
    <tr>
      <th scope="col">Department</th>
      <td scope="col">{{$show->department}}</td>
    </tr>
    <tr>
      <th scope="col">CV</th>
      <td scope="col">
        <a href="{{$show->userCV()}}">{{$show->cv}}</a>
        <form action="{{route('update.cv')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{$show->id}}" name="id" id="id">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="file" id="file">
              <label class="custom-file-label" for="file">Choose file</label>
          </div>
          <div class="input-group-append">
            <button class="btn btn-sm btn-primary px-3" type="submit"> <i class="fa fa-upload"></i> Upload CV</button>
          </div>
        </div> 
      </form>
      </td>
    </tr>
    <tr>
      <!--Cnic uplaoding-->
      <th scope="col">Cnic</th>
      <td scope="col"><a href="{{$show->userCNIC()}}">{{$show->cnic}}</a> 
       <form action="{{route('update.cnic')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{$show->id}}" name="id" id="id">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="file" id="file">
              <label class="custom-file-label" for="file">Choose file</label>
          </div>
          <div class="input-group-append">
            <button class="btn btn-sm btn-primary px-3" type="submit"> <i class="fa fa-upload"></i> Upload CNIC</button>
          </div>
        </div> 
      </form>
    </td>
    </tr>
</table>
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
                    url: "{{route('users.update')}}",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        button.attr('disabled', null).html(previous);
                        swal('success', data.success, 'success').then(() => {
                            window.location.href = '{{url('users/view')}}/' + data.id;
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