@extends('layouts.frontbase')

@section('title','E-Randevu')


@section('content')

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Randevu Kayıt</h2>
                        <ol class="breadcrumb">
                            <li><a href={{route('home')}}>Ana Sayfa</a></li>
                            <li class="active">E-Randevu</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Randevu</h2>
                        </div>
                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-contact-left">
                                        <div class="row">@include ('home.messages')</div>
                                        <form class="contactform" action="{{route("storeappointment")}}" method="post" >
                                            @csrf
                                            <p class="comment-form-author">
                                                <label for="email">Poliklinik</label>
                                                <select class="form-control" name="policlinic" value="">
                                                    @foreach($clinics as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Doktor</label>
                                                <select class="form-control" name="doctor" value="">
                                                    @foreach($doctors as $rs)
                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                            <p class="form-submit">
                                                <input type="date" value="" class="mu-post-btn" name="date">
                                            </p>
                                            <p class="form-submit">
                                                <input type="time" value="" class="mu-post-btn" name="time">
                                            </p>
                                            @auth
                                                <p class="form-submit">
                                                    <input type="submit" value="Randevu Al" class="mu-post-btn" name="submit">
                                                </p>
                                            @else
                                                <p class="form-submit">
                                                    <a href="/login" class="mu-post-btn">Randevu Almak için Giriş yapınız</a>
                                                </p>
                                            @endauth
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end contact content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact  -->

@endsection

