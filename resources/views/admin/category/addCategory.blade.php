@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <h4 class="card-title">Add Category</h4>
                    <form method="post" action="{{ route('store.category') }}">   
                      @csrf
                      <div class="row mb-3">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Add Category</label>
                          <div class="col-sm-10">
                              <input name="category" required class="form-control" type="text"   id="example-text-input">
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