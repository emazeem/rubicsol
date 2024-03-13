@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
      <div class="col-12 mb-2">

      </div>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
          <div class="col-12">
            <h5 class="font-weight-light"><i class="fas fa-user-shield"></i>Change Password</h5>
          </div>
            <form action="{{route('update.password')}}" enctype="multipart/form-data" method="post">
              @csrf
              <div class="form-group col-md-6 col-12">
                <label for="currentPassword" class="control-label">Current Password</label>        
                <div class="input-group ">
                  <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Current Password">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-success toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
              <label for="currentPassword" class="control-label">New Password</label>        
                <div class="input-group ">
                  <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-success toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                  </div>
                </div>
              </div>
              <div>
              <div class="form-group col-md-6 col-12">
              <label for="newPassword_confirmation" class="control-label">Retype Password</label>        
                <div class="input-group ">
                  <input type="password" class="form-control" id="newPassword_confirmation" name="newPassword_confirmation" placeholder="Retype New Password">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-success toggle-button"><i class="fa fa-eye-slash toggle-icon"></i></button>
                  </div>
                </div>
              </div>
              <div>
                <div class="input-group mb-1">
                  <div class="form-group col-md-3 col-12 ">
                    <button class="btn btn-success float-left">Update Password</button>
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
      <script>
$(document).ready(function(){
  $(".toggle-button").click(function(){
    var input=$(this).parent().parent().find('input');
    $(this).children('i').toggleClass("fa-eye fa-eye-slash ");

    var type=input.attr('type');
    
    if(type=='password'){
      input.attr('type','text');
    }else{
      input.attr('type','password');
    }
  });
});
</script>
      @endsection


