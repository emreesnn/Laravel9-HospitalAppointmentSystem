@extends('layouts.frontbase')

@section('title', 'Kullanıcı Yorumları')

@section('content')

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Bölümlerimiz</h2>
                        <ol class="breadcrumb">
                            <li><a href={{route('home')}}>Home</a></li>
                            <li><a href={{route('bolumler')}}>Kullanıcı Yorumları</a></li>
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
                                                    <h4>Kullanıcı Yorumları</h4>
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Policlinic</th>
                                                            <th>Subject</th>
                                                            <th>Review</th>
                                                            <th>Rate</th>
                                                            <th>Status</th>
                                                            <th style="width: 40px">Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($comments as $rs)
                                                            <tr>
                                                                <td>{{$rs->id}}</td>
                                                                <td><a href="{{route('policlinic',['id'=>$rs->policlinic_id])}}">{{$rs->policlinic->title}}</a></td>
                                                                <td>{{$rs->subject}}</td>
                                                                <td>{{$rs->review}}</td>
                                                                <td>{{$rs->rate}}</td>
                                                                <td>{{$rs->status}}</td>
                                                                <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"class="btn btn-danger"
                                                                       onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <ul style="list-style-type:none">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Kullanıcı Menü</h3>
                                        <div class="mu-single-sidebar">
                                        @include('home.user.usermenu')
                                    </div>
                                    <!-- end single sidebar -->
                                </aside>
                                <!-- / end sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
