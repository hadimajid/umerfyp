@extends('admin.dashboard.layout.app')

@section('title','Image Uploading')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Image Uploading</h1>
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
                            <form role="form" action="{{route('admin.imageupload',$set->id)}}" method="post">
                                @csrf
                                @foreach($hopees as $hopee)
                                <div class="card-body">
                                    @if($hopee->number == '1st')
                                    <div class="form-group">
                                        <label for={{$hopee->id}}>1st Hopee Image</label>
                                        <input type="file" class="form-control" id="{{$hopee->id}}" name="{{$hopee->id}}">
                                    </div>
                                    @endif
                                    @if($hopee->number == '2nd')
                                    <div class="form-group">
                                        <label for={{$hopee->id}}>2nd Hopee Image</label>
                                        <input type="file" class="form-control" id="{{$hopee->id}}" name="{{$hopee->id}}">
                                    </div>
                                    @endif
                                    @if($hopee->number == '3rd')
                                    <div class="form-group">
                                        <label for={{$hopee->id}}>3rd Hopee Image</label>
                                        <input type="file" class="form-control" id="{{$hopee->id}}" name="{{$hopee->id}}">
                                    </div>
                                    @endif
                                    <!-- /.card-body -->
                                 @endforeach
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