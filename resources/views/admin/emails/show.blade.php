@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="col-12 mb-2 d-flex justify-content-between">
                        <h4>Emails Listing of  {{$country->name}}</h4>
                        <div>
                            <a class="btn btn-primary" href="{{url('send-again/'.$country->id)}}">Send Email Again</a>
                            <a class="btn btn-primary " href="{{url('send-emails/'.$country->id)}}">Send Emails</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-4">
                    <div class="col-12" style="overflow-y: scroll;height: 70vh;">
                        <table class="table table-striped table-sm table-bordered" style="">
                            <tr>
                                <th class="bg-c-primary ">Email</th>
                                <th class="bg-c-primary text-center">Mark as Favorite</th>
                                <th class="bg-c-primary text-center">Action</th>
                            </tr>
                            @foreach($country->emails as $k=>$email)
                                <tr>
                                    <td>
                                        {{$k+1}}

                                        @if($email->status==0)
                                            <span class="text-danger">✗</span>
                                        @else
                                            <span class="text-success">✓</span>

                                        @endif
                                        {{$email->email}}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{url('add-favourite/'.$email->id)}}" class="{{$email->is_favourite==1?'text-warning':'text-dark'}}">★</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{url('email/delete/'.$email->id)}}" class="btn btn-danger btn-sm px-2">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
