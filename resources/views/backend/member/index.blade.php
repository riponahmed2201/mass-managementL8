@extends('backend.master')


@section('stylesheet')
    <link rel="stylesheet" href="{{asset('assets/backend/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
@endsection
@section('content')

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Member</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Photo</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>NID </th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-outline-info"> <i class=" fa fa-edit"></i> </a>
                                                <a href="" class="btn btn-sm btn-outline-danger"> <i class=" fa fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

    <!-- Page Specific JS File -->
    <script src="{{asset('assets/backend/bundles/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/backend/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/backend/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/backend/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/backend/bundles/datatables/export-tables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/backend/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/backend/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/backend/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/page/datatables.js')}}"></script>

@endsection
