@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Edit Your Admin Data</h4>
                    <form method="post" action="{{ route('store.homeSlide') }}" enctype="multipart/form-data">
                      @csrf
                      <input class="form-control" name="id" type="hidden" value="{{ $HomeSlide->id }}">
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="title" type="text" value="{{ $HomeSlide->title }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="short_title" type="text" value="{{ $HomeSlide->short_title }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Video Url</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="video_url" type="text" value="{{ $HomeSlide->video_url }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Slide Img</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="slide_img" type="file" >
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