@extends('dashboard.layout.app')

@section('title','Per Day Payment')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Per Day Payment</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">



                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Per Day Payment</h3>
                            </div>
                            <!-- /.card-header -->
                            <form role="form" action="{{route('userdash.payment',$set->id)}}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="payment">Per Day Payment</label>
                                        <input type="number" class="form-control" id="payment" name="payment" placeholder="Payment">
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Dashboard template by AdminLTE.io Developed by Fawad Lang. All Rights Reserved</strong>
        </footer>

@endsection

@section('footer')
    @if($errors->any())
        <script>alert('{{$errors->first()}}')</script>
    @endif
@endsection