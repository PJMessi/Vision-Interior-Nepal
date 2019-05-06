<div class="service-outer">
    <div class="container">
        <div class="head">
            <h3>Our Services</h3>
            <p>Here are the services that we provide to our beloved customer.</p>
        </div>

        @if( count($services) > 0 )
            <div class="service-list service-slider owl-carousel">
                @foreach ($services as $service)
                    <div class="item">
                        <div class="service-box">
                            <figure><img src="{{asset('storage').'/'.$service->image}}" alt=""></figure>
                            <div class="service-detail">
                                <h4>{{$service->name}}</h4>
                                <p>{{$service->description}}</p>
                                {{-- <a href="service-detail.html" class="btn">Know More</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="col-md-4 offset-md-4" style="text-align:center;">
                <p>No services defined</p><br>
            </div>
        @endif

    </div>
</div>
