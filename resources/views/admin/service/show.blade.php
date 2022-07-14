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
                            the construction function: <code>$().DataTable();</code>.
                        </p>
                        <button class="btn btn-primary"><a href="{{ route('service.add') }}" style="color: white">Add</a></button>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
        
        
                            <tbody>
                                @php($i = 1);
                               @foreach ($services as $service) 
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $service -> title }}</td>
                                <td>{{ $service -> short_title }}</td>
                                <td>{!! $service -> service_descripition !!}</td>
                                <td>
                                    <button class="btn btn-info"><a href="{{ route('service.edit', $service -> id ) }}" style="color: white">Edit</a></button>
                                    <button class="btn btn-danger"><a href="{{ route('service.destroy', $service -> id ) }}" style="color: white">Delete</a></button>
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