@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Add Your Admin Data</h4>
                    <form method="post" action="{{ route('service.update') }}">
                      @csrf
                      <input class="form-control" name="id" type="hidden" value="{{ $service->id }}">
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="title" type="text" value="{{ $service->title }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="short_title" type="text" value="{{ $service->short_title }}">
                        </div>
                    </div>
                     <!-- end row -->
                    

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                        <div class="col-sm-10">
                          <textarea id="editor" name="service_descripition" type="text">{{ $service->service_descripition }} </textarea>
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