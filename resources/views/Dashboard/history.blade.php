@extends('dashboard.layout.app')

@section('title','User dashboard')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Registered Sets</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
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
                            <h3 class="card-title">All your Sets that has ended</h3>
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
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                                                    1st Hopee
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                                                    2nd Hopee
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                                                    3rd Hopee
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $script = 0; ?>

                                            @foreach($sets as $set)

                                                @if($set->id%2 == 0)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{$script++}}</td>
                                                        <td>{{$set->perday}}</td>
                                                        <td>{{$set->totalday}}</td>
                                                        <td>{{$set->totalusers}}</td>
                                                        <td>{{$set->firsthopee}} Won By <b class="text-capitalize">({{$set->hopees()->where('number','1st')->get()->first()->user()->first()->name}})</b></td>
                                                        <td>{{$set->secondhopee}} Won By <b class="text-capitalize">({{$set->hopees()->where('number','2nd')->get()->first()->user()->first()->name}})</b></td>
                                                        <td>{{$set->thirdhopee}} Won By <b class="text-capitalize">({{$set->hopees()->where('number','3rd')->get()->first()->user()->first()->name}})</b></td>
                                                    </tr>
                                                @else
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">{{$script++}}</td>
                                                        <td>{{$set->perday}}</td>
                                                        <td>{{$set->totalday}}</td>
                                                        <td>{{$set->totalusers}}</td>
                                                        <td>{{$set->firsthopee}} Won By <b class="text-capitalize">({{$set->hopees()->where('number','1st')->get()->first()->user()->first()->name}})</b></td>
                                                        <td>{{$set->secondhopee}} Won By <b class="text-capitalize">({{$set->hopees()->where('number','2nd')->get()->first()->user()->first()->name}})</b></td>
                                                        <td>{{$set->thirdhopee}} Won By <b class="text-capitalize">({{$set->hopees()->where('number','3rd')->get()->first()->user()->first()->name}})</b></td>
                                                    </tr>
                                                @endif

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <strong>Dashboard template by AdminLTE.io Developed by Fawad Lang. All Rights Reserved</strong>
    </footer>


@endsection
