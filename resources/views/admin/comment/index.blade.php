@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')


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
                        <h3 class="page-header" style="margin: 5px 0 3px; padding-bottom: 1px;">Comment List</h3>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Policlinic</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('admin.policlinic.show',['id'=>$rs->policlinic_id])}}">{{$rs->policlinic->title}}</a></td>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>
                                <a href="{{route('admin.comment.show',['id'=>$rs->id])}}"class="btn btn-info"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    Show
                                </a>
                            </td>
                            <td><a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}"class="btn btn-danger"
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
