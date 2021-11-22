@extends('admin.dashboard.layout.app')

@section('title','Admin dashboard')

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
                        <h1>Kameeti List</h1>
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
                            <h3 class="card-title">Kameeti</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        @if (\Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {!! \Session::get('success') !!}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">

                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($kameetis as $key=>$kameeti)
                                            <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td>{{$kameeti->name}}</td>
                                                <td>{{$kameeti->duration}}</td>
                                                <td>{{$kameeti->price}}</td>
                                                <td>{{$kameeti->amount}}</td>
                                                <td><a href="{{route('admin.updateKameeti',$kameeti->id)}}"><i class="fa fa-pen text-sm mr-1"></i></a> <a href="javascript:void(0)" class="delete" data-id="{{$kameeti->id}}"><i class="fa fa-trash text-sm"></i></a></td>
                                            </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5">No data available</td>
                                                    </tr>
                                                @endforelse

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12">
                                        {{$kameetis->links()}}
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
    <form action="" id="deleteKameetiForm" method="POST">
    @csrf
    @method("DELETE")
    </form>
@endsection

@section('scripts')
    <script>
        $('.delete').on('click',function (e){
            e.preventDefault();
            let id = $(this).data('id');
            let deleteFormUrl="{{route('admin.deleteKameeti',[''])}}"+"/"+id;
            console.log(deleteFormUrl);
            let form=$('#deleteKameetiForm');
            form.attr('action',deleteFormUrl);
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });




        })
    </script>
@endsection