
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="">
<meta name="author" content="">

{{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}"> --}}
<title> @if($company) {{$company->name}}| @endif {{$title}}</title>
<!-- Reset CSS -->
<link href="{{asset('css/reset.css')}}" rel="stylesheet" type="text/css">
<!-- Bootstrap -->
<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<!-- Iconmoon -->
<link href="{{asset('assets/iconmoon/css/iconmoon.css')}}" rel="stylesheet" type="text/css">
<!-- Owl Carousel -->
<link href="{{asset('assets/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
<!-- Animate -->
<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
<!-- Font Css Style -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
<!-- Custom Style -->
<link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css">
<!-- Favicon -->
@if($company && $company->favicon_image)
    <link rel="icon" href="{{asset('storage').'/'.$company->favicon_image}}" type="image/png" />
@endif
</head>


<body>
    <!-- Start Header -->
    <header>
    <!-- Start Header Sec -->
    <div class="container header-sec">
        <div class="row">

            <span class="col-xs-12 col-sm-4 logo">
                <a href="{{route('index')}}">
                    @if($company && $company->logo)
                        <img src="{{asset('storage').'/'.$company->logo}}" class="img-responsive" alt="">
                    @else
                        <p class="yellowfy">No logo added.</p>
                    @endif
                </a>
            </span>

            <div class="col-xs-12 col-sm-8 header-right-bottom">
            <!-- Start Header Right Top -->
                <div class="header-right-top">
                    @if($contacts)
                        <a class="tel-number" href="tel:{{$contacts->phone1}}">
                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                            {{$contacts->phone1}}
                        </a>


                        <a class="email-info" href="mailto:{{$contacts->email1}}">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            {{$contacts->email1}}
                        </a>

                    @else
                        <p class="yellowfy">No contact information</p>
                    @endif
                </div>
            <!-- End Header Right Top -->

            <!-- Start Navigation -->
            <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                <li class="nav-item @if($title == 'Home') active @endif"> <a class="nav-link" href="{{route('index')}}"><i class="fas fa-home"></i> Home</a> </li>
                <!-- <li class="nav-item"> <a class="nav-link" href="about-us.html">ABOUT US</a> </li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="service.html">Services</a> </li>-->
                <li class="nav-item @if($title == 'Projects') active @endif"> <a class="nav-link" href="{{route('projects')}}"><i class="fas fa-project-diagram"></i> Projects</a> </li>
                <li class="nav-item @if($title == 'Blogs') active @endif"> <a class="nav-link" href="{{route('blogs')}}"><i class="fab fa-blogger-b"></i> Blogs</a> </li>
                <li class="nav-item @if($title == 'Contacts') active @endif">   <a class="nav-link" href="{{route('contacts')}}"><i class="fas fa-address-book"></i> Contact Us</a> </li>
                </ul>
            </div>
            </nav>
            <!-- End Navigation -->
        </div>
        </div>
    </div>
    <!-- End Header Sec -->
    </header>
    <!-- End Header -->

    <div id="app">
        @yield('content')
    </div>

    <!-- Start Footer -->
    <footer class="footer">
    <!-- Start Footer top -->
    <div class="footer-top">
        <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="footer-detail">
                    <br><br>
                    <a href="{{route('index')}}" class="footer-logo">
                        @if($company && $company->logo)
                            <img src="{{asset('storage').'/'.$company->logo}}" class="img-responsive" alt="">
                        @else
                            <p class="yellowfy">No logo added.</p>
                        @endif
                    </a>
                </div>
            </div>


            <div class="col-sm-4 col-xs-12">
            <div class="imp-links">
                <h3>About Us</h3>
                <p>
                    @if($company && $company->description)
                        {{$company->description}}
                    @else
                        No description added.
                    @endif
                </p>
            </div>
            </div>


            <div class="col-sm-4 col-xs-12">
                <div class="contact-us">
                    <h3>Get In Touch</h3>
                    @if($contacts)
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{$contacts->address}}
                        </p>
                        <a href="tel:{{$contacts->phone1}}">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            {{$contacts->phone1}}
                        </a>
                        <a href="mailto:{{$contacts->email1}}">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            {{$contacts->email1}}
                        </a>
                    @else
                        <p>No contact information</p>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Footer top -->

    <!-- Copy Rights -->
    <div class="copy-rights-section">
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
            <p>
                    © 2018 Onena Construction Hub - All rights reserved &nbsp;
                    <a href="http://prajwal.yourkoseli.com/" class="yellowfy">Contact Developer</a>
            </p>
            </div>
            <div class="col-sm-6 col-xs-12">
            <ul class="follow-us clearfix">
                @if($contacts)
                    @if($contacts->facebook)<li><a href="{{$contacts->facebook}}" target="_blank"><img src="{{asset('images/fb.png')}}" alt="Facebook"></a></li>@endif
                    @if($contacts->twitter)<li><a href="{{$contacts->twitter}}" target="_blank"><img src="{{asset('images/tweeter.png')}}" alt="Tweeter"></a></li>@endif
                    @if($contacts->pintrest)<li><a href="{{$contacts->pintrest}}" target="_blank"><img src="{{asset('images/pintrest.png')}}" alt="Pintrest"></a></li>@endif
                    @if($contacts->googlePlus)<li><a href="{{$contacts->googlePlus}}" target="_blank"><img src="{{asset('images/g-plush.png')}}" alt="Google plus"></a></li>@endif
                    @if($contacts->linkedIn)<li><a href="{{$contacts->linkedIn}}" target="_blank"><img src="{{asset('images/instagram.png')}}" alt="Instagram"></a></li>@endif
                @endif
            </ul>
            </div>
        </div>
        </div>
    </div>
    <!-- End Copy Rights -->
    </footer>
    <!-- End Footer -->

    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootsrap JS -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Owl Carousal JS -->
    <script src="{{asset('assets/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <!-- Freewall JS -->
    <script type="text/javascript" src="{{asset('assets/freewal/freewall.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{asset('js/custom.js')}}"></script>

    <script>
        $(window).load(function(e) {
        var wall = new Freewall("#freewall");
            wall.reset({
                selector: '.item',
                animate: true,
                cellW: 340,
                cellH: 245,
                gutterX: 30, // width spacing between blocks;
                gutterY: 30, // height spacing between blocks;
                onResize: function() {
                    wall.refresh();
                }
            });

            $(".tabs li a").on("click", function(e){
                e.preventDefault();
                $(".tabs li").removeClass("active");
                $(this).parent('li').addClass('active');
                var filter = $(this).addClass('active').data('filter');
                if (filter) {
                    wall.filter(filter);
                } else {
                    wall.unFilter();
                }
            });

        setInterval(function(){ wall.fitWidth(); }, 300);
        });
    </script>

    {{-- my js --}}
    <script>
        function fixNavbar() {
            var y = window.scrollY;
            //header-small makes navbar background black
            if(y == 0){
                $('header').removeClass("header-small");
            }
            else{
                $('header').addClass("header-small");
            }
        }
        $(document).ready(function(){
            fixNavbar();
        });
    </script>



  @if( \Session::get('success') )

  <div class="modal fade" id="successModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Message sent successfully.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#successModel').modal('show');
        });
    </script>
@endif


</body>
</html>
