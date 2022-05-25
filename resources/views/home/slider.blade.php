<!-- Start Slider -->
<section id="mu-slider">
    <!-- Start single slider item -->
    @foreach($sliderdata as $rs)
    <div class="mu-slider-single">
        <div class="mu-slider-img" style="cursor: pointer;" onclick="window.location='#';">
            <figure>
                <img src="{{Storage::url($rs->image)}}" style="height: 500px">
            </figure>
        </div>
    </div>
    @endforeach
</section>
<!-- End Slider -->
