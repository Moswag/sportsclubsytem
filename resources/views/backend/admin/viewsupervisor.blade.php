@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') View Supervisors @endsection

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
                        <h3 class="box-title">Supervisors</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Sport</th>
                                <th></th>

                            </tr>
                            </thead>
                            <tbody>

            @foreach($users as $user)
                <tr>
                        <td></td>
                        <td>{{$user->user_id}}</td>
                        <td>{{$user->sport_id}}</td>

                    <td><a href="{{url('op')}}" class="btn btn-facebook">Edit</a>&nbsp<a href="{{url('fh')}}" class="btn btn-danger">Delete</a> </td>



                </tr>
            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Sport</th>
                                <th></th>
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