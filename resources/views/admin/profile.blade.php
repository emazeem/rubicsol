@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<div class="row">
    <div class="col-12 mb-2">
      <form action="{{route('change.profile')}}" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="profile">
      <button class="btn btn-success float-right" >Change Profile</button>
      
      </form>

    </div>
  <div class="col-lg-12">
  <div class="card">
  <div class="card-body table-responsive">
    <img src="{{auth()->user()->userProfile()}}" class="img-fluid">
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


