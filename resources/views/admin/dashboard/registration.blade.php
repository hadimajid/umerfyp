@extends('admin.dashboard.layout.app')

@section('title','Admin dashboard')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Active Sets</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('admindash.create')}}">Add New Set</a></li>
{{--                                <li class="breadcrumb-item active">DataTables</li>--}}
                            </ol>
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
                                <h3 class="card-title">All The Registered Active Sets</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div id="example1_filter" class="dataTables_filter pull-right">
                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 166px;">
                                                        Sr.No
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Per Day Amount
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Total Days
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Total Users
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Current Users
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Days passed
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Total Amount
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 204px;">
                                                        My Commission
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 204px;">
                                                        Jazz Commission
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 204px;">
                                                        Return Per Person
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 204px;">
                                                        Amount Per Person
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                                                        1st Hopee
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                                                        2nd Hopee
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                                                        3rd Hopee
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                                                        Edit
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sets as $set)

                                                        @if($set->id%2 == 0)
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">{{$set->id}}</td>
                                                                <td>{{$set->perday}}</td>
                                                                <td>{{$set->totalday}}</td>
                                                                <td>{{$set->totalusers}}</td>
                                                                <td>{{$set->currentusers}}</td>
                                                                <td>{{$set->dayspassed}}</td>
                                                                <td>{{$set->totalamount}}</td>
                                                                <td>{{$set->mycommission}}</td>
                                                                <td>{{$set->jazzcommission}}</td>
                                                                <td>{{$set->returnperperson}}</td>
                                                                <td>{{$set->totalamountperperson}}</td>
                                                                <td>{{$set->firsthopee}}</td>
                                                                <td>{{$set->secondhopee}}</td>
                                                                <td>{{$set->thirdhopee}}</td>
                                                                <td><a href="{{route('admindash.edit',$set->id)}}"><i class="far fa-edit nav-icon"></i></a></td>
                                                            </tr>
                                                        @else
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">{{$set->id}}</td>
                                                                <td>{{$set->perday}}</td>
                                                                <td>{{$set->totalday}}</td>
                                                                <td>{{$set->totalusers}}</td>
                                                                <td>{{$set->currentusers}}</td>
                                                                <td>{{$set->dayspassed}}</td>
                                                                <td>{{$set->totalamount}}</td>
                                                                <td>{{$set->mycommission}}</td>
                                                                <td>{{$set->jazzcommission}}</td>
                                                                <td>{{$set->returnperperson}}</td>
                                                                <td>{{$set->totalamountperperson}}</td>
                                                                <td>{{$set->firsthopee}}</td>
                                                                <td>{{$set->secondhopee}}</td>
                                                                <td>{{$set->thirdhopee}}</td>
                                                                <td><a href="{{route('admindash.edit',$set->id)}}"><i class="far fa-edit nav-icon"></i></a></td>
                                                            </tr>
                                                        @endif

                                                    @endforeach
                                                </tbody>
                                            </table>
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
