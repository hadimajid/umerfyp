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

                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    Please select an amount to Deposit
                </div>

                <div class="callout callout-info">


                    <form action="{{route('userdash.creditdepamount')}}" method="post">
                        @csrf
                        <input type="number" id="amount" name="amount" placeholder="Amount">
                        <button type="submit" class="btn btn-primary">Pay Now</button>
                    </form>

                </div>

            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Dashboard template by AdminLTE.io Developed by Fawad Lang. All Rights Reserved</strong>
        </footer>

@endsection
