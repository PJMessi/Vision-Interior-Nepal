@extends('layouts.layout')
@section('content')
<!-- Start Banner -->
<div class="banner-outer inner-banner"> <span class="banner-shadow"></span>
    <div class="banner-image blog-banner-image">
      <div class="container">
        <div class="content animated fadeIn">
          <h1 class="animated fadeIn">Blog</h1>
          <p class="animated fadeIn">Keep a habit of reading</p>
        </div>
      </div>
    </div>
</div>
  <!-- End Banner -->

  <!-- Start Breadcrumbs -->
  <div class="breadcrumbs_outer">
    <div class="container">
      <ul class="breadcrumbs">
        <li><a href="{{route('index')}}">Home</a> > </li>
        <li>Blog</li>
      </ul>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Start Blogs sec -->
<div class="service-outer blog-outer blox-box">
    <div class="container">
        <div class="service-list">

            <div class="row">
                @if( count($posts) > 0 )
                    @foreach ($posts as $post)

                        <div class="col-sm-4 col-xs-12">
                            <div class="service-box">
                                <figure><img src="{{asset('storage').'/'.$post->image}}" alt=""></figure>
                                <div class="service-detail">
                                    <h4>{{$post->title}}</h4>
                                    <span class="badge badge-secondary">{{$post->created_at->diffForHumans()}}</span>
                                    <span class="badge badge-secondary">{{$post->category->name}}</span>

                                    <?php
                                        $string = $post->body;
                                        $string = strip_tags($string);


                                        if (strlen($string) > 150) {

                                            // truncate string
                                            $stringCut = substr($string, 0, 150);
                                            $endPoint = strrpos($stringCut, ' ');

                                            //if the string doesn't contain any space then it will cut without word basis.
                                            $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
                                            $string = $string."...";
                                        }


                                    ?>
                                    <p>{!!$string!!}</p>

                                    <a href="{{route('blog',['blogId'=>$post->id])}}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                @else
                    <div class="col-md-4 offset-md-4" style="text-align:center;">
                        <p>No posts yet</p><br>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
  <!-- End Blogs sec -->

@endsection
