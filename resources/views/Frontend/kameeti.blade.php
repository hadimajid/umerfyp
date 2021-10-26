@extends('frontend.layout.app')

@section('title','Kameeti')

@section('content')


    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.webp')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Kameeti</h2>
                        <h4 class="text-white">Here you can view available kameetis</h4>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                            Kameeti Calculator
                        </button>
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
                <!-- Single Service -->
                    <div class="col-md-12 text-center">


                    </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


@endsection
