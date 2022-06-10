@extends('layouts.frontbase')

@section('title','Sık Sorulan Sorular | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
@section('head')
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('content')

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Sık Sorulan Sorular</h2>
                        <ol class="breadcrumb">
                            <li><a href={{route('home')}}>Home</a></li>
                            <li class="active">Sık Sorulan Sorular</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- start course content container -->
                                <div class="mu-course-container mu-course-details">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-latest-course-single">
                                                <div class="mu-latest-course-single-content">
                                                    <h2>Sık Sorulan Sorular</h2>
                                                    <h4> </h4>
                                                </div>
                                                <div class="mu-latest-course-single-content">
                                                    <div id="accordion">
                                                    @foreach($datalist as $rs)
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}" >
                                                                        <h4 style="border: 2px solid darkgray; background-color: lightgray" >{{$rs->question}}</h4>
                                                                    </a>
                                                                </div>
                                                                <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                                                    <div class="card-body">
                                                                        <p>{!! $rs->answer !!}</p>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
