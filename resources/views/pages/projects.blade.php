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
        <li>Project</li>
      </ul>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Start feature sec -->
  <div class="project-outer">
    <div class="container">
        @if( count($projects) > 0 )
            @if( count($projectCategories) > 0 )
                <ul class="tabs">
                    <li class="active"><a href="#">All Groups</a></li>
                    @foreach ($projectCategories as $projectCategory)
                        <li><a href="#"  data-filter=".{{$projectCategory['category']}}">{{$projectCategory['category']}}</a></li>
                    @endforeach
                </ul>
            @endif
            <div class="feature-list" id="freewall">
                <div class="row tab_container">
                    @foreach ($projects as $project)
                        <div class="item {{$project->category}}">
                            <div class="feature-box">
                                <figure><img src="{{asset('storage').'/'.extractImgPath($project->images,0)}}" alt=""></figure>
                                <div class="thumb-overlay">
                                    <div class="thumb-overlay-inner">
                                        <a href="{{route('project', ['projectId'=>$project->id])}}">
                                            <h5>{{$project->title}}</h5>
                                            <p>{{cutParagraph($project->description, 80)}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="col-md-4 offset-md-4" style="text-align:center;">
                <p>No projects yet.</p><br>
            </div>
        @endif
    </div>

  </div>
  <!-- End feature sec -->

@endsection
