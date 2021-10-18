@extends('frontend.layout.app')

@section('title','Register')

@section('content')




    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.webp')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Register</h2>
                        <h4 class="text-white">Write down details to register your account.</h4>
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
                <div class="col-12 offset-3">
                    <!-- Contact Form -->
                    <div class="contact-form-area">
                        <div class="section-heading">
                            <h2>Register</h2>
                            <h4><small>Please Put Correct Email And Contact Number as you will be notified on these contacts.</small></h4>
                        </div>
                        <div class="contact-form">
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input id="name" placeholder="Name" type="text" class="w-50 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input id="username" type="text" placeholder="Username" class="w-50 form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input id="number" type="text" placeholder="Contact Number" class="w-50 form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>

                                                @error('number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input id="email" placeholder="Email" type="email" class="w-50 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input id="password" type="password" placeholder="Password" class="w-50 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="w-50 form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <button type="submit" class="btn fancy-btn fancy-dark bg-transparent">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
