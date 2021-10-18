@extends('frontend.layout.app')

@section('title','Verification of Email')

@section('content')




    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.webp')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Email Verification</h2>
                        <h4 class="text-white">Please Verify Your Email Addresse</h4>
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
                <div class="col-12">
                    <!-- Contact Form -->
                    <div>
                        <div class="text-center">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                            <h5 class="">
                                {{ __('Before proceeding, please check your email for a verification link.') }}
                            </h5>
                            <div class="d-inline">
                                {{ __('If you did not receive the email') }}
                                <form class="d-inline w-50" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
