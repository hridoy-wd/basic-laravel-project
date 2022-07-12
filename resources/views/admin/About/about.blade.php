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
                      <input type="hidden" name="id" value="{{ $about->id }}">

                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-10">
                              <input name="title" class="form-control" type="text" value="{{ $about->title }}"  id="example-text-input">
                          </div>
                      </div>
                      <!-- end row -->
          
                        <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                          <div class="col-sm-10">
                              <input name="short_title" class="form-control" type="text" value="{{ $about->short_title }}"  id="example-text-input">
                          </div>
                      </div>
                      <!-- end row -->
          
          
                        <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                          <div class="col-sm-10">
                              <textarea required="" name="short_descripiton"  class="form-control" rows="5">
                           {{ $about->short_descripiton }}
                              </textarea>
                          </div>
                      </div>
                      <!-- end row -->
          
          
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Long Description </label>
                          <div class="col-sm-10">
                <textarea id="editor" name="long_description">
             {{ $about->long_description }}
                </textarea>
                          </div>
                      </div>
                      <!-- end row -->
          
                       <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                          <div class="col-sm-10">
                     <input name="about_image" class="form-control" type="file" id="image">
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