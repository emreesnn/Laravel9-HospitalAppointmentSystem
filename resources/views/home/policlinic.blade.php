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
                                                    @include('home.messages')
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
                                <!-- start blog comment -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mu-comments-area">
                                            <h3>5 Comments</h3>
                                            <div class="comments">
                                                <ul class="commentlist">
                                                    <!-- Single Comment -->
                                                    @foreach($reviews as $rs)
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="author-name">{{$rs->user->name}}</h4>
                                                                <span class="comments-date"> {{$rs->created_at}}</span>
                                                                <strong>{{$rs->subject}}</strong>
                                                                <p>{{$rs->review}}</p>
                                                                <strong>{{$rs->rate}}</strong>
                                                                <a class="reply-btn" href="#">Reply <span class="fa fa-long-arrow-right"></span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                    <!-- Single End -->
                                                </ul>
                                                <!-- comments pagination -->
                                                <nav>
                                                    <ul class="pagination comments-pagination">
                                                        <li>
                                                            <a aria-label="Previous" href="#">
                                                                <span class="fa fa-long-arrow-left"></span>
                                                            </a>
                                                        </li>
                                                        <li><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">4</a></li>
                                                        <li><a href="#">5</a></li>
                                                        <li>
                                                            <a aria-label="Next" href="#">
                                                                <span class="fa fa-long-arrow-right"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end blog comment -->
                                <!-- start respond form -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="respond">
                                            <h3 class="reply-title">Bir Yorum Yazın</h3>
                                            <form id="commentform" action="{{route('storecomment')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="policlinic_id" value="{{$data->id}}">
                                                <p class="comment-notes">
                                                    Your email address will not be published. Required fields are marked <span class="required">*</span>
                                                </p>
                                                <p class="comment-form-author">
                                                    <label for="author">Konu <span class="required">*</span></label>
                                                    <input type="text" required="required" size="30" value="" name="subject" placeholder="Konu">
                                                </p>
                                                <p class="comment-form-comment">
                                                    <label for="message">Yorum</label>
                                                    <textarea required="required" aria-required="true" rows="8" cols="45" name="review" placeholder="Yorumunuz..."></textarea>
                                                </p>
                                                <select class="form-control">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                                <div>
                                                    <p class="comment-form-url">
                                                    <h3>rating</h3>
                                                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5" ></label>
                                                    <span><input type="radio" id="star4" name="rate" value="4" /><label for="star4" ></label></span>

                                                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3" ></label>
                                                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2" ></label>
                                                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1" ></label>
                                                    </p>
                                                </div>

                                                @auth
                                                <p class="form-submit">
                                                    <input type="submit" value="Post Comment" class="mu-post-btn" name="submit">
                                                </p>
                                                @else
                                                    <p class="form-submit">
                                                        <input href="/login" value="Yorum yapmak için Giriş yapınız." class="mu-post-btn" >
                                                    </p>
                                                @endauth
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end respond form -->
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
