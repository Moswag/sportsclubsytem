@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') Home @endsection

@section('bodyCssClass')


@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')




    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>List of users <small></small></h2>
               
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    Joined Members
                </p>

                <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="datatable-fixed-header_length">
                                <label>Show <select name="datatable-fixed-header_length" aria-controls="datatable-fixed-header" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                            </div></div>
                        <div class="col-sm-6">
                            <div id="datatable-fixed-header_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-fixed-header"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable-fixed-header_info"><thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 100px;">Name</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;" aria-sort="descending">Surname</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Employee ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Branch</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 100px;">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Phonenumber</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Gender</th>
                               <th style="width: 100px;"></th></tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr role="row" class="odd">
                                    <td class="">{{$user->name}}</td>
                                    <td class="sorting_1">{{$user->surname}}</td>
                                    <td>{{$user->employeeid}}</td>
                                    <td>{{$user->branch}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phonenumber}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>
                                        <form method="post" action="{{url('home')}}">
                                        <button class="btn btn-bitbucket">View</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach

                               </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite">Showing 11 to 20 of 21 entries (filtered from 57 total entries)</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous" id="datatable-fixed-header_previous">
                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0">Previous</a>
                                    </li>
                                    <li class="paginate_button ">
                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="1" tabindex="0">1</a>
                                    </li>
                                    <li class="paginate_button active">
                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="2" tabindex="0">2</a>
                                    </li>
                                    <li class="paginate_button ">
                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="3" tabindex="0">3</a>
                                    </li>
                                    <li class="paginate_button next" id="datatable-fixed-header_next">
                                        <a href="#" aria-controls="datatable-fixed-header" data-dt-idx="4" tabindex="0">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Custom Theme Scripts -->


    @endsection