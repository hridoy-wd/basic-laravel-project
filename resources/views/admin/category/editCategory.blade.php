@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Update Category</h4>
                    <form method="post" action="{{ route('update.category') }}">   
                      @csrf
                      <input name="id"  class="form-control" type="hidden" id="example-text-input" value="{{ $categoryEdit->id }}">
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Update Category</label>
                          <div class="col-sm-10">
                              <input name="category" required class="form-control" type="text" id="example-text-input" value="{{ $categoryEdit->category }}">
                          </div>
                      </div>
   
                     
                        <input type="submit" class="btn btn-primary" value="Update Profile">
                         <!-- end row -->
                </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection