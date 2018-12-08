@extends('layouts.app')


@section('content')
    <h1>Create Categories</h1>
    {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' =>'PUT']) !!}
    @include('admin/categories/_form')

    {{ link_to_route('admin.categories.index', 'Back', [], ['class' => 'btn btn-secondary']) }}
    {!! Form::model($category, ['method' => 'DELETE', 'route' => ['admin.categories.destroy', $category], 'class' => 'form-inline pull-right', 'data-confirm' => __('forms.posts.delete')]) !!}
    {!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection

