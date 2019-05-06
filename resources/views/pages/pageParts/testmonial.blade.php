<div class="testimonial-outer">
    <div class="container">
        <div class="head">
            <h3>Client’s Testimonial</h3>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="testimonial-slider owl-carousel">
                    @if( count($testmonials) > 0)
                        @foreach($testmonials as $testmonial)
                            <div class="testimonial-box item">
                                <figure><img src="images/testimonial_thumb.png" alt=""></figure>
                                <p>{{$testmonial->message}}</p>
                                <strong>- {{$testmonial->firstName}} {{$testmonial->lastName}}</strong>
                            </div>
                        @endforeach
                    @else
                        <div class="col-md-4 offset-md-4" style="text-align:center;">
                            <p>No testmonials yet</p><br>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
