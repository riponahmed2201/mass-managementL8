@extends('backend.master')

@section('admin_title','Admin | Food Category Create')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Create Food Category</h4>
                <a href="" class="btn btn-sm btn-outline-success"> <i class="fa fa-tablet-alt"></i> All Food Category</a>
            </div>
            <div class="card-body">

                <form action="{{route('member.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter full name">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
                        </div>

                        <div class="form-group col-md-6">
                            <label>NID</label>
                            <input type="number" class="form-control" name="nid" placeholder="Enter nid">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Address</label>
                            <textarea name="address" class="form-control" cols="30" rows="3"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control-file">
                        </div>

                    </div>
                </form>

            </div>

            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
            </div>
        </div>
    </div>
@endsection
