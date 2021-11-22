@extends('Frontend.layout.app')

@section('title','Latest Hopees')

@section('content')


    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.webp')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Latest Hopees</h2>
                        <h4 class="text-white">Here see latest hopees and their transaction receipts</h4>
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
                @if($sets != null)
                    @foreach($sets as $set)
                        @foreach($set->hopees()->get() as $hopee)
                            <div class="col-md-4">
                                <div class="single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="tile">
                                        <div class="wrapper">
                                            <div class="header"></div>

                                            <div class="banner-img">
                                                <img src="{{asset('frontend/img/featureset.webp')}}" alt="Image 1">
                                            </div>

                                            <div class="dates">
                                                <div class="start">
                                                    <strong>User Name</strong>{{$hopee->user()->get()->first()->name}}
                                                    <span></span>
                                                </div>
                                                <div class="ends">
                                                    <strong>Hopee Amount</strong>
                                                        @if($hopee->number == '1st')
                                                            {{$set->firsthopee}}
                                                        @endif
                                                        @if($hopee->number == '2nd')
                                                            {{$set->secondhopee}}
                                                        @endif
                                                        @if($hopee->number == '3rd')
                                                            {{$set->thirdhopee}}
                                                        @endif
                                                </div>
                                                <div class="col-6 offset-3 mt-3">
                                                    <strong>Invested Amount</strong> {{$set->totalamountperperson}}
                                                </div>
                                            </div>

                                            <div class="stats">
                                                <div>
                                                    <strong>Total Days</strong> {{$set->totalday}}
                                                </div>

                                                <div>
                                                    <strong>Per Day Amount</strong> {{$set->perday}}
                                                </div>

                                                <div>
                                                    <strong>Total Refund</strong> 79%({{$set->returnperperson}})
                                                </div>
                                            </div>
                                            <div class="footerss">
                                                @if($hopee->feedback)
                                                    <div class="ml-1">{{$hopee->feedback}}<strong>-{{$hopee->user()->get()->first()->name}}</strong></div>
                                                @else
                                                    @if($hopee->user()->get()->first()->id == \Illuminate\Support\Facades\Auth::id())
                                                        <form action="{{route('frontset.feedupdate',$hopee)}}" method="post">
                                                            @csrf
                                                            <textarea name="feedback" id="feedback" cols="40" rows="10"></textarea>
                                                            <button type="submit" class="btn btn-primary">Submit Feedback</button>
                                                        </form>
                                                    @endif
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


@endsection
