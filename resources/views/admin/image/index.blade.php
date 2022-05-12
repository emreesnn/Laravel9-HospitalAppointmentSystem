    @extends('layouts.adminwindow')

    @section('title', 'Policlinic Image Gallery')


    @section('content')
        <h3>{{$policlinic->title}}</h3>
        <form role="form" action="{{route('admin.image.store',['pid'=>$policlinic->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <label>Title <input class="form-control" name="title" placeholder="Title"></label>
                    </div>
                    <div class="col-md-4">
                        <input type="file" name="image">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="page-header" style="margin: 5px 0 3px; padding-bottom: 1px;">Policlinic Image List</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th style="width: 40px">Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                @endif
                            </td>
                            <td><a href="{{route('admin.image.destroy',['pid'=>$policlinic->id,'id'=>$rs->id])}}"class="btn btn-danger"
                                   onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        @endsection
