@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Edit Your Admin Data</h4>
                    <form method="post" action="{{ route('store.profile') }}" enctype="multipart/form-data">
                      @csrf
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" type="text" value="{{ $editData->name }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="username" type="text" value="{{ $editData->username }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="email" type="email" value="{{ $editData->email }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Img</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="profile_image" type="file" >
                        </div>
                    </div>
                     <!-- end row -->
                         <!-- end row -->
                     
                        <input type="submit" class="btn btn-primary" value="Update Profile">
                         <!-- end row -->
                </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection