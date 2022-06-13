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
                                                                    <img src="{{asset('assets')}}/img/teachers/doctor-character-background_1270-84.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">
                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Doctor</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3  col-sm-6">
                                                            <div class="mu-our-teacher-single">
                                                                <figure class="mu-our-teacher-img">
                                                                    <img src="{{asset('assets')}}/img/teachers/doctor-character-background_1270-84.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Doctor</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3  col-sm-6">
                                                            <div class="mu-our-teacher-single">
                                                                <figure class="mu-our-teacher-img">
                                                                    <img src="{{asset('assets')}}/img/teachers/doctor-character-background_1270-84.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">
                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Doctor</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3  col-sm-6">
                                                            <div class="mu-our-teacher-single">
                                                                <figure class="mu-our-teacher-img">
                                                                    <img src="{{asset('assets')}}/img/teachers/doctor-character-background_1270-84.png" alt="teacher img"
                                                                         style="width: 190px;height: 190px">
                                                                </figure>
                                                                <div class="mu-ourteacher-single-content">
                                                                    <h4>Brian Dean</h4>
                                                                    <span>Doctor</span>
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
                                            @php
                                                $average = $data->comment->average('rate');
                                                if($average<1){ $temp = 0; $temp2 = 5;}
                                                elseif($average<2){ $temp = 1; $temp2 = 4;}
                                                elseif($average<3){ $temp = 2; $temp2 = 3;}
                                                elseif($average<4){ $temp = 3; $temp2 = 2; }
                                                elseif($average<5){ $temp = 4; $temp2 = 1;}
                                                elseif($average==5){ $temp = 5; $temp2 = 0;}
                                            @endphp
                                            <h3>@for($i=0;$i<$temp;$i++)<span class="fa fa-star"></span>@endfor
                                                    @for($i=0;$i<$temp2;$i++)<span class="fa fa-star-o"></span>@endfor
                                                    <span>{{number_format($average,1)}}/5 </span>
                                                    <span class="fa fa-angle-double-right" style="padding-left: 20px"></span>{{$data->comment->count('id')}} Değerlendirme</h3>
                                            <div class="comments">
                                                <ul class="commentlist">
                                                    <!-- Single Comment -->
                                                    @foreach($reviews as $rs)
                                                    <li>
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img alt="img" src="assets/img/testimonial-1.png" class="media-object news-img">
                                                                <a class="reply-btn"><span class="fa fa-star-o"></span> {{$rs->rate}}</a>
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="author-name">{{$rs->user->name}}</h4>
                                                                <span class="comments-date"> {{$rs->created_at}}</span>
                                                                <strong>{{$rs->subject}}</strong>
                                                                <p>{{$rs->review}} </p>
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
                                                <div>
                                                    <p class="comment-form-url">
                                                    <h3>Rating</h3>
                                                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5" >5</label>
                                                    <input type="radio" id="star4" name="rate" value="4" /><label for="star4" >4</label>
                                                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3" >3</label>
                                                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2" >2</label>
                                                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1"  >1</label>
                                                    </p>
                                                </div>

                                                @auth
                                                <p class="form-submit">
                                                    <input type="submit" value="Post Comment" class="mu-post-btn" name="submit">
                                                </p>
                                                @else
                                                    <p class="form-submit">
                                                        <a href="/login" class="mu-post-btn">Yorum yapmak için Giriş yapınız</a>
                                                    </p>
                                                @endauth
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end respond form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
