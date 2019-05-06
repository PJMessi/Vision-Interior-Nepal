@extends('layouts.layout')

@section('content')
@include('includes.functions')

<!-- Start Banner -->
    @include('pages.pageParts.banner')
<!-- End Banner -->

<!-- Start service sec -->
    @include('pages.pageParts.service')
<!-- End service sec -->

<!-- Start offer sec -->
    @include('pages.pageParts.offer')
<!-- End Offer sec -->

<!-- Start feature sec -->
    @include('pages.pageParts.project')
<!-- End feature sec -->

<!-- whyUs offer sec -->
    @include('pages.pageParts.marketing')
<!-- End WhyUs sec -->

<!-- Start Team -->
    @include('pages.pageParts.team')
<!-- End Team sec -->

<!-- Start Testimonial -->
    @include('pages.pageParts.testmonial')
<!-- End Testimonial sec -->

<!-- Start Virtually  Build -->
    @include('pages.pageParts.quote')
<!-- End Virtually  Build -->

<!-- Start Blogs sec -->
    @include('pages.pageParts.post')
<!-- End Blogs sec -->

@endsection
