@extends('layouts.app')
@section('page-name', 'Categories')
@section('content')

    <h1>{{ __('Update Category') }}</h1>
    <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('categories._form')

        <button  class="btn btn-success btn-block" type="submit">{{ __('Update') }}</button>
    </form>


@endsection
