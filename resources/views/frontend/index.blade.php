@extends('frontend.layout.app')

@section('title','Hopee-We Give Hopee')
@section('description','Select a set, Read the instructions, Make Investment, Be hopeful to win hopee of at least 4000%. Think we are scam check our latest hopees and feedbacks.')

@section('content')



    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url({{asset('frontend/img/bg-img/hero-1.webp')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <!-- Video Overview -->
{{--                        <div class="video-overview">--}}
{{--                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video--play--btn"><i class="fa fa-play" aria-hidden="true"></i> Watch The Overview</a>--}}
{{--                        </div>--}}
                            <div class="video-overview">
                                <a href="{{route('front.index')}}" ><i class="fa fa-heart-o" aria-hidden="true"></i>  We Give Hopee</a>
                            </div>
                        <h2>Select a set, Read the instructions, Make Investment, Be hopeful to win hopee of 4000%</h2>
                        <h2><small>Your Remaining Credit: @auth{{Auth::user()->credit?decrypt(Auth::user()->credit->amount):0 }} Pkr <a href="{{route('userdash.creditdepamount')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>@else {{0}}Pkr <a href="{{route('userdash.creditdepamount')}}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> @endauth</small></h2>
                        <h2><small>Think we are scam? Check our:</small></h2>
                        @if(auth()->guard('web')->check())
                        <a href="{{route('user.kameeti')}}" class="btn fancy-btn fancy-active">Kameeti</a>
                        <a href="{{route('front.latest')}}" class="btn fancy-btn fancy-active">Loan Management</a>
                        <a href="{{route('user.budget')}}" class="btn fancy-btn fancy-active">Budget Calculator</a>
                        @endif
                        <a href="{{route('front.latest')}}" class="btn fancy-btn fancy-active">Latest Hopees</a>
                        <a href="{{route('front.feedbacks')}}" class="btn fancy-btn">Our Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> What is a hopee?</h5>
                                    <p>Hopee is a prize money or reward money that can be granted back to you at the end of each set.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> We give Hopee!</h5>
                                    <p>Our motto is <b>We Give Hopee</b>. You trust on us, You invest on us, We give you hope to fulfil your dreams.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Can I lose all my investment?</h5>
                                    <p><b>Absolutely NO!</b> In case you don't win a hopee, you don't have to be worried. We give you <b>79%</b> of your investment back. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="about-us-text">
                        <h2>Instructions! (Please Read Carefully)</h2>
                        <h4>Before you invest in our Sets, We highly recommend you to read our instructions below:</h4>
                        <h5 class="text-primary"><b>(NOTE)  </b>   You should deposit funds to increase your credits so that you can make security payment and perday payment</h5>
                        <ul>
                            <li class=" h5">1- Read the info of the given Sets and select the sets you want to register in.</li>
                            <li class=" h5">2- After a set has been selected register into that set by paying the security specified.</li>
                            <li class=" h5">3- After you have been registered into a set you have to pay daily the perday amount via your dashboard</li>
                            <li class=" h5">4- Set will be ended when total days has been completed.</li>
                            <li class=" h5">5- When the set will end out of the total users 3 users will be randomly selected by <b>Google implemented random number generator</b></li>
                            <li class=" h5">6- Those 3 number will be given 1st,2nd and 3rd hopee respectively (specified in each Set)</li>
                            <li class=" h5">7- The users that won't be selected for the hopee will be refunded by 79% of there total invested amount</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-0 col-md-4">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('frontend/img/bg-img/about-1.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Skills Area Start ***** -->
    <section class="fancy-skills-area section-padding-200">
        <!-- Side Thumb -->
        <div class="skills-side-thumb">
            <img src="{{asset('frontend/img/laptop.webp')}}" alt="">
        </div>
        <!-- Skills Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 ml-auto">
                    <div class="section-heading">
                        <h2>Frequently Asked Questions!</h2>
                        <p>All the points that should be noted are listed below:</p>
                    </div>
                    <div class="skills-content">
                        <!-- Single Progress Bar -->
                        <ol>
                            <li class="pb-1">1- If for some reasons you would'nt be able to pay perday amount, it will be deducted out of your security</li>
                            <li class="pb-1">2- If you will leave paying perday amount and your security of that has ended you will be unregistered from that set</li>
                            <li class="pb-1">3- You can register into more than one set.</li>
                            <li class="pb-1">4- You should be a jazzcash user to be able to pay amount.</li>
                            <li class="pb-1">5- <b>(IMPORTANT)</b>   You can pay as much security you want in start. If you will deposit complete total amount you won't have to worry for perday. Once total days are completed you will be informed about your hopee status.</li>
{{--                            <li class="pb-1"></li>--}}
                        </ol>
                    </div>
{{--                    <a href="#" class="btn fancy-btn fancy-dark"></a>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills Area End ***** -->

    <!-- ***** Service Area Start ***** -->
    <section id="set" class="fancy-services-area bg-img bg-overlay section-padding-100-70" style="background-image: url({{asset('frontend/img/bg-img/hero-2.webp')}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-white text-center">
                        <h2>Latest Sets</h2>
                        <p>Latest Sets Opened For Registration</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                @if($sets != null)
                    @foreach($sets as $set)
                        <div class="col-12 col-md-4">
                            <div class="single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                                <div class="tile">
                                    <div class="wrapper">
                                        <div class="header"></div>

                                        <div class="banner-img">
                                            <img src="{{asset('frontend/img/featureset.webp')}}" alt="Image 1">
                                        </div>

                                        <div class="dates">
                                            <div class="start">
                                                <strong>Current Users</strong> {{$set->currentusers}}/{{$set->totalusers}}
                                                <span></span>
                                            </div>
                                            <div class="ends">
                                                <strong>Per Day</strong> {{$set->perday}}
                                            </div>
                                            <div class="col-6 offset-3 mt-3">
                                                <strong>Total Days</strong> {{$set->totalday}}
                                            </div>
                                        </div>

                                        <div class="stats">

                                            <div>
                                                <strong>1st Hopee</strong> {{$set->firsthopee}}
                                            </div>

                                            <div>
                                                <strong>2nd Hopee</strong> {{$set->secondhopee}}
                                            </div>

                                            <div>
                                                <strong>3rd Hopee</strong> {{$set->thirdhopee}}
                                            </div>

                                        </div>

                                        <div class="stats">

                                            <div>
                                                <strong>Current Users</strong> {{$set->currentusers}}
                                            </div>

                                            <div>
                                                <strong>Total Users</strong> {{$set->totalusers}}
                                            </div>

                                            <div>
                                                <strong>Security To Deposit</strong> {{(int)round($set->totalamountperperson / 100 * 20 + 50,-2)}}
                                            </div>

                                        </div>

                                        <div class="stats">

                                            <div>
                                                <strong>Total Days</strong> {{$set->totalday}}
                                            </div>

                                            <div>
                                                <strong>Total For Each User</strong> {{$set->totalamountperperson}}
                                            </div>

                                            <div>
                                                <strong>Total Refund</strong> 79%({{$set->returnperperson}})
                                            </div>

                                        </div>

                                        <div class="footer">
                                            <form role="form" action="{{route('frontset.security',$set->id)}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="security" class="float-left ml-1">Security To Deposit <b>(in multiple of {{$set->perday}})</b></label>
                                                    <input type="number" class="form-control" id="security" name="security" placeholder="Security" value="{{(int)round($set->totalamountperperson / 100 * 20 + 50,-2)}}">
                                                </div>

                                                <button type="submit" class="btn btn-primary" onclick="return confirm('Have you read the instructions?');">Register</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="fancy-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="{{asset('frontend/img/fawadquote.webp')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that with zero help i started this project. Trying hard again and again, after failing for many times, investing all I could now finally I have finally completed my dream. Concluding I will say you can acheive your dream you just have to be sincere with it.</h5>
                                <h6>M.Fawad Ur Rehman <span>CEO WeGiveHopee</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="{{asset('frontend/img/fawadquote.webp')}}" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>Take up one idea. Make that one idea your life - think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success.</h5>
                                <h6>M.Fawad Ur Rehman <span>CEO WeGiveHopee</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url({{asset('frontend/img/bg-img/hero-3.webp')}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2>Still not convinced? Do you want to contact us?</h2>
                        <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                        <a href="{{route('front.contact')}}" class="btn fancy-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="fancy-blog-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Latest News</h2>
                        <p>We are a creative investment company. Invest in our site and you will not be regretted.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('frontend/img/blog-img/blog-1.webp')}}" alt="">
                        <div class="blog-content">
                            <h5>Now you can contact us easily....</h5>
                            <p>Your ease to contact us has been enhanced. Now you can contact us easily to remove your queries just leave an email with your query</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img src="{{asset('frontend/img/blog-img/blog-2.webp')}}" alt="">
                        <div class="blog-content">
                            <h5>User Dashboard has been updated.</h5>
                            <p>The User dashboard has been updated to enhance your experience. New features has been added into it.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <img src="{{asset('frontend/img/blog-img/blog-3.webp')}}" alt="">
                        <div class="blog-content">
                            <h5>Our Own Hopee Payment System Implemented!</h5>
                            <p>Hopee Payment system has been implemented successfully. Now you can make payments through your Jazzcash or Easypaisa account and receive too.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->
@endsection
<script>
    var currentHtmlContent;
    var element = new Image();
    var elementWithHiddenContent = document.querySelector("#set");
    var innerHtml = elementWithHiddenContent.innerHTML;
    element.__defineGetter__("id", function() {
        currentHtmlContent= "";
    });
    setInterval(function() {
        currentHtmlContent= innerHtml;
        console.log(element);
        console.clear();
        elementWithHiddenContent.innerHTML = currentHtmlContent;
    }, 1000);
</script>
