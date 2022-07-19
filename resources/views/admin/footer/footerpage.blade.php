@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Update Your Footer Page</h4>
                    <form method="post" action="" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="">
                        
                      <div class="row mb-3">
                        <h3>footer part 1</h3>
                          <label for="example-text-input"  class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-10">
                              <input name="title1" class="form-control" type="text" value="{{ $footer->title1 }}"  id="example-text-input">
                          </div>
                      </div>
                
                      <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Description </label>
                        <div class="col-sm-10">
                            <textarea required="" name="description1"  class="form-control" rows="5">
                                {{ $footer->description1 }}
                            </textarea>
                        </div>
                      </div>
                      <hr>

                      <!-- end row -->
          
                      <div class="row mb-3">
                        <h3>footer part 2</h3>
                          <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-10">
                              <input value="{{ $footer->title2 }}" name="title2" class="form-control" type="text" value=""  id="example-text-input">
                          </div>
                      </div>
                 
                      <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Description </label>
                        <div class="col-sm-10">
                            <textarea required="" name="description2"  class="form-control" rows="5">
                                {{ $footer->description2 }}
                            </textarea>
                        </div>
                      </div>
                      <hr>
                      
                      <!-- end row -->
          
                      <div class="row mb-3">
                        <h3>footer part 3</h3>
                          <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-10">
                              <input name="title3" value="{{ $footer->title3 }}" class="form-control" type="text" value=""  id="example-text-input">
                          </div>
                      </div>
               
                      <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Description </label>
                        <div class="col-sm-10">
                            <textarea required="" name="description3"  class="form-control" rows="5">
                                {{ $footer->description3 }}
                            </textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Facebook Link</label>
                          <div class="col-sm-10">
                              <input name="facebook_link" value="{{ $footer->facebook_link }}" class="form-control" type="text" value=""  id="example-text-input">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Twitter Link</label>
                          <div class="col-sm-10">
                              <input name="twitter_link" value="{{ $footer->twitter_link }}" class="form-control" type="text" value=""  id="example-text-input">
                          </div>
                      </div>

                      <hr>
                     
                      <!-- end row -->
                      <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Copyright </label>
                        <div class="col-sm-10">
                            <input name="copyright" value="{{ $footer->copyright }}" class="form-control" type="text" value=""  id="example-text-input">
                        </div>
                      </div>
                  
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