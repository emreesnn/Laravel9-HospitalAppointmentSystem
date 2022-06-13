@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('slider')
    @include("home.slider")
@endsection

@section('content')

    <!-- Start service  -->
    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single" style="height: 225px">
                            <span class="fa fa-heartbeat"></span>
                            <h3>Ünitelerimiz</h3>
                            <p>Ünitelerimizde son teknoloji ürünler ile dünya standartlarında hizmet verilmektedir.</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single" style="height: 225px">
                            <span class="fa fa-user-md"></span>
                            <h3>Doktorlar</h3>
                            <p>Hastanemizde alanının en iyisi bilgili,güvenilir ve yetenekli doktorlarmız bulunmaktadır.</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single" style="height: 225px">
                            <span class="fa fa-gear"></span>
                            <h3>Teknolojimiz</h3>
                            <p>Hastanemiz sürekli yenilenen teknolojisi ve geleceğe yönelik yatırımlarla güvenle ilerlemektedir.</p>
                        </div>
                        <!-- Start single service -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service  -->
    <!-- Start features section -->
    <section id="mu-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-features-area">
                        <!-- Start Title -->
                        <div class="mu-title">
                            <h2>Bolumlerimiz</h2>
                            <p>Güçlü kadromuz, yüksek teknolojimiz ile sizlere en iyi hizmeti veriyoruz.</p>
                        </div>
                        <!-- End Title -->
                        <!-- Start features content -->
                        <div class="mu-features-content" >
                            <div class="row">
                                @foreach($productlist1 as $rs)
                                    @if($rs->status == 'True')
                                        <div class="col-lg-2 col-md-4  col-sm-6" >
                                            <div style="text-align:center; cursor: pointer;" onmouseover = "this.style.backgroundColor = 'lightblue'"
                                                 onmouseout  = "this.style.backgroundColor = 'white'" onclick="window.location='{{route('policlinic',['id'=>$rs->id])}}';" >
                                                <span style="border:none;">
                                                    <img src="{{Storage::url($rs->image)}}"
                                                        style="width: 100px;height: 100px">
                                                </span>
                                                <h4 style="font-family: 'Roboto', sans-serif;color:#004789">{{$rs->title}}</h4>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- End features content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End features section -->
    <!-- Start latest course section -->
    <section id="mu-latest-courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-latest-courses-area">
                        <!-- Start Title -->
                        <div class="mu-title">
                            <h2>Unitelerimiz</h2>
                        </div>
                        <!-- End Title -->
                        <!-- Start latest course content -->
                        <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                            @foreach($units as $rs)
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{Storage::url($rs->image)}}" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">{{$rs->title}}</a>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <p>{{$rs->description}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- End latest course content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest course section -->

    <!-- Start our teacher -->
    <section id="mu-our-teacher">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-our-teacher-area">
                        <!-- begain title -->
                        <div class="mu-title">
                            <h2>Doktorlarimz</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p>
                        </div>
                        <!-- end title -->
                        <!-- begain our teacher content -->
                        <div class="mu-our-teacher-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-3  col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="{{asset('assets')}}/img/teachers/teacher-01.png" alt="teacher img">
                                            <div class="mu-our-teacher-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h4>Brian Dean</h4>
                                            <span>Math Teacher</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="{{asset('assets')}}/img/teachers/teacher-02.png" alt="teacher img">
                                            <div class="mu-our-teacher-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h4>James Hein</h4>
                                            <span>Physics Teacher</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="{{asset('assets')}}/img/teachers/teacher-03.png" alt="teacher img">
                                            <div class="mu-our-teacher-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h4>Rebeca Michel</h4>
                                            <span>English Teacher</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="{{asset('assets')}}/img/teachers/teacher-04.png" alt="teacher img">
                                            <div class="mu-our-teacher-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-linkedin"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h4>John Doe</h4>
                                            <span>Biology Teacher</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End our teacher content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End our teacher -->

@endsection
