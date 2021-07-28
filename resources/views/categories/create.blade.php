@extends('layouts.app')
@section('page-name', 'Categories')
@section('content')

    <h1>{{ __('Create Category') }}</h1>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        @method('post')

        @include('categories._form')

        <button  class="btn btn-success btn-block" type="submit">{{ __('Create') }}</button>
    </form>


@endsection
