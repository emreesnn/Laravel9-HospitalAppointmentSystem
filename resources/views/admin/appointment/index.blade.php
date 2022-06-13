@extends('layouts.adminbase')

@section('title', 'Appointment List')


@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row" style=" padding-top: 20px">
            <!--  page header -->
            <!-- end  page header -->
        </div>
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <div class="panel-body">
                        <h3 class="page-header" style="margin: 5px 0 3px; padding-bottom: 1px;">Appointment List</h3>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Policlinic</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Price</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->policlinic->title}}</td>
                            <td>{{$rs->doctor_id}}</td>
                            <td>{{$rs->date}}</td>
                            <td>{{$rs->time}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->payment}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                                <a href="{{route('admin.appointment.show',['id'=>$rs->id])}}"class="btn btn-info"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    Show
                                </a>
                            </td>
                            <td><a href="{{route('admin.appointment.destroy',['id'=>$rs->id])}}"class="btn btn-danger"
                                   onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- end page-wrapper -->
@endsection
