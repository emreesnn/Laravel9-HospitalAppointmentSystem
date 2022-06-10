@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row" style=" padding-top: 20px">
            <!--  page header -->
            <div class="col-lg-12">
                <h1><a href="{{route('admin.faq.create')}}" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i>Add Question</a></h1>
            </div>
            <!-- end  page header -->
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="page-header" style="margin: 5px 0 3px; padding-bottom: 1px;">FAQ List</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer</th>
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
                            <td>{{$rs->question}}</td>
                            <td>{!! $rs->answer !!}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"class="btn btn-info">Edit</a></td>
                            <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"class="btn btn-danger"
                                   onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                            <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"class="btn btn-success">Show</a></td>
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
