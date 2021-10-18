@extends('dashboard.layout.app')

@section('head')
    <style>
        .custom-text {
            font-weight: bold;
            font-size: 1.9em;
            border: 1px solid #cfcfcf;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 5px;
            color: #999;
            background: #fff;
        }
        .btn-grey{
            background-color:#D8D8D8;
            color:#FFF;
        }
        .review-block{
            background-color:#FAFAFA;
            border:1px solid #EFEFEF;
            padding:15px;
            border-radius:3px;
            margin-bottom:15px;
        }
        .review-block-name{
            font-size:12px;
            margin:10px 0;
        }
        .review-block-date{
            font-size:12px;
        }
        .review-block-rate{
            font-size:13px;
            margin-bottom:15px;
        }
        .review-block-title{
            font-size:15px;
            font-weight:700;
            margin-bottom:10px;
        }

    </style>
@endsection

@section('title','Ratings')


@section('content')






        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Ratings</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">



                <div class="row">
                    <div class="col-12">
                        <detail :user="{{auth()->user()->id}}"></detail>
                        <div class="row">
                            <div class="col-12">
                                <hr/>
                                <div class="review-block">
                                    @foreach($feeds as $feed)
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="review-block-name"><h5 class="text-capitalize ">{{$feed->user->name}}</h5></div>
                                                <div class="review-block-date">{{$feed->date}}<br/>{{$feed->created_at->diffForHumans()}}</div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="review-block-rate">
                                                    <star-rating :inline="true" active-color="#D68A7A" :read-only="true" :show-rating="false" :rating="{{$feed->rating}}" :increment="0.1" :star-size="20" active-color="#000000"></star-rating>
                                                </div>
                                                <div class="review-block-title">{{$feed->text}}</div>
                                            </div>
                                        </div>
                                        <hr/>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>            <!-- /.content -->
        </div>
        <footer class="main-footer">
            <strong>Dashboard template by AdminLTE.io Developed by Fawad Lang. All Rights Reserved</strong>
        </footer>

@endsection
