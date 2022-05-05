@extends('layouts.adminbase')

@section('title', 'Edit Policlinic : '.$data->title)


@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Policlinic: {{$data->title}}</h1>
            </div>
            <!--End Page Header -->
        </div>
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Policlinic Elements
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="{{route('admin.policlinic.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <div class="form-group">
                                <label>Detail</label>
                                <textarea class="form-control" name="detail" >{{$data->detail}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Image input</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Data</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->

    </div>
    <!-- end page-wrapper -->
@endsection
