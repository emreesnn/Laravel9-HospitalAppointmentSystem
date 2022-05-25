@extends('layouts.frontbase')

@section('title', 'Bolumler')

@section('content')

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Bölümlerimiz</h2>
                        <ol class="breadcrumb">
                            <li><a href={{route('index')}}>Home</a></li>
                            <li><a href={{route('bolumler')}}>Bölümlerimiz</a></li>
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
                                                    <h2>Bölümler</h2>
                                                    <h4>Hastanemiz, poliklinik hizmetleri, radyoloji ünitesi, laboratuvar ünitesi, tam teşekküllü ameliyathaneleri,acil gözlem yatakları ve check-up hizmetleri ile hastalarına üst düzeyde sağlık hizmeti sunmaktadır.</h4>
                                                    <ul style="list-style-type:none">
                                                        @foreach($productlist1 as $rs)
                                                            @if($rs->status == 'True')
                                                        <li style="padding-top: 15px">
                                                            <a href={{route('policlinic',['id'=>$rs->id])}}><img style="width: 40px;height: 40px" src="{{Storage::url($rs->image)}}">{{$rs->title}}</a>
                                                        </li>
                                                            @endif
                                                            @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
