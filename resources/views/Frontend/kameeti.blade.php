@extends('Frontend.layout.app')

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
        <div class="container" id="kameetis">

        </div>
        <div>
            <ul id="kameeti-list" class="pagination">

            </ul>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


@endsection
@section('scripts')
    <script>
        $('#kameeti-list').pagination({
            current: 1, // Current page number
            length: 12, // Data volume per page
            size: 5, // Display the number of buttons
            ajax: function(options, refresh, $target){
                $.ajax({
                    url: '{{route('user.kameetiList')}}',
                    type: "get",
                    data:{
                        page: options.current,
                        length: options.length,
                    },
                    dataType: 'json'
                }).done(function(response){
                    $('#kameetis').html(response.view);
                    refresh({
                        total: response.total,
                        length: response.length
                    });

                }).fail(function(error){
                    $('#kameetis').html('<li class="col-md-12 text-center"><strong style="font-size: 20px;">Some Error Has Occurred.</strong></li>')

                });
            }
        });
    </script>
@endsection
