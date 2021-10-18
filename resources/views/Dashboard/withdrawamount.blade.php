@extends('dashboard.layout.app')

@section('title','Credit Withdraw')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Credit Withdraw</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">


                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i>Please Fill in the form to make your withdrawal.</h5>
                </div>


                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Credit Withdrawal Request Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('userdash.creditwithdrawalrequest')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group w-50">
                                <label for="number">Contact Number</label>
                                <input type="text" class="form-control" id="number" name="number" placeholder="Enter Your Number">
                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="amount">Withdrawal Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount you want to withdraw">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                    <!-- select -->
                                <label>Source Of Withdrawal</label>
                                <select class="form-control" id="source" name="source">
                                    <option disabled>Source of withdraw</option>
                                    <option>EasyPaisa</option>
                                    <option>JazzCash</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="callout callout-danger">
                            <h5><b>Warning</b>
                            </h5>
                            <p>This is not refundable amount. Please recheck the credentials before submitting the form. <b>If you have made any blunder contact me at 03475500987 as soon as possible.</b></p>
                        </div>
                        <div class="card-footer d-inline">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a class="ml-4" href="{{route('userdash.hopeewithdraw')}}">If you are a hopee winner please click this link.</a>
                        </div>

                    </form>

                </div>

            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Dashboard template by AdminLTE.io Developed by Fawad Lang. All Rights Reserved</strong>
        </footer>

@endsection
