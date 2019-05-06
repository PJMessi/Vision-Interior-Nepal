@extends('layouts.layout')

@section('content')

@include('includes.functions')

<!-- Start Banner -->
<div class="banner-outer inner-banner"> <span class="banner-shadow"></span>
    <div class="banner-image project-banner-image">
      <div class="container">
        <div class="content animated fadeIn">
          <h1 class="animated fadeIn">Projects</h1>
          <p class="animated fadeIn">Here are some of our Projects. Take a peek. You might just be impressed ;)</p>
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
        <li><a href="{{route('projects')}}">Projects</a> > </li>
        <li>Projects Detail</li>
      </ul>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Start Paragraph sec -->
  <div class="project-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-xs-12">
          @if($project->images)<figure><img src="{{asset('storage').'/'.extractImgPath($project->images,0)}}" alt=""></figure>@endif
        </div>
        <div class="col-sm-4 col-xs-12">
          <div class="project-info">
            <h3>Project Information</h3>
            <ul class="project-info-list">
              <li>Client: &nbsp; @if($project->client){{$project->client}}@endif</li>
              <li>Location: &nbsp; @if($project->location){{$project->location}}@endif</li>
              <li>Completion Date: &nbsp; @if($project->completionDate){{$project->completionDate}}@endif</li>
              <li>Price: &nbsp; NRs @if($project->price){{$project->price}}@endif</li>
              <li>Category: &nbsp; @if($project->category){{$project->category}}@endif</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Paragraph sec -->

  <!-- Start Paragraph sec -->
  <div class="project-midle mid-detail">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <h3>@if($project->title){{$project->title}}@endif</h3>
          <p>@if($project->description){{$project->description}}@endif</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Paragraph sec -->

  <!-- Start similar-project sec -->
  @if($project->images)
<div class="similar-project gray-bg">
    <div class="container">
        <h4>Project Images</h4>
        <div class="feature-list">
            <div class="row">
                @for($i = stringArraySize($project->images) - 1; $i>=1; $i--)
                <div class="col-sm-4 col-xs-12">
                    <div class="feature-box">
                        <figure>
                            <a href="{{asset('storage').'/'.extractImgPath($project->images,$i)}}">
                                <img src="{{asset('storage').'/'.extractImgPath($project->images,$i)}}" alt="">
                            </a>
                        </figure>

                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endif
  <!-- End similar-project sec -->

@endsection
