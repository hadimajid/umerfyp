@extends('Frontend.layout.app')

@section('title','Security Payment')

@section('content')
<?php

        $parameter = [
            'set' => $set->id,
            'security'=> $security
        ];
        $parameter = \Illuminate\Support\Facades\Crypt::encrypt($parameter);

?>

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Payment Screen</h2>
                        <h4 class="text-white">Pay here</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->
    <!-- Start Coding =Redirect User with POST DATA to cashmaal= -->


    <form action="https://www.cashmaal.com/Pay/" method="POST">

        <!-- pay_method (cm,pm,jca,epa,btc) if blank user will select on CM -->

        <input type="hidden" name="pay_method" value="">

        <!-- amount (Enter Amount HERE) -->

        <input type="hidden" name="amount" value="1">

        <!-- currency (PKR,USD) -->

        <input type="hidden" name="currency" value="PKR">

        <!-- succes_url (User will redirect if payment complete) -->

        <input type="hidden" name="succes_url" value="{{route('frontset.security',$parameter)}}">

        <!-- cancel_url (User will redirect if payment Not Complete) -->

        <input type="hidden" name="cancel_url" value="{{route('front.index')}}">

        <!-- client_email (After Complete payment CM sent Confirmation EMail to Client) -->

        <input type="hidden" name="client_email" value="{{auth()->user()->email}}">

        <!-- web_id (Your web id you can find this on CM panel) -->

        <input type="hidden" name="web_id" value="2990">

        <!-- Unique Order Id (You will get this order id after payment success (Optional) (Max 80 Character Allowed)) -->

        <input type="hidden" name="order_id" value="">

        <!-- Additional info (additional information (you will get this value after success payment) (Optional) (Max 80 Character Allowed)) -->

        <input type="hidden" name="addi_info" value="eg. John Domain renewal payment">
        <div class="row">
            <div class="col-2 offset-5 my-5">
                <button type="submit" class="offset- btn fancy-btn fancy-active " name="Submit" value="">Pay Security here
                </button>
            </div>
        </div>

    </form>


    {{--<!-- END Coding =Redirect User with POST DATA to cashmaal= -->--}}
    {{--<!-- ***** Contact Area Start ***** -->--}}
    {{--<div class="fancy-contact-area section-padding-100">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                    {{--<form role="form" action="{{route('frontset.security',[$set,$security])}}" method="post">--}}
                        {{--@csrf--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="security">Total Users</label>--}}
                                {{--<input type="number" class="form-control" id="security" name="security" placeholder="Security">--}}
                            {{--</div>--}}
                            {{--<!-- /.card-body -->--}}

                            {{--<div class="card-footer">--}}
                                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- ***** Contact Area End ***** -->--}}


@endsection
