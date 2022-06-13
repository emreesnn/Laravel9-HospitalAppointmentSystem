@extends('layouts.frontbase')

@section('title','İletişim | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>İletişim</h2>
                        <ol class="breadcrumb">
                            <li><a href={{route('home')}}>Home</a></li>
                            <li class="active">İletişim</li>
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
                            <h2>Bizimle İletişime Geçin</h2>
                        </div>
                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                        <div class="row">@include ('home.messages')</div>
                                        <form class="contactform" action="{{route("storemessage")}}" method="post" >
                                            @csrf
                                            <p class="comment-form-author">
                                                <label for="author">Ad Soyad <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" value="" name="name" placeholder="Ad Soyad">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">E-posta <span class="required">*</span></label>
                                                <input type="email" required="required" aria-required="true" value="" name="email" placeholder="örnek@mail.com">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="phone">Telefon <span class="required">*</span></label>
                                                <input type="text" required="required" aria-required="true" value="" name="phone" placeholder="111-111 11 11">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="subject">Konu </label>
                                                <input type="text" name="subject" placeholder="Konu">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="message">Mesajınız </label>
                                                <textarea required="required" aria-required="true" rows="8" cols="45" name="message" placeholder="..."></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Gönder" class="mu-post-btn" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        {!! $setting->contact !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49153.30189456037!2d27.854732886218898!3d39.647883281296934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b70042e6885283%3A0x1e35cd88765dd434!2zMznCsDM4JzE2LjIiTiAyN8KwNTMnNTYuNyJF!5e0!3m2!1str!2str!4v1654777800610!5m2!1str!2str" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
