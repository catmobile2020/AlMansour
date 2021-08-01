@extends('layouts.app')
@section('page-name', 'Update '.$career->title.' | Career')
@section('content')

    <h1>{{ __('Update Career') }}</h1>
    <form action="{{ route('careers.update', ['career' => $career->id]) }}" method="POST">
        @csrf
        @method('PUT')

        @include('careers._form')

        <button  class="btn btn-success btn-block" type="submit">{{ __('Update') }}</button>
    </form>


@endsection
