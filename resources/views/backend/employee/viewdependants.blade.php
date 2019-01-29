@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Dependants @endsection

@section('bodyCssClass')





@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')

    <!-- Content Wrapper. Contains page content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box-header -->

                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">My Dependants</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dependants as $dependant)
                            <tr>
                                <td>{{$dependant->name}} {{$dependant->surname}}</td>
                                <td>{{$dependant->dateofbirth}}</td>
                                <td>{{$dependant->gender}}</td>
                                <td>
                                    <a href="{{route('joinsportdep',['clubid'=>$dependant->club_id])}}" class="btn btn-facebook" >Join sport</a>
                                    <a href="{{route('deletedep',['clubid'=>$dependant->id])}}" class="btn btn-danger" >Delete</a>
                                </td>

                            </tr>

@endforeach


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Full Name</th>
                                <th>DOB</th>
                                <th>Gender</th>
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


        <!-- /.content -->

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