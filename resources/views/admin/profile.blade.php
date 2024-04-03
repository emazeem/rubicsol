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
            <div class="row">
              <div class="col-md-3">
                <img src="{{auth()->user()->userProfile()}}" class="img-fluid border-dark">
              </div>
              <div class="col-md-9">
                <table class="table table-bordered table-sm bg-white table-sm col-6">
                  <tr>
                    <th scope="col">Name</th>
                    <td>{{ auth()->user()->fname }} {{ auth()->user()->lname }}</td>
                  </tr>
                  <tr>
                    <th scope="col">Email</th>
                    <td>{{ auth()->user()->email }}</td>
                  </tr>
                  <tr>
                    <th scope="col">Phone</th>
                    <td>{{ auth()->user()->phone }}</td>
                  </tr>
                  <tr>
                    <th scope="col">Role</th>
                    <td>{{ auth()->user()->role }}</td>
                  </tr>
                </table>
              </div>
            </div>
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


