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
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$data->review}}</td>
                        </tr>
                        <tr>
                            <th>Rate</th>
                            <td>{{$data->rate}}</td>
                        </tr>
                        <tr>
                            <th>Ip Number</th>
                            <td>{{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
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
                            <th>Admin Note : </th>
                            <td>
                            <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary">Update Comment</button>
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
