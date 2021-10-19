@extends('admin.dashboard.layout.app')

@section('title','Admin Dashboard')

@section('content')
    <script>                                                {{$serial = 1}}
    </script>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Kameeti</h1>
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
                            <h3 class="card-title">Update Kameeti Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">

                                    <div class="col-md-12">
                                        @if (\Session::has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {!! \Session::get('success') !!}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <form action="{{route('admin.updateKameeti',[$kameeti->id])}}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">
                                                            Kameeti Name
                                                        </label>
                                                        <input type="text" class="form-control" name="name" required value="{{$kameeti->name}}">
                                                        @error('name')
                                                        <label for="" style="color: red">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">
                                                            Kameeti Duration
                                                        </label>
                                                        <input type="text" class="form-control" name="duration" id="duration" readonly="readonly" value="{{$kameeti->duration}}" required>
                                                        @error('duration')
                                                        <label for="" style="color: red">{{$message}}</label>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">
                                                            Kameeti Price
                                                        </label>
                                                        <input type="number" class="form-control" name="price" required value="{{$kameeti->price}}" >
                                                        @error('price')
                                                        <label for="" style="color: red">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">
                                                            Kameeti Amount
                                                        </label>
                                                        <input type="number" class="form-control" name="amount" required value="{{$kameeti->amount}}">
                                                        @error('amount')
                                                        <label for="" style="color: red">{{$message}}</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.1
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

@endsection
@section('scripts')
    <script>

        $('#duration').timeDurationPicker({
            seconds: false,
            minutes: false,
            hours: false,
            days: false,
            years: false,
            onSelect: function(element, seconds, duration, text) {
                $('#duration').val(text);
            }
        });
    </script>
@endsection
