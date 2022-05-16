@extends('layouts.frontbase')

@section('title', 'Hospital Appointment Project')

@section('slider')
    @include("home.slider")
@endsection

@section('content')

    <!-- Start search box -->
    <div id="mu-search">
        <div class="mu-search-area">
            <button class="mu-search-close"><span class="fa fa-close"></span></button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mu-search-form">
                            <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End search box -->

    <!-- Start service  -->
    <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-book"></span>
                            <h3>Learn Online</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-users"></span>
                            <h3>Expert Teachers</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-table"></span>
                            <h3>Best Classrooms</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
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
                            <p>Göz Kardiyoloji vs vs.</p>
                        </div>
                        <!-- End Title -->
                        <!-- Start features content -->
                        <div class="mu-features-content">
                            <div class="row">
                                @foreach($productlist1 as $rs)
                                    @if($rs->status = "True")
                                        <div class="col-lg-2 col-md-4  col-sm-6">
                                            <div  class="mu-single-feature" style="text-align:center; cursor: pointer;"
                                                  onclick="window.location='{{route('policlinic',['id'=>$rs->id])}}';" >
                                                <span style="border:none;">
                                                    <img src="{{asset('assets')}}/img/clinics/eye.jpg"
                                                        style="width: 100px;height: 100px">
                                                </span>
                                                <h4>{{$rs->title}}</h4>
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
    <!-- Start about us -->
    <section id="mu-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-us-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="mu-about-us-left">
                                    <!-- Start Title -->
                                    <div class="mu-title">
                                        <h2>About Us</h2>
                                    </div>
                                    <!-- End Title -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                        <li>Saepe a minima quod iste libero rerum dicta!</li>
                                        <li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
                                        <li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
                                        <li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="mu-about-us-right">
                                    <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                                        <img src="{{asset('assets')}}/img/about-us.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->

    <!-- Start about us counter -->
    <section id="mu-abtus-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-abtus-counter-area">
                        <div class="row">
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-book"></span>
                                    <h4 class="counter">568</h4>
                                    <p>Subjects</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-users"></span>
                                    <h4 class="counter">3500</h4>
                                    <p>Students</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-flask"></span>
                                    <h4 class="counter">65</h4>
                                    <p>Modern Lab</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single no-border">
                                    <span class="fa fa-user-secret"></span>
                                    <h4 class="counter">250</h4>
                                    <p>Teachers</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us counter -->

    <!-- Start latest course section -->
    <section id="mu-latest-courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-latest-courses-area">
                        <!-- Start Title -->
                        <div class="mu-title">
                            <h2>Unitelerimiz</h2>
                            <p>Yenidogan fizik tedavi vsvs.</p>
                        </div>
                        <!-- End Title -->
                        <!-- Start latest course content -->
                        <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('assets')}}/img/courses/1.jpg" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Drawing</a>
                                            <span><i class="fa fa-clock-o"></i>90Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('assets')}}/img/courses/2.jpg" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Engineering </a>
                                            <span><i class="fa fa-clock-o"></i>75Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('assets')}}/img/courses/3.jpg" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Academic</a>
                                            <span><i class="fa fa-clock-o"></i>45Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('assets')}}/img/courses/1.jpg" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Drawing</a>
                                            <span><i class="fa fa-clock-o"></i>90Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('assets')}}/img/courses/2.jpg" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Engineering </a>
                                            <span><i class="fa fa-clock-o"></i>75Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="mu-latest-course-single">
                                    <figure class="mu-latest-course-img">
                                        <a href="#"><img src="{{asset('assets')}}/img/courses/3.jpg" alt="img"></a>
                                        <figcaption class="mu-latest-course-imgcaption">
                                            <a href="#">Academic</a>
                                            <span><i class="fa fa-clock-o"></i>45Days</span>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-latest-course-single-content">
                                        <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                                        <div class="mu-latest-course-single-contbottom">
                                            <a class="mu-course-details" href="#">Details</a>
                                            <span class="mu-course-price" href="#">$165.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <!-- Start testimonial -->
    <section id="mu-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonial-area">
                        <div id="mu-testimonial-slide" class="mu-testimonial-content">
                            <!-- start testimonial single item -->
                            <div class="mu-testimonial-item">
                                <div class="mu-testimonial-quote">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                                    </blockquote>
                                </div>
                                <div class="mu-testimonial-img">
                                    <img src="{{asset('assets')}}/img/testimonial-1.png" alt="img">
                                </div>
                                <div class="mu-testimonial-info">
                                    <h4>John Doe</h4>
                                    <span>Happy Student</span>
                                </div>
                            </div>
                            <!-- end testimonial single item -->
                            <!-- start testimonial single item -->
                            <div class="mu-testimonial-item">
                                <div class="mu-testimonial-quote">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                                    </blockquote>
                                </div>
                                <div class="mu-testimonial-img">
                                    <img src="{{asset('assets')}}/img/testimonial-3.png" alt="img">
                                </div>
                                <div class="mu-testimonial-info">
                                    <h4>Rebaca Michel</h4>
                                    <span>Happy Parent</span>
                                </div>
                            </div>
                            <!-- end testimonial single item -->
                            <!-- start testimonial single item -->
                            <div class="mu-testimonial-item">
                                <div class="mu-testimonial-quote">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                                    </blockquote>
                                </div>
                                <div class="mu-testimonial-img">
                                    <img src="{{asset('assets')}}/img/testimonial-2.png" alt="img">
                                </div>
                                <div class="mu-testimonial-info">
                                    <h4>Stev Smith</h4>
                                    <span>Happy Student</span>
                                </div>
                            </div>
                            <!-- end testimonial single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial -->

    <!-- Start from blog -->
    <section id="mu-from-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-from-blog-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>From Blog</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum vitae quae vero ut natus. Dolore!</p>
                        </div>
                        <!-- end title -->
                        <!-- start from blog content   -->
                        <div class="mu-from-blog-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <article class="mu-blog-single-item">
                                        <figure class="mu-blog-single-img">
                                            <a href="#"><img src="{{asset('assets')}}/img/blog/blog-1.jpg" alt="img"></a>
                                            <figcaption class="mu-blog-caption">
                                                <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                            </figcaption>
                                        </figure>
                                        <div class="mu-blog-meta">
                                            <a href="#">By Admin</a>
                                            <a href="#">02 June 2016</a>
                                            <span><i class="fa fa-comments-o"></i>87</span>
                                        </div>
                                        <div class="mu-blog-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                            <a class="mu-read-more-btn" href="#">Read More</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <article class="mu-blog-single-item">
                                        <figure class="mu-blog-single-img">
                                            <a href="#"><img src="{{asset('assets')}}/img/blog/blog-2.jpg" alt="img"></a>
                                            <figcaption class="mu-blog-caption">
                                                <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                            </figcaption>
                                        </figure>
                                        <div class="mu-blog-meta">
                                            <a href="#">By Admin</a>
                                            <a href="#">02 June 2016</a>
                                            <span><i class="fa fa-comments-o"></i>87</span>
                                        </div>
                                        <div class="mu-blog-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                            <a class="mu-read-more-btn" href="#">Read More</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <article class="mu-blog-single-item">
                                        <figure class="mu-blog-single-img">
                                            <a href="#"><img src="{{asset('assets')}}/img/blog/blog-3.jpg" alt="img"></a>
                                            <figcaption class="mu-blog-caption">
                                                <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                            </figcaption>
                                        </figure>
                                        <div class="mu-blog-meta">
                                            <a href="#">By Admin</a>
                                            <a href="#">02 June 2016</a>
                                            <span><i class="fa fa-comments-o"></i>87</span>
                                        </div>
                                        <div class="mu-blog-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                            <a class="mu-read-more-btn" href="#">Read More</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!-- end from blog content   -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End from blog -->
@endsection
