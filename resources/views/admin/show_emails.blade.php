@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <div class="row mt-5">
        <div class="col-sm-12 mt-5">
            <div class="card email-card">
                <div class="card-header">
                    <div class="card-body">
                        <div class="mail-body">
                            <div class="row">
                                <div class="col-12 mb-2 d-flex justify-content-between">
                                    <h4>Emails Listing of  {{$country->name}}</h4>
                                    <div>
                                        <a class="btn btn-primary" href="{{url('send-again/'.$country->id)}}">Send Email Again</a>
                                        <a class="btn btn-primary mr-5" href="{{url('send-emails/'.$country->id)}}">Send Emails</a>
                                    </div>

                                </div>
                                <div class="col-12" style="overflow-y: scroll;height: 70vh;">
                                    <table class="table table-striped table-sm table-bordered" style="">

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
                                                    <a href="{{url('email/delete/'.$email->id)}}" class="btn btn-danger btn-sm py-0">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
