@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<div class="row">
    <div class="col-12 mb-2">
     

    </div>
  <div class="col-lg-12">
  <div class="card">
  <div class="card-body table-responsive">
  <form action="{{route('change.profile')}}" enctype="multipart/form-data" method="post">
        @csrf
      <button class="btn btn-success float-right" >Change Password</button>
      <div class="row">
                            <div class="form-group col-md-3 col-12">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="First Name"
                                       autocomplete="off" value=''>
                            </div>
                            <div class="form-group col-md-3 col-12">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-3 col-12 ">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password">
        </div>
      </form>
  </div>

</div>
</div>

  </div>

 </div>
    <style>
      table#example thead tr th{
        background: #233560!important
      }
    </style>
@endsection


