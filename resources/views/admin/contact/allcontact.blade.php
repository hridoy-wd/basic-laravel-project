@extends('admin.admin_master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
        
                        <h4 class="card-title">Default Datatable</h4>
                        <p class="card-title-desc">DataTables has most features enabled by
                            default, so all you need to do to use it with your own tables is to call
                            the construction function: </code>.
                        </p>
                 
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>subject</th>
                                <th>budget</th>
                                <th>message</th> 
                                <th>Date</th>
                                <th>Action</th> 
                            </tr>
                            </thead>
        
        
                            <tbody>
                                @php($i = 1);
                               @foreach ($contact as $item) 
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item ->name }}</td>   
                                <td>{{ $item ->email }}</td>
                                <td>{{ $item ->subject }}</td>
                                <td>{{ $item ->budget }}</td>
                                <td>{{ $item ->message }}</td>
                                <td>{{ ($item ->created_at)->diffForHumans() }}</td>
                                <td>
                                    <button class="btn btn-danger"><a href="" style="color: white">Delete</a></button>
                                </td>
                            </tr>
                                @endforeach 
                            </tbody>
                        </table>
        
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>  
</div>
@endsection