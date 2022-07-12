@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Edit Your About Page</h4>
                    <form method="post" action="{{ route('about.update') }}" enctype="multipart/form-data">
                      @csrf
                   

                      <!-- end row -->
          
                      
                      <!-- end row -->
          
          
                       
                      <!-- end row -->
          
          
                
                      <!-- end row -->
          
                       <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Multi Image </label>
                          <div class="col-sm-10">
                     <input name="about_image" class="form-control" multiple type="file" id="image">
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