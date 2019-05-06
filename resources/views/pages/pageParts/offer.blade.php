<div class="offer-outer">
    <div class="container">
        <div class="row">
        <div class="col-sm-6 col-xs-12">
            @if($offer)
                <h3>{{$offer->title}}</h3>
                <p>{{$offer->description}}</p>
                <a href="{{route('contacts')}}" class="btn">Call Us Now</a>
            @else
                <h3>Not defined</h3>
            @endif
        </div>
        <div class="col-sm-6 col-xs-12">
            <ul class="offer-list">
            <li>
                <figure><img src="images/offer_icon1.png" alt=""></figure>
                <span>EXPERT & <br/>
                PROFESSIONAL</span> </li>
            <li>
                <figure><img src="images/offer_icon2.png" alt=""></figure>
                <span>PROFESSIONAL <br/>
                APPROACH</span> </li>
            <li>
                <figure><img src="images/offer_icon3.png" alt=""></figure>
                <span>QUICK IN <br/>
                RESPONSE</span> </li>
            <li>
                <figure><img src="images/offer_icon4.png" alt=""></figure>
                <span>HIGHT QUALITY<br/>
                WORK</span> </li>
            <li>
                <figure><img src="images/offer_icon5.png" alt=""></figure>
                <span>SATISFACTION<br/>
                GUARANTEE</span> </li>
            </ul>
        </div>
        </div>
    </div>
</div>
