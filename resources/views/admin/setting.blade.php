@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Settings</h1>
            </div>
            <!--End Page Header -->
        </div>
        <!--Pill Tables-->
        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#custom-tabs-one-general" data-toggle="tab">General</a>
                    </li>
                    <li><a href="#custom-tabs-one-smtp" data-toggle="tab">Smtp Email</a>
                    </li>
                    <li><a href="#custom-tabs-one-social" data-toggle="tab">Social Media</a>
                    </li>
                    <li><a href="#custom-tabs-one-about" data-toggle="tab">About Us</a>
                    </li>
                    <li><a href="#custom-tabs-one-contact" data-toggle="tab">Contact Page</a>
                    </li>
                    <li><a href="#custom-tabs-one-references" data-toggle="tab">References</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="custom-tabs-one-general">
                        <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" id="keywords" name="keywords" value="{{$data->keywords}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" id="description" name="description" value="{{$data->description}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" id="company" name="company" value="{{$data->company}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" id="address" name="address" value="{{$data->address}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" id="phone" name="phone" value="{{$data->phone}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" id="email" name="email" value="{{$data->email}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" value="{{$data->status}}">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Choose Icon File</label>
                            <input type="file" name="icon">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-smtp">
                        <div class="form-group">
                            <label>Smtp Server</label>
                            <input type="text" id="smtpserver" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Smtp Email</label>
                            <input type="text" id="smtpemail" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Smtp Password</label>
                            <input type="text" id="smtppassword" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Smtp Port</label>
                            <input type="text" id="smtpport" name="twitter" value="{{$data->smtpport}}" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-social">
                        <div class="form-group">
                            <label>Fax</label>
                            <input type="text" id="fax" name="fax" value="{{$data->fax}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" id="facebook" name="facebook" value="{{$data->facebook}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" id="instagram" name="instagram" value="{{$data->instagram}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" id="twitter" name="twitter" value="{{$data->twitter}}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <input type="text" id="youtube" name="youtube" value="{{$data->youtube}}" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-about">
                        <div class="form-group">
                            <label>About Us</label>
                            <textarea class="form-control" id='aboutus' name="aboutus">
                                    {!! $data->aboutus !!}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-contact">
                        <label>Contact</label>
                        <textarea class="form-control" id='contact' name="contact">
                                    {!! $data->contact !!}
                            </textarea>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-references">
                        <label>References</label>
                        <textarea class="form-control" id='references' name="references">
                                    {!! $data->references !!}
                        </textarea>
                        <button type="submit" class="btn btn-primary">Update Setting</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!--End Pill Tables-->
    </div>
    <!-- end page-wrapper -->

@endsection
        @section('foot')
            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

            <script>
                $(function () {
                    //Summernote
                    $('#aboutus').summernote()
                    $('#contact').summernote()
                    $('#references').summernote()
                });
            </script>
@endsection
