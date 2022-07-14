@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Add Portfolio</h4>
                    <form method="post" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-10">
                              <input name="portfolio_name" required class="form-control" type="text"   id="example-text-input">
                          </div>
                      </div>
                      <!-- end row -->
          
                        <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                          <div class="col-sm-10">
                              <input name="portfolio_title" required class="form-control" type="text"  id="example-text-input">
                          </div>
                      </div>
                      <!-- end row -->
          
          
                      </div>
                      <!-- end row -->
          
          
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Long Description </label>
                          <div class="col-sm-10">
                <textarea id="editor" name="portfolio_description" required>

                </textarea>
                          </div>
                      </div>
                      <!-- end row -->
          
                       <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                          <div class="col-sm-10">
                     <input name="portfolio_image" required class="form-control" type="file" id="image">
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