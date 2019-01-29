@extends('backend.layouts.master')

<!-- Page title -->
@section('pageTitle') View Blogs @endsection

@section('bodyCssClass')


@endsection
<!-- End block -->

<!-- BEGIN PAGE CONTENT-->
@section('pageContent')




    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Sport Blogs <small>ZB</small></h2>
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif

                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    These are the posted blogs
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
                                    <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 100px;">Title</th>
                                    <th class="sorting_desc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;" aria-sort="descending">Body</th>
                                    <th style="width: 100px;"></th></tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr role="row" class="odd">
                                        <td class="">{{$blog->title}}</td>
                                        <td class="sorting_1">{{$blog->body}}</td>

                                        <td>
                                            <a href="{{route('editsport', ['id' => $blog->id])}}" class="btn btn-facebook" >Edit</a>
                                            <a href="{{route('deletesport', ['id' => $blog->id])}}" class="btn btn-danger" >Delete</a>
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