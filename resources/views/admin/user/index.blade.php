@extends('layouts.adminbase')

@section('title', 'User List')


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
                        <h3 class="page-header" style="margin: 5px 0 3px; padding-bottom: 1px;">User List</h3>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th style="width: 40px">Show</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>
                                @foreach ($rs->roles as $role)
                                    {{$role->name}}
                                @endforeach

                            </td>
                            <td>
                                <a href="{{route('admin.user.show',['id'=>$rs->id])}}"class="btn btn-info"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    Show
                                </a>
                            </td>
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
