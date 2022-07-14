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
                        <button class="btn btn-primary"><a href="{{ route('add.portfolio') }}" style="color: white">Add</a></button>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Portfolio Name</th>
                                <th>Portfolio Title</th>
                                <th>Portfolio Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
        
        
                            <tbody>
                                @php($i = 1);
                               @foreach ($portfolio as $portfolio) 
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $portfolio -> portfolio_name }}</td>
                                <td>{{ $portfolio -> portfolio_title }}</td>
                                <td><img src="{{ asset($portfolio -> portfolio_image) }}" width="60" height="60" alt=""></td>
                                <td>
                                    <button class="btn btn-info"><a href="{{ route('edit.portfolio',$portfolio->id ) }}" style="color: white">Edit</a></button>
                                    <button class="btn btn-danger"><a href="{{ route('delete.portfolio',$portfolio->id ) }}" style="color: white">Delete</a></button>
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