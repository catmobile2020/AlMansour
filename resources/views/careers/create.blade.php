@extends('layouts.app')
@section('page-name', 'Create Career')
@section('content')

    <h1>{{ __('Create Career') }}</h1>
    <form action="{{ route('careers.store') }}" method="post">
        @csrf
        @method('post')

        @include('careers._form')

        <button  class="btn btn-success btn-block" type="submit">{{ __('Create') }}</button>
    </form>


@endsection
