@extends('frontend.layout.app')

@section('title','About Us')

@section('content')


    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.webp')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Want to know more about us?</h2>
                        <!-- Breadcumb -->
                        <h4 class="text-white">We are here to serve you.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="row no-gutters">

                        <!-- Single Post Share Info -->
                        <div class="col-2 col-sm-1">
                            <div class="single-post-share-info">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->

                                <!-- Post Content -->
                                <div class="post-content">
                                    <p>Registered in Pakistan, This website is about investment and in return of that investment a hope. A hope to get you approximately 4000% of your investment which we call as hopee. We assure you that we will not let even a single penny of your be wasted. In this investment site even if you don't win a hopee you get 79% of your invested amount back. We use Jazzcash payment system to make payments. For more info kindly revert to Instruction section.</p>
                                    <h4>Creator of the scheme:</h4>
                                    <p>My name is Muhammad Fawad Ur Rehman. I study in Comsats University Lahore Campus. In case you have any query or any problem regarding this scheme you can contact me directly through the number given in the site. I personally assure you you will have a good experience by investing in our scheme. I wish you best of luck and look forward to work with you.</p>
{{--                                    <blockquote class="fancy-blockquote">--}}
{{--                                        <span class="quote playfair-font">“</span>--}}
{{--                                        <h5 class="mb-4">“If you’re going to try, go all the way. There is no other feeling like that. You will be alone with the gods, and the nights will flame with fire. You will ride life straight to perfect laughter. It’s the only good fight there is.”</h5>--}}
{{--                                        <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>--}}
{{--                                    </blockquote>--}}
                                </div>
                                <div class="post-thumb">
                                    <img src="{{asset('frontend/img/fawadabout.webp')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

@endsection
