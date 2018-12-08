@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>
                <a href="{{ route('admin.categories.create') }}">Create</a>
                <div class="card-body">
                    List of Categories
                    <a href="{{ route('admin.categories.create') }}">New</a>
                    @forelse ($categories as $category)
                        <li>{{ $category->name }}
                        <a href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                        </li>
                    @empty
                        <p>No users</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
