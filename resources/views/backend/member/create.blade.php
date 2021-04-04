@extends('backend.master')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Create Member</h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter full name">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Phone Number</label>
                        <input type="number" class="form-control" placeholder="Enter phone number">
                    </div>

                    <div class="form-group col-md-6">
                        <label>NID</label>
                        <input type="number" class="form-control" placeholder="Enter nid">
                    </div>

                    <div class="form-group col-md-12">
                        <label>Address</label>
                        <textarea name="" class="form-control" cols="30" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Photo</label>
                        <input type="file" class="form-control-file">
                    </div>

                </div>
            </div>

            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Submit</button>
            </div>
        </div>
    </div>
@endsection
