@extends('frontend.master')
@section('content')
    <!-- Carousel Start -->
    @include('frontend.home.components.carousel')
    <!-- Carousel End -->
    <!-- Modal Search Start -->
    @include('frontend.home.components.search')
    <!-- Modal Search End -->
    <!-- About Start -->
    @include('frontend.home.components.about')
    <!-- About End -->
    <!-- Counter Facts Start -->
    @include('frontend.home.components.counter')
    <!-- Counter Facts End -->
    <!-- Services Start -->
    @include('frontend.home.components.services')
    <!-- Services End -->
    <!-- Features Start -->
    @include('frontend.home.components.features')
    <!-- Features End -->
    <!-- Countries We Offer Start -->
    @include('frontend.home.components.countries')
    <!-- Countries We Offer End -->
    <!-- Testimonial Start -->
    @include('frontend.home.components.testimonial')
    <!-- Testimonial End -->
    <!-- Training Start -->
    @include('frontend.home.components.training')
    <!-- Training End -->
    <!-- Contact Start -->
    @include('frontend.home.components.contact')
    <!-- Contact End -->
@endsection
