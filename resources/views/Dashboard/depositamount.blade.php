@extends('dashboard.layout.app')

@section('title','Credit Deposit')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Credit deposit</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">

                <div class="callout callout-info">
                    <h6>Please Pay <b>{{$amount}}Pkr</b> into the following account as following procedure and fill in the tid you get after payment.</h6>

                </div>

                <div class="callout callout-warning h5">
                    <ol>
                        <li>Bank Name: <b>Allied Bank</b></li>
                        <li>Bank Account Number: <b>04310010068298810010</b></li>
                        <li>Reference Mobile Number: <b>03475500987</b></li>
                        <li>Fees: <b>0 PKR</b></li>
                    </ol>

                </div>


                <div class="callout callout-success">
                    <h5>Payment Sending instruction!
                    </h5>
                    <p>                        Step 1: Dial <b>*786#</b> Step 2: Select <b>Money Transfer</b> Step 3: Select <b>Bank Transfer</b> Step 4: Select <b>Allied Bank</b> Step 5: Enter <b>04310010068298810010</b> Step 6: Enter <b>03475500987</b> Step 7: Enter <b>{{$amount}}</b> Step 8: Enter Your <b>PIN</b>
                    </p>
                </div>
                <div class="callout callout-danger">
                    <h5><b>Warning</b>
                    </h5>
                    <p>Please must add this <b>03475500987</b> mobile number while sending payment as a receiver mobile number. This is auto-updating payment number. Without Add this number your payment can take 24-72 hours.</p>
                </div>

                <div class="callout callout-success">

                    <form action="{{route('userdash.creditdepositedsuccess',$amount)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="tid">Tid For Jazzcash or Trxid For EasyPaisa</label>
                            <input id="tid" type="string" placeholder="TID/TRXID" class="w-50 form-control @error('tid') is-invalid @enderror" name="tid" value="{{ old('tid') }}" required autocomplete="tid" autofocus>

                            @error('number')
                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                            @enderror
                            <label>Source Of Deposit</label>
                            <select class="form-control w-50" id="source" name="source">
                                <option disabled>Source of withdraw</option>
                                <option>EasyPaisa</option>
                                <option>JazzCash</option>
                            </select>
                            <button type="submit" class="btn btn-primary mt-3">Verify</button>
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
