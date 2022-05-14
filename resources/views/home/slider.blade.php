<!-- Start Slider -->
<section id="mu-slider">
    <!-- Start single slider item -->
    @foreach($sliderdata as $rs)
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="{{Storage::url($rs->image)}}" style="height: 500px">
            </figure>
        </div>
        <div class="mu-slider-content" style="cursor: pointer;" onclick="window.location='#';">
            <h4>{{$rs->title}}</h4>
            <span></span>
            <br>
        </div>
    </div>
    @endforeach
</section>
<!-- End Slider -->
