@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') View Sports @endsection

@section('bodyCssClass')


@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box-header -->

                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Registered Sports</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sport Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>


                                @foreach($sports as $sport)
                                    <tr role="row" class="odd">
                                        <td class="">{{$sport->name}}</td>
                                        <td class="sorting_1">{{$sport->description}}</td>
                                        <td><img src="public/images/sports-pictures/{{$sport->image_url}}" height="42" width="42"/> </td>
                                        <td>
                                            <a href="{{route('editsport', ['id' => $sport->id])}}" class="btn btn-facebook" >Edit</a>
                                            <a href="{{route('deletesport', ['id' => $sport->id])}}" class="btn btn-danger" >Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sport Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>


    <!-- Custom Theme Scripts -->


@endsection
@section('extraScript')
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->

    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->

    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection