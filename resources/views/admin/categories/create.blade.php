@extends('layouts.app')


@section('content')
    <h1>Create Categories</h1>

    {!! Form::open(['route' => ['admin.categories.store'], 'method' =>'POST']) !!}
    @include('admin/categories/_form')

    {{ link_to_route('admin.categories.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary']) }}
    {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection

