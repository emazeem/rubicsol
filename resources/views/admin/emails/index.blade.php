@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4 border-bottom">{{ __('Email Marketing') }}</div>
                <div class="card-body pt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link bg-c-primary font-weight-bold active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Countries</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link bg-c-primary font-weight-bold" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add Email List</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <table class="table table-striped mt-2 table-sm table-bordered">
                                            <tr>
                                                <th>Country</th>
                                                <th>Action</th>
                                            </tr>
                                            @if(count($countries)>0)
                                                @foreach($countries as $country)
                                                    <tr>
                                                        <td>
                                                            {{$country->name}}
                                                        </td>
                                                        <td>
                                                            <a href="{{url('email/show/'.$country->id)}}" class="btn bg-c-primary btn-sm">Show</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2" class="text-center">No Data Found</td>
                                                </tr>
                                            @endif
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <form action="{{url('store-emails')}}" method="post">
                                            @csrf
                                            <div class="row mt-4">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="option">Select an Option</label>
                                                        <select class="form-control" id="option" name="option">
                                                            <option value="0">New Country</option>
                                                            <option value="1" selected>Existing Country</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group new-country" style="display: none">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" name="country" id="country">
                                                    </div>
                                                    <div class="form-group existing-countries">
                                                        <label for="country_id">Select Country</label>
                                                        <select class="form-control" id="country_id" name="country_id">
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="emails">Email List <small>(Separate Emails by ⏎)</small></label>
                                                    <textarea class="form-control" cols="1" rows="20" id="emails" name="emails"></textarea>
                                                    <button type="submit" class="btn btn-block bg-c-primary ">Store in Database</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>

        $(function () {
            $('#option').change(function (){
                var value=$(this).val();
                if(value=='0'){
                    $('.new-country').show();
                    $('.existing-countries').hide();
                }else{
                    $('.new-country').hide();
                    $('.existing-countries').show();
                }
            });
        });

    </script>
@endsection
