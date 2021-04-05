@extends('backend.master')

@section('admin_title','Admin | Create Food Category')

@section('stylesheet')
{{--    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">--}}

{{--    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>--}}
{{--    {!! Toastr::message() !!}--}}

@endsection

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header card-primary">
                <h4>Create Food Category</h4>
                <div class="card-header-action">
                    <a href="{{route('food.category.index')}}" class="btn btn-outline-primary">
                        <i class="fa fa-plus-circle"></i> All Food Category
                    </a>
                </div>
            </div>

                @include('backend.partials.message')

                <form action="{{route('food.category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Food category name</label>
                                <input type="text" class="form-control {{ $errors->has('food_category_name') ? ' is-invalid' : '' }}" name="food_category_name" placeholder="Enter food category name">

                                @if ($errors->has('food_category_name'))
                                    <strong class="text-danger">{{ $errors->first('food_category_name') }}</strong>
                                @endif

                            </div>
                            <div class="form-group col-md-12">
                                <label>Photo</label>
                                <input type="file" name="photo" id="image" class="form-control-file">
                                @if ($errors->has('photo'))
                                    <strong class="text-danger">{{ $errors->first('photo') }}</strong>
                                @endif
                            </div>

                            <div class="form-group col-md-6">
                                <div class="col-md-3">
                                    <img id="image_preview" src="" style="width: 100px;height: 100px">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary mr-1" type="submit"> <i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
        </div>
    </div>
@endsection

@section('script')

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            readURL(this);
        });
    </script>
@endsection
