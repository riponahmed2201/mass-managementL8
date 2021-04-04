@extends('backend.master')

@section('admin_title','Admin | Edit Member')

@section('content')

    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">

            <div class="card-header">
                <h4>Edit Member</h4>
                <div class="card-header-action">
                    <a href="{{route('member.index')}}" class="btn btn-outline-primary">
                        <i class="fa fa-tablet-alt"></i> All Member
                    </a>
                </div>
            </div>


            <form action="{{route('member.update',$member->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{$member->name}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email"  value="{{$member->email}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter phone number"  value="{{$member->phone}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label>NID</label>
                            <input type="number" class="form-control" name="nid" placeholder="Enter nid"  value="{{$member->nid}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Address</label>
                            <textarea name="address" class="form-control" cols="30" rows="3">  {{$member->address}} </textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Photo</label>
                            <input type="file" name="photo" class="form-control-file">
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-icon icon-left btn-primary" type="submit"> <i class="fas fa-check"></i> Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection
