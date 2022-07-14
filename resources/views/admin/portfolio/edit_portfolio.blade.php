@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Add Portfolio</h4>
                    <form method="post" action="{{ route('update.portfolio') }}" enctype="multipart/form-data">
                      @csrf
                      <input name="id" required class="form-control" type="hidden" value="{{ $portfolio->id }}"  >
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-10">
                              <input name="portfolio_name" required class="form-control" type="text" value="{{ $portfolio->portfolio_name }}"   id="example-text-input">
                          </div>
                      </div>
                      <!-- end row -->
          
                        <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                          <div class="col-sm-10">
                              <input name="portfolio_title" required class="form-control" value="{{ $portfolio->portfolio_title }}" type="text"  id="example-text-input">
                          </div>
                      </div>
                      <!-- end row -->
          
          
              
                      <!-- end row -->
          
          
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Long Description </label>
                          <div class="col-sm-10">
                <textarea id="editor" name="portfolio_description" required>
                    {{ $portfolio->portfolio_description }}
                </textarea>
                          </div>
                      </div>
                      <!-- end row -->
          
                       <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                          <div class="col-sm-10">
                     <input name="portfolio_image"  class="form-control" value="{{ $portfolio->portfolio_image }}" type="file" id="image"><br>
                     <img src="{{ asset($portfolio->portfolio_image) }}" width="140" height="90" alt="">
                          </div>
                      </div>
                     <!-- end row -->
                         <!-- end row -->
                     
                        <input type="submit" class="btn btn-primary" value="Update portfolio">
                         <!-- end row -->
                </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection