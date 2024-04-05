@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
        <div class="col-12 mb-2">
            <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task mr-1"></i>Leaves</h3>
            <a href="{{route('leave.application.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i> Add Leave</a>
        </div>
        <div class="col-lg-12 table-responsive">
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-c-blue">
                        <th>ID</th>
                        <th>User</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Status</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($leaves)>0)
                    @foreach ($leaves as $leave)
                    <tr class="table-row">
                        <td>{{$leave->id}}</td>
                        <td>{{$leave->user->fname}} {{$leave->user->lname}}</td>
                        <td>{{$leave->start}}</td>
                        <td>{{$leave->end}}</td>
                        <td>
                        @if($leave->status==1)
                        <span class="badge badge-info">Approved</span>
                        @endif
                        @if($leave->status==0)
                        <span class="badge badge-warning">Pending</span>
                        @endif
                        @if($leave->status==2)
                        <span class="badge badge-success">Declined</span>
                        @endif
                    </td>
                    <td>{{$leave->remarks}}</td>
                    <td class="text-center">
                        @if(auth()->user()->role=="super-admin")
                        <a href="{{route('leave.edit',['id'=>$leave->id])}}" class="btn btn-success btn-sm"
                        ><i class="fas fa-edit"></i></a>
                        <a href="{{route('leave.show',['id'=>$leave->id])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{route('leave.delete',['id'=>$leave->id])}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        @elseif(auth()->user()->role=="user")
                        <a href="{{route('leave.show',['id'=>$leave->id])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                        @endif
                    </td>
                    </tr>
                    @endforeach
                    @else
                  <tr>
                    <td colspan="100%" class="text-center">No record found</td>
                  </tr>
                  @endif
                </tbody>
            </table>
        </div>
    </div>
    <style>
    table#example thead tr th{
     background: #233560!important
     }
     .table-row{
        background: #fff!important;
     }
     </style>
     @endsection