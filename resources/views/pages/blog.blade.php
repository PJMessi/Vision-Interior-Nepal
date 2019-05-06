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
        <li><a href="{{route('blogs')}}">Blogs</a> > </li>
        <li>Blog Detail</li>
      </ul>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Start Blog Detail -->
  <div class="container blog-wrapper">
    <div class="row">
      <!-- Start Left Column -->
      <div class="col-sm-8 col-md-9 blog-left">
        <article class="blog-listing detail">
            <h3>{{$post->title}}</h3>

            <ul class="post-detail">
              <li><span class="fa fa-user"></span> {{$post->author->name}}</li>
              <li><span class="fa fa-calendar"></span> {{$post->created_at->diffForHumans()}}</li>
              <li><span class="badge badge-dark"> #{{$post->category->name}}</span></li>
            </ul>

            <figure class="p-t-25 clearfix"><img src="{{asset('storage').'/'.$post->image}}" alt=""></figure>

            @if( $post->excerpt )
            <div class="imp-quote">
                <p>{{$post->excerpt}}</p>
            </div>
            @endif

            {!! $post->body !!}
        </article>
      </div>
      <!-- End Left Column -->

      <!-- Start Right Column -->
      <div class="col-sm-4 col-md-3 blog-right">

        <div class="recent-post">
          <h3>Recent Blog</h3>
          <ul>
            @if( count($recentPosts) > 0 )
            @foreach ($recentPosts as $recentPost)
                <li class="clearfix">
                    <a href="{{route('blog', ['blogId'=>$recentPost->id])}}">
                        <div class="img-block">
                            <img src="{{asset('storage').'/'.$recentPost->image}}" class="img-responsive" alt="">
                        </div>
                        <div class="detail">
                            <h4>{{$recentPost->title}}</h4>
                            <p>{{$recentPost->created_at->diffForHumans()}}</p>
                        </div>
                    </a>
                </li>
            @endforeach

            @else
            <li class="clearfix"><p>No recent posts</p></li>
            @endif
          </ul>

        </div>


      </div>
      <!-- End Right Column -->
    </div>
  </div>
  <!-- End Blog Detail -->
@endsection
