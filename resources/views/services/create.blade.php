@extends('layouts.app')
@section('page-name', 'Services')
@section('content')

    <h1>{{ __('Create Service') }}</h1>
    <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        @include('services._form')

        <button  class="btn btn-success btn-block" type="submit">{{ __('Create') }}</button>
    </form>


@endsection
