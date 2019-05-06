@if($banner)
    <div class="banner-outer"> <span class="banner-shadow"></span>
        <div class="banner-image" style="background: url( {{fixPath(asset('storage').'/'.$banner->image)}} ) no-repeat center top / cover;">
            <div class="container">
                <div class="content animated fadeInLeft">
                    <h1>{{$banner->heading1}}</h1>
                    <h2>@if($banner->heading2){{$banner->heading2}}@endif</h2>
                    <p>@if($banner->heading3){{$banner->heading3}}@endif</p>
                    <a href="#ScrollToWorks" class="btn scroll">Peek at our Works</a>
                    <a href="{{route('blog', ['id'=>6])}}" class="btn2">Price Details</a>
                </div>
            </div>
        </div>
    </div>

@else
    <div class="banner-outer"> <span class="banner-shadow"></span>
        <div class="banner-image">
            <div class="container">
                <div class="content animated fadeInLeft">
                    <h1>No Banner</h1>
                    <h2>Inserted</h2>
                    <a href="#ScrollToWorks" class="btn scroll">Peek at our Works</a>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
    });
</script>
