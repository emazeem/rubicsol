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
            <input type="hidden" value="{{$edit->id}}" name="id">
            <div class="card ">
                <div class="card-header">
                    <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i> Update Application</h5>
                    <button class="btn btn-success float-right ml-1">Approved</button>
                    <button class="btn btn-danger float-right">Declined</button>
                </div>
                </div>
                <div class="card-body pt-4 bg-light border-top">
                    <div class="form-group col-md-4 col-12">
                        <label for="start" class="control-label">Start Date</label>
                        <input type="date" class="form-control" id="start" name="start" placeholder="Enter the date" autocomplete="off" value='{{$edit->start}}'>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label for="end" class="control-label">End Date</label>
                        <input type="date" class="form-control" id="end" name="end" placeholder="Ending date" value='{{$edit->end}}'>
                    </div>
                    <div class="col-md-4 pb-4">
                        <label for="remarks" class="control-label">Remarks</label>
                        <textarea class="form-control" name="remarks" placeholder="Reason">{{$edit->remarks}}</textarea>
                    </div>
                    <div class="form-group col-md-4 col-12">
                        <label for="reason" class="control-label">Reason</label>
                        <input type="text" class="form-control" id="end" name="reason" placeholder="reason" value='{{$edit->reason}}'>
                    </div>
                    <div class="col-md-4">
                        <label for="submit-one">Leave type</label>
                        <div class="form-check pb-1">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Half leave</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">Full leave</label>
                        </div>
                    </div>
                    <!--list of leaves-->
                    <div class="col-md-4 mt-2">
                        <form action="/action_page.php">
                            <label for="leave">Leave type:</label>
                            <select name="leave"  id="leave">
                                <option value="medical">Medical Leave</option>
                                <option value="casual">Casual Leave</option>
                                <option value="urgent">Urgent Leave</option>
                            </select>
                            <br><br>
                        </form>
                    </div>
                    <div class="card-footer bg-light border-top">
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ URL::previous() }}" class="btn bg-white border float-left"><i class="feather icon-chevron-left"></i>back</a>
                                <button type="submit" class="btn btn-primary user-btn float-right"><i class="feather icon-save"></i> Update</button>
                            </div>
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
                    url: "{{route('leave.application.update')}}", //leave.application.store
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        button.attr('disabled', null).html(previous);
                        swal('success', data.success, 'success').then(() => {
                            window.location.href = '{{url('leave-application/show')}}/' + data.id;
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
