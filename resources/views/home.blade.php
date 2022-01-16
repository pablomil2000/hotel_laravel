@extends('layout')

<!-- Header Section Begin -->
@section('navBar')
    @include('components.header')
@stop
<!-- Header End -->

@section('slider')
    <!-- Hero Section Begin -->
    @include('components.slider')
    <!-- Hero Section End -->
@stop

@section('aboutUs')
    <!-- About Us Section Begin -->
    @include('components.aboutUs');
    <!-- About Us Section End -->
@stop

@section('services')
    <!-- Services Section End -->
    @include('components.services')
    <!-- Services Section End -->
@stop

@section('habitaciones')
    <!-- Home Room Section Begin -->
    @include('components.rooms')
    <!-- Home Room Section End -->
@stop

@section('testimonial')
    <!-- Testimonial Section Begin -->
    @include('components.testimonial')
    <!-- Testimonial Section End -->
@stop

@section('blog')

    <!-- Blog Section Begin -->
    @include('components.blog')
    <!-- Blog Section End -->

@stop

@section('footer')
    <!-- Footer Section Begin -->
    @include('components.footer')
    <!-- Footer Section End -->
@stop
