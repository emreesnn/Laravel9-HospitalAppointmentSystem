@extends('layouts.frontbase')

@section('title', 'Randevularım')

@section('content')

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Randevularım</h2>
                        <ol class="breadcrumb">
                            <li><a href={{route('home')}}>Ana Sayfa</a></li>
                            <li><a href={{route('home')}}>Randevularım</a></li>
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
                                                    <h4>Randevularım</h4>
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Name</th>
                                                            <th>Policlinic</th>
                                                            <th>Doctor</th>
                                                            <th>Date</th>
                                                            <th>Time</th>
                                                            <th>Price</th>
                                                            <th>Payment</th>
                                                            <th>Status</th>
                                                            <th style="width: 40px">Cancel</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($data as $rs)
                                                            <tr>
                                                                <td>{{$rs->id}}</td>
                                                                <td>{{$rs->user->name}}</td>
                                                                <td>{{$rs->policlinic->title}}</td>
                                                                <td>{{$rs->doctor_id}}</td>
                                                                <td>{{$rs->date}}</td>
                                                                <td>{{$rs->time}}</td>
                                                                <td>{{$rs->price}}</td>
                                                                <td>{{$rs->payment}}</td>
                                                                <td>{{$rs->status}}</td>
                                                                <td><a href="{{route('userpanel.appointmentcancel',['id'=>$rs->id])}}"class="btn btn-danger"
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
