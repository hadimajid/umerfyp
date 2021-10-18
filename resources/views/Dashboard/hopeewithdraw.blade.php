@extends('dashboard.layout.app')

@section('title','Hopee Withdraw')

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
                        <h3 class="card-title">Hopee Withdrawal Request Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('userdash.hopeewithdrawalrequest')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group w-50">
                                <label for="contact">Contact Number</label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Your Number">
                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="amount">Withdrawal Amount</label>
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter Amount you want to withdraw" value="{{$amount}}">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="iban">Bank IBAN</label>
                                <input type="text" class="form-control" id="iban" name="iban" placeholder="Enter your bank iban here">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                    <!-- select -->
                                <label>Bank Account</label>
                                <select class="form-control" id="source" name="source">
                                    <option disabled>Bank Account</option>
                                    <option>Allied Bank Limited</option>
                                    <option>United Bank Limited</option>
                                    <option>Habib Bank Limited</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="callout callout-success">
                            <h5><b>Note</b>
                            </h5>
                            <p>Please give your feedback here about this scheme <a href="{{route('front.latest')}}"></a>. It will help us so much in improving our credability. This is not refundable amount. Please recheck the credentials before submitting the form. <b>If you have made any blunder contact me at 03475500987 as soon as possible.</b></p>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
