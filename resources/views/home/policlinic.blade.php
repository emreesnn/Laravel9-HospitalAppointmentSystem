@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Bölüm Hakkında</h2>
                        <ol class="breadcrumb">
                            <li><a href={{route('home')}}>Home</a></li>
                            <li><a href={{route('bolumler')}}>{{$data->category->title}}</a></li>
                            <li class="active">{{$data->title}}</li>
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
                                                    <h2><a href="#">{{$data->title}}</a></h2>
                                                    <h4>Description</h4>
                                                    <p>{{$data->description}}</p>
                                                    <p>{!! $data->detail !!}</p>
                                                    <h4>Doktorlarımız</h4>
                                                </div>
                                                <div class="mu-our-teacher-content">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3  col-sm-6">
                                                            <div class="mu-our-teacher-single">
                                                                <figure class="mu-our-teacher-img">
                                                                    <img src="{{asset('assets')}}/img/teachers/teacher-01.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">
                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Math Teacher</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3  col-sm-6">
                                                            <div class="mu-our-teacher-single">
                                                                <figure class="mu-our-teacher-img">
                                                                    <img src="{{asset('assets')}}/img/teachers/teacher-01.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">
                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Math Teacher</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3  col-sm-6">
                                                            <div class="mu-our-teacher-single">
                                                                <figure class="mu-our-teacher-img">
                                                                    <img src="{{asset('assets')}}/img/teachers/teacher-01.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">
                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Math Teacher</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3  col-sm-6">
                                                            <div class="mu-our-teacher-single">
                                                                <figure class="mu-our-teacher-img">
                                                                    <img src="{{asset('assets')}}/img/teachers/teacher-01.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">
                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Math Teacher</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end course content container -->
                                <!-- start related course item -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mu-related-item">
                                            <h3>Related Courses</h3>
                                            <div class="mu-related-item-area">
                                                <div id="mu-related-item-slide">
                                                    <div class="col-md-6">
                                                        <div class="mu-latest-course-single">
                                                            <figure class="mu-latest-course-img">
                                                                <a href="#"><img alt="img" src="{{asset('assets')}}/img/courses/1.jpg"></a>
                                                                <figcaption class="mu-latest-course-imgcaption">
                                                                    <a href="#">Drawing</a>
                                                                    <span><i class="fa fa-clock-o"></i>90Days</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="mu-latest-course-single-content">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                <div class="mu-latest-course-single-contbottom">
                                                                    <a href="#" class="mu-course-details">Details</a>
                                                                    <span href="#" class="mu-course-price">$165.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mu-latest-course-single">
                                                            <figure class="mu-latest-course-img">
                                                                <a href="#"><img alt="img" src="{{asset('assets')}}/img/courses/2.jpg"></a>
                                                                <figcaption class="mu-latest-course-imgcaption">
                                                                    <a href="#">Drawing</a>
                                                                    <span><i class="fa fa-clock-o"></i>90Days</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="mu-latest-course-single-content">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                <div class="mu-latest-course-single-contbottom">
                                                                    <a href="#" class="mu-course-details">Details</a>
                                                                    <span href="#" class="mu-course-price">$165.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mu-latest-course-single">
                                                            <figure class="mu-latest-course-img">
                                                                <a href="#"><img alt="img" src="{{asset('assets')}}/img/courses/3.jpg"></a>
                                                                <figcaption class="mu-latest-course-imgcaption">
                                                                    <a href="#">Drawing</a>
                                                                    <span><i class="fa fa-clock-o"></i>90Days</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="mu-latest-course-single-content">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                <div class="mu-latest-course-single-contbottom">
                                                                    <a href="#" class="mu-course-details">Details</a>
                                                                    <span href="#" class="mu-course-price">$165.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mu-latest-course-single">
                                                            <figure class="mu-latest-course-img">
                                                                <a href="#"><img alt="img" src="{{asset('assets')}}/img/courses/1.jpg"></a>
                                                                <figcaption class="mu-latest-course-imgcaption">
                                                                    <a href="#">Drawing</a>
                                                                    <span><i class="fa fa-clock-o"></i>90Days</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="mu-latest-course-single-content">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                                                <div class="mu-latest-course-single-contbottom">
                                                                    <a href="#" class="mu-course-details">Details</a>
                                                                    <span href="#" class="mu-course-price">$165.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end start related course item -->
                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Categories</h3>
                                        <ul class="mu-sidebar-catg">
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="">Web Development</a></li>
                                            <li><a href="">Math</a></li>
                                            <li><a href="">Physics</a></li>
                                            <li><a href="">Camestry</a></li>
                                            <li><a href="">English</a></li>
                                        </ul>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Popular Course</h3>
                                        <div class="mu-sidebar-popular-courses">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('assets')}}/img/courses/1.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Medical Science</a></h4>
                                                    <span class="popular-course-price">$200.00</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('assets')}}/img/courses/2.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Web Design</a></h4>
                                                    <span class="popular-course-price">$250.00</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{asset('assets')}}/img/courses/3.jpg" alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Health & Sports</a></h4>
                                                    <span class="popular-course-price">$90.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Archives</h3>
                                        <ul class="mu-sidebar-catg mu-sidebar-archives">
                                            <li><a href="#">May <span>(25)</span></a></li>
                                            <li><a href="">June <span>(35)</span></a></li>
                                            <li><a href="">July <span>(20)</span></a></li>
                                            <li><a href="">August <span>(125)</span></a></li>
                                            <li><a href="">September <span>(45)</span></a></li>
                                            <li><a href="">October <span>(85)</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Tags Cloud</h3>
                                        <div class="tag-cloud">
                                            <a href="#">Health</a>
                                            <a href="#">Science</a>
                                            <a href="#">Sports</a>
                                            <a href="#">Mathematics</a>
                                            <a href="#">Web Design</a>
                                            <a href="#">Admission</a>
                                            <a href="#">History</a>
                                            <a href="#">Environment</a>
                                        </div>
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
