@extends('layouts.app')
@section('page-name', 'Site Information')
@section('content')

    <h1>{{ __('Update Site Information') }}</h1>
    <form action="{{ route('infos.update', '1') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        @include('infos._form')

        <button  class="btn btn-success btn-block" type="submit">{{ __('Update') }}</button>
    </form>


@endsection
