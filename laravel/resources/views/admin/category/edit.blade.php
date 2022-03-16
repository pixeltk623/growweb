@extends('admin.layouts.app')
@section('title', 'Category')

@section('content')
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active mt-3">Category</li>
    </ol>
        <div class="card mb-4">
                <h5 class="card-header d-flex justify-content-between align-items-center">
                  Add Category
                    {{-- <button type="button" class="btn btn-sm btn-primary">Add New</button> --}}
                </h5>
            <div class="card-body">

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        {!! \Session::get('success') !!}
                    </div>
                @endif

                @if (\Session::has('error'))
                    <div class="alert alert-success">
                        {!! \Session::get('error') !!}
                    </div>
                @endif

                <form method="post" action="{{ route('admin.category.edit', $findCategoryById->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="mb-2">Category Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Category Name" value="{{ $findCategoryById->name }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="mb-2">Category Slug</label>
                        <input type="text" class="form-control" name="slug" id="exampleInputPassword1" placeholder="Category Slug" value="{{ $findCategoryById->slug }}">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>                
            </div>
        </div>
@endsection