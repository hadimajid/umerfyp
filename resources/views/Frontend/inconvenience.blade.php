@extends('Frontend.layout.app')

@section('title','Sorry For inconvenience')

@section('content')


    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Sorry For the inconvenience</h2>
                        <h4 class="text-white"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="fancy-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <p class="display-1">We are currently working on this page</p>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


@endsection
