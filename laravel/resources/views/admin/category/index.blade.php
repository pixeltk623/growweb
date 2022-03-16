<?php 
    
    //dd($categories);
    
?>
@extends('admin.layouts.app')
@section('title', 'Category')

@section('content')
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active mt-3">Category</li>
    </ol>
        <div class="card mb-4">
                <h5 class="card-header d-flex justify-content-between align-items-center">
				  List Category
				  	<a href="{{ route('admin.category.create') }}" type="button" class="btn btn-sm btn-primary">Add New</a>
				</h5>
            <div class="card-body">
                <table id="" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $key =>  $category)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                @if($category->status==1)
                                    <td> <button class="btn btn-success btn-sm">Active</button></td>
                                @else
                                    <td> <button class="btn btn-danger btn-sm">Disabled</button></td>
                                @endif
                                <td> {{ \Carbon\Carbon::parse($category->created_at)->format('M, d Y') }} </td>
                                <td>{{ \Carbon\Carbon::parse($category->updated_at)->format('M, d Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.category.change_status', $category->id) }}" class="btn btn-warning">Change Status</a>
                                    {{-- <a href="" class="btn btn-primary">Show</a> --}}
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-secondary">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center text-danger" colspan="6">Tiger Nixon</td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
@endsection