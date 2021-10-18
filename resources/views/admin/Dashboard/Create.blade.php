@extends('admin.dashboard.layout.app')

@section('title','Admin Dashboard')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Create New Set</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item text-primary">Adding New Set</li>
{{--                                <li class="breadcrumb-item active">DataTables</li>--}}
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">



                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Adding New Set</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admindash.store')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="perday">Per Day</label>
                                        <input type="number" class="form-control" id="perday" name="perday" placeholder="Per Day Amount">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="totaldays">Total Days</label>
                                        <input type="number" class="form-control" id="totaldays" name="totaldays" placeholder="Total Days">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="totalusers">Total Users</label>
                                <input type="number" class="form-control" id="totalusers" name="totalusers" placeholder="Total Users">
                            </div>
                        <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
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
