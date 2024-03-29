@extends('layouts.adminbase')

@section('title', 'Show Category : '.$data->title)


@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row" style=" padding-top: 40px">
            <!-- Page Header -->
            <div class="col-lg-12">
                <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-primary"><i class="fa fa-refresh fa-fw"></i>Edit</a>
                <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" class="btn btn-danger" onclick="return confirm('Deleting !! Are you sure ?')"><i class="fa fa-ban fa-fw"></i>Delete</a>
            </div>
            <!--End Page Header -->
        </div>
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Detail
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 180px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>{{$data->keywords}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td></td>
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
                    </table>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->

    </div>
    <!-- end page-wrapper -->
@endsection
