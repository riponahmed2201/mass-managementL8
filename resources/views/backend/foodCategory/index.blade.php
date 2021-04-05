@extends('backend.master')

@section('admin_title','Admin | All Food Category')

@section('stylesheet')
    <link rel="stylesheet" href="{{asset('assets/backend/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
@endsection
@section('content')

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>All Food Category</h4>
                            <div class="card-header-action">
                                <a href="{{route('food.category.create')}}" class="btn btn-outline-primary">
                                    <i class="fa fa-plus-circle"></i> Create Food Category
                                </a>
                            </div>
                        </div>

                        @include('backend.partials.message')

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Food Category Name</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($foodCategories as $foodCategory)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$foodCategory->food_category_name}}</td>
                                            <td>
                                                <img style="width: 100px; height: 100px" src="{{asset('uploads/foodCategoryName/'.$foodCategory->photo)}}" alt="">
                                            </td>
                                            <td>
                                                <a href="{{route('food.category.edit',$foodCategory->id)}}" class="btn btn-sm btn-outline-info"> <i class=" fa fa-edit"></i> </a>
                                                <a href="{{route('food.category.destroy',$foodCategory->id)}}" class="btn btn-sm btn-outline-danger"> <i class=" fa fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
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
