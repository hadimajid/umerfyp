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
                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="Search Users" id="search" aria-controls="example1"></label>
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
                                                        Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Email
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Username
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Number
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Hopees won
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">
                                                        Total sets
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $user)
                                                    @if($serial%2 == 0)
                                                        <tr role="row" class="odd" id="{{$user->id}}">
                                                            <td class="sorting_1">{{$serial++}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>{{$user->username}}</td>
                                                            <td>{{$user->number}}</td>
                                                            <td>{{0}}</td>
                                                            <td>{{0}}</td>
                                                        </tr>
                                                    @else
                                                        <tr role="row" class="even" id="{{$user->id}}">
                                                            <td class="sorting_1">{{$serial++}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>{{$user->username}}</td>
                                                            <td>{{$user->number}}</td>
                                                            <td>{{0}}</td>
                                                            <td>{{0}}</td>
                                                        </tr>
                                                    @endif

                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                                <ul class="pagination">
                                                    {{$users->links()}}
                                                </ul>
                                            </div>
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
    <script>
        var search = document.getElementById('search');
        search.addEventListener('keyup',findUsers);

        function findUsers(e) {
            var text = e.target.value.toLowerCase();

            @foreach($users as $user)
                if('{{$user->name}}'.toLowerCase().indexOf(text) != -1){
                    var row = document.getElementById('{{$user->id}}');
                    row.style.display = 'contents';
                }else{
                    var row = document.getElementById('{{$user->id}}');
                    row.style.display = 'none';
                }
            @endforeach
        }
    </script>
@endsection
