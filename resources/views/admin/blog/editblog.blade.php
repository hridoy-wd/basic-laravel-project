@extends('admin.admin_master')
@section('content')

<style>
    .bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: #db6161;
}
</style>
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Add Blog</h4>
                    <form method="post" action="{{ route('update.blog') }}" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" value="{{ $blog->id }}" name="id" id="">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Select</label>
                        <div class="col-sm-10">
                            <select class="form-select"  name="blog_category_id" aria-label="Default select example">
                                <option selected="">Open this select Category</option>
                                  @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id ==   ? 'selected' : ''}}>{{ $category->category}}</option>
                                  @endforeach
                                </select>
                        </div>
                    </div>
                      <!-- end row -->
                      <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">blog_title</label>
                        <div class="col-sm-10">
                            <input name="blog_title" value="{{ $blog->blog_title }}"  class="form-control" type="text"   id="example-text-input">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">blog_tags</label>
                        <div class="col-sm-10">
                            <input name="blog_tags" value="{{ $blog->blog_tags }}" class="form-control" type="text"   data-role="tagsinput">
                        </div>
                    </div>
        
                      <!-- end row -->
          
          
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">blog_description</label>
                          <div class="col-sm-10">
                <textarea id="mytextarea"  name="blog_description">
                    {{ $blog->blog_description }}
                </textarea>
                          </div>
                      </div>
                      <!-- end row -->
          
                       <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">blog_image </label>
                          <div class="col-sm-10">
                     <input name="blog_image"  class="form-control" type="file" id="image">
                     <img src="{{ asset($blog->blog_image) }}" width="200" alt="">
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