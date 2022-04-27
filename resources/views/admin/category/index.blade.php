@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Category List</h1>
            </div>
            <!--End Page Header -->
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Category List
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->image}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="/admin/category/edit{{$rs->id}}"class="btn btn-info">Edit</a></td>
                            <td><a href="/admin/category/delete{{$rs->id}}"class="btn btn-danger">Delete</a></td>
                            <td><a href="/admin/category/show{{$rs->id}}"class="btn btn-success">Show</a></td>
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
