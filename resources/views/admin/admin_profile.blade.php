@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
<div class="row">
    <div class="col-md-6 col-xl-3">
        @php
        $id = Auth::user()->id;
        $admin = App\Models\User::find($id);
@endphp
        <!-- Simple card -->
        <div class="card">
            <img class="card-img-top img-fluid rounded" src="{{ url('upload/admin_image/'. $admin->profile_image) }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Name : {{ $admin->name }}</h4><hr>
                <h4 class="card-title">UserName :{{ $admin->username }} </h4><hr>
                <h4 class="card-title">Email : {{ $admin->email }}</h4><hr>
                <a href="{{ route('edit.profile') }}" class="btn btn-primary waves-effect waves-light">Edit Profile</a>
            </div>
        </div>

    </div><!-- end col -->
</div>
    </div>


</div>
@endsection