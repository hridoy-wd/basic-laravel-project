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
                        <button class="btn btn-primary"><a href="" style="color: white">Add</a></button>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Blog Category</th>
                                <th>Blog Title</th>
                                <th>blog Tags</th>
                                <th>blog Image</th> 
                            </tr>
                            </thead>
        
        
                            <tbody>
                                @php($i = 1);
                               @foreach ($blogs as $blog) 
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td> {{ $blog['category']['category'] }} </td>              
                                <td>{{ $blog ->blog_title }}</td>
                                <td>{{ $blog ->blog_tags }}</td>
                                <td><img src="{{ asset($blog ->blog_image) }}" width="60" height="60" alt=""></td>
                                <td>
                                    <button class="btn btn-info"><a href="{{ route('edit.blog',$blog ->id) }}" style="color: white">Edit</a></button>
                                    <button class="btn btn-danger"><a href="{{ route('delete.blog',$blog ->id) }}" style="color: white">Delete</a></button>
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