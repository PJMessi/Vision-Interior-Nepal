<div class="why-outer">
    <span class="why-outer-left"></span>

    <span class="why-outer-right"></span>

    <div class="container">
        <div class="row">
            @if($marketing)
                <div class="col-sm-6 col-xs-12">
                    <h3>{{$marketing->heading1}}</h3>
                    <p>{!!$marketing->content1!!}</p>
                </div>
                <div class="col-sm-6 col-xs-12 p-l-30">
                    <h3>{{$marketing->heading2}}</h3>
                    <p>{!!$marketing->content2!!}</p>
                    <a href="{{route('blogs')}}" class="btn">See our blogs</a>
                </div>
            @else
                <div class="col-md-4 offset-md-4" style="text-align:center;">
                    <p>Not defined</p>
                </div>
            @endif

        </div>
    </div>
</div>
