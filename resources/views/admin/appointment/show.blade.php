@extends('layouts.adminwindow')

@section('title', 'Show Comment : '.$data->title)


@section('content')

        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail Comment Data
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 180px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Policlinic</th>
                            <td>{{$data->policlinic->title}}</td>
                        </tr>
                        <tr>
                            <th>Name & Surname</th>
                            <td>{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Doctor</th>
                            <td>{{$data->doctor_id}}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$data->date}}</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>{{$data->time}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Payment</th>
                            <td>{{$data->payment}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th>Ip Number</th>
                            <td>{{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Status : </th>
                            <td>
                            <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>Approved</option>
                                    <option>Denied</option>
                                </select>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary">Update Appointment</button>
                                </div>
                            </form>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->

@endsection
