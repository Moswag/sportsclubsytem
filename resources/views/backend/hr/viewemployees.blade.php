@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') View members @endsection

@section('bodyCssClass')


@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')
    <section class="content">
        @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box-header -->

                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">New Members</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Branch</th>
                                <th>Employee ID</th>


                            </tr>
                            </thead>
                            <tbody>

            @foreach($users as $user)
                <tr>

                    <form method="post" action="{{route('deduct')}}">

                        <td>{{$user->name}} {{$user->surname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->branch}}</td>
                        <td>{{$user->employeeid}} <input type="hidden" name="employeeid" value="{{$user->employeeid}}"> </td>
                        {{csrf_field()}}
                        <td><button type="submit" class="btn btn">Deduct</button> </td>
                    </form>
                </tr>
            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>

                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Branch</th>
                                <th>Employee ID</th>

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