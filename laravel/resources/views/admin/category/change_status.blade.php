@extends('admin.layouts.app')
@section('title', 'Category')

@section('content')

<?php 
    //echo "<pre>";

    //print_r($changeStatus[0]);
?>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active mt-3">Category</li>
    </ol>
        <div class="card mb-4">
                <h5 class="card-header d-flex justify-content-between align-items-center">
				  Change Status
				  	{{-- <button type="button" class="btn btn-sm btn-primary">Add New</button> --}}
				</h5>
            <div class="card-body">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        {!! \Session::get('success') !!}
                    </div>
                @endif

                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        {!! \Session::get('error') !!}
                    </div>
                @endif
                <form method="post" action="{{ route('admin.category.change_status', $id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="mb-2">Staus</label>
                        
                        <select name="status" class="form-control">
                            <option value="1" {{ ($changeStatus[0]==1 ? 'selected disabled' : '') }}>Active</option>
                            <option value="0" {{ ($changeStatus[0]==0 ? 'selected disabled' : '') }}>Disabled</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Change Status</button>
                </form>                
            </div>
        </div>
@endsection