<div class="build-outer">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-xs-12">
            @if($quote)
                <h3 class="yellowfy">{{$quote->heading1}}</h3>
                <h4>{{$quote->heading2}}</h4>
            @else
                <div class="col-md-4 offset-md-4 yellowfy" style="text-align:center;">
                    <p>No quotes defined</p><br>
                </div>
            @endif
            <a href="{{route('contacts')}}" class="btn">Contact Us</a> </div>
        </div>
    </div>
</div>
