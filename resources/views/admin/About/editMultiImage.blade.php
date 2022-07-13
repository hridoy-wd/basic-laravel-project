@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Edit Your About Page</h4>
                    <form method="post" action="{{ route('update.multi.image') }}" enctype="multipart/form-data">
                      @csrf
                       <input type="hidden" name="id" id="" value="{{ $onellMultiImage->id }}">
                       <div class="row mb-3">
                          <div class="col-sm-10">
                           <img src="{{ asset($onellMultiImage->multi_image) }}" width="60" alt="">
                                 </div>
                          <div class="col-sm-10">
                     <input name="multi_image" class="form-control"  type="file" id="image">
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