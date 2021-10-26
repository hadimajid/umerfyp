<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="z7USgi76WF3qDJskXQnvcBUQoRh1tn5p5W55t9t05HA" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>
    <style>
        /*	Reset & General ---------------------------------------------------------------------- */
        * { margin: 0px; padding: 0px; }
        body {
            background: #ecf1f5;
            font:14px "Open Sans", sans-serif;
            text-align:center;
        }

        .tile{
            width: 100%;
            background:#fff;
            border-radius:5px;
            box-shadow:0px 2px 3px -1px rgba(151, 171, 187, 0.7);
            float:left;
            transform-style: preserve-3d;
            margin: 10px 5px;

        }

        .header{
            border-bottom:1px solid #ebeff2;
            padding:19px 0;
            text-align:center;
            color:#59687f;
            font-size:19px;
            position:relative;
        }

        .banner-img {
            padding: 5px 5px 0;
        }

        .banner-img img {
            width: 100%;
            border-radius: 5px;
        }
        .dates{
            border:1px solid #ebeff2;
            border-radius:5px;
            padding:20px 0px;
            margin:10px 20px;
            font-size:16px;
            color:#5aadef;
            font-weight:600;
            overflow:auto;
        }
        .dates div{
            float:left;
            width:50%;
            text-align:center;
            position:relative;
        }
        .dates strong,
        .stats strong{
            display:block;
            color:#adb8c2;
            font-size:11px;
            font-weight:700;
        }
        .dates span{
            width:1px;
            height:40px;
            position:absolute;
            right:0;
            top:0;
            background:#ebeff2;
        }
        .stats{
            border-top:1px solid #ebeff2;
            background:#f7f8fa;
            overflow:auto;
            padding:15px 0;
            font-size:16px;
            color:#59687f;
            font-weight:600;
            border-radius: 0 0 5px 5px;
        }
        .stats div{
            border-right:1px solid #ebeff2;
            width: 33.33333%;
            float:left;
            text-align:center
        }

        .stats div:nth-of-type(3){border:none;}

        div.footer {
            text-align: right;
            position: relative;
            margin: 20px 5px;
        }
        div.footerss {
            text-align: left;
            position: relative;
            margin: 20px 5px;
        }
        .footerss strong{
            display:block;
            color:#adb8c2;
            font-size:11px;
            font-weight:700;
        }

        .footerss div{
            font-size:16px;
            color:#59687f;
            font-weight:600;
            overflow:auto;        }
        div.footer a.Cbtn{
            padding: 10px 25px;
            background-color: #DADADA;
            color: #666;
            margin: 10px 2px;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            border-radius: 3px;
        }

        div.footer a.Cbtn-primary{
            background-color: #5AADF2;
            color: #FFF;
        }

        div.footer a.Cbtn-primary:hover{
            background-color: #7dbef5;
        }

        div.footer a.Cbtn-danger{
            background-color: #fc5a5a;
            color: #FFF;
        }

        div.footer a.Cbtn-danger:hover{
            background-color: #fd7676;
        }
        label.error{
            margin-top: 1rem;
            margin-bottom: 1rem;
            background: #ec5252;
            color: white;
            width: 100%;
        }
    </style>
    @yield('head')

    @include('frontend.layout.head')

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed" oncontextmenu="return false">


<div id="app">


<!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="{{route('front.index')}}">Hopee</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('front.index')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                        <a class="dropdown-item" href="index.html">Home</a>--}}
{{--                                        <a class="dropdown-item" href="static-page.html">Static Page</a>--}}
{{--                                        <a class="dropdown-item" href="contact.html">Contact</a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.about')}}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.latest')}}">Latest Hopees</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.feedbacks')}}">Feedbacks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.contact')}}">Contact</a>
                                </li>
                            </ul>
                            <!-- Search & Shop Btn Area -->
                            <div class="fancy-search-and-shop-area">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('userdash.active') }}">
                                                    My Dashboard
                                                </a>
                                                <a class="dropdown-item" href="{{ route('userdash.creditdep') }}">
                                                    {{--Credit: {{ decrypt(Auth::user()->credit->amount) }}--}}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


@yield('content')





    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-4 offset-1">
                        <div class="single-footer-widget">
                            <h6>Our Newsletter</h6>
                            <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                            <form action="#" method="get">
                                <input type="search" name="search" id="footer-search" placeholder="E-mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <div class="footer-social-widegt d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                {{--                    <div class="col-12 col-sm-6 col-lg-3">--}}
                {{--                        <div class="single-footer-widget">--}}
                {{--                            <h6>Twitter Feed</h6>--}}
                {{--                            <div class="single-tweet">--}}
                {{--                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> With the popularity of podcast shows growing with each year, you might consider starting it yourself as well. <br>https://buff.ly/2zttoJb </a>--}}
                {{--                                <span>About 20 hours ago</span>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                <!-- Footer Widget -->
                {{--                    <div class="col-12 col-sm-6 col-lg-3">--}}
                {{--                        <div class="single-footer-widget">--}}
                {{--                            <h6>Link Categories</h6>--}}
                {{--                            <nav>--}}
                {{--                                <ul>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Agency</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Studio</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Studio</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Services</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blogs</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Work</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shop</a></li>--}}
                {{--                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy</a></li>--}}
                {{--                                </ul>--}}
                {{--                            </nav>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                <!-- Footer Widget -->
                    <div class="col-4 offset-1">
                        <div class="single-footer-widget">
                            <h6>Contact Us</h6>
                            <p>+92347-5500987 <br>Fawadlang@gmail.com
                            </p>
                            <p>Muhammad Fawad Ur Rehman
                            </p>
                            {{--                            <p>40 Baria Sreet 133/2 <br>NewYork City, US</p>--}}
                            {{--                            <p>Open hours: 8.00-18.00 Mon-Fri</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;2020 All rights reserved By Fawad Lang| Edited by Fawad Lang Template by ColorLib
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Kameeti Calculator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" id="kameeti-calculator">

                <div class="col-md-12">
                        <div class="form-group">
                            <label for="">
                                Name Of Item
                            </label>
                            <input type="text" id="cal_name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">
                                Price Of Item
                            </label>
                            <input type="number" id="cal_price" name="price" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">
                                Duration (In Months)
                            </label>
                            <input type="number" id="cal_duration" name="duration" required>
                        </div>
                    </div>
            </form>

        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="cal">Calculate</button>
                </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="row">
               <div class="col-md-12 text-center">
                   <p id="new_name"></p>
                   <p id="new_required_time"></p>
               </div>
           </div>
        </div>
    </div>
</div>
@include('frontend.layout.footer')
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
@if($errors->any())
    <script>alert('{{$errors->first()}}')</script>
@endif
@yield('footer')
<script>
    let cal_name='';
    let cal_price=0;
    let cal_duration=0;

    $('#kameeti-calculator').validate({
        rules:{
          name: 'required',
          price: 'required',
          duration: 'required',
        },
    })
    $('#cal').on('click',function (e) {
        e.preventDefault();
        if($('#kameeti-calculator').valid()){

        cal_name=$('#cal_name').val();
        cal_price=$('#cal_price').val();
        cal_duration=$('#cal_duration').val();
        let requiredAmount=cal_price/cal_duration;

        $('#new_name').text('For Item '+cal_name);
        $('#new_required_time').text('You have to save RS '+requiredAmount +' for '+cal_duration+" Months");
            $('#kameeti-calculator').trigger("reset");
        $('#exampleModalLong').modal('hide')

        $('.bd-example-modal-lg').modal('show')
        }

    })
</script>
@yield('scripts')
</body>
</html>
