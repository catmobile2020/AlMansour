@extends('layouts.app')
@section('page-name', 'Post - Show')

@section('content')
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">

                    <h1 class="card-title">
                        {{ $post->title }}
                        @component('layouts.components.badge', ['show' => now()->diffInMinutes($post->created_at) < 30])
                            New!
                        @endcomponent
                    </h1>

                    <p class="card-text">{!! $post->caption !!}</p>

                    @if ($post->image)
                        <img class="card-img mb-3" src="{{ $post->image }}" alt="{{ $post->title }}">
                    @endif

                    <p class="card-text">{!! $post->content !!}</p>

                    <div class="d-flex justify-content-around">
                        <p class="card-text">
                            @component('layouts.components.updated', ['date' => $post->created_at])
                            @endcomponent
                        </p>

                        <p class="card-text">
                            @component('layouts.components.updated', ['date' => $post->updated_at])
                                updated
                            @endcomponent
                        </p>

                    </div>


                </div>

                @auth
                    <div class="card-footer d-flex justify-content-around">
                        <div class="d-flex align-self-center">
                            <a class="badge badge-light mr-1"
                               href="{{ route('posts.edit', ['post'=>$post->id])}}">{{ __('Edit') }}</a>

                            <a class="badge badge-light" href="{{ route('posts.destroy', ['post'=>$post->id])}}"
                               onclick="event.preventDefault();document.getElementById('fn-delete-form_{{ $post->id }}').submit()">{{ __('Delete') }}</a>
                            <form style="display:none" id="fn-delete-form_{{ $post->id }}" method="POST"
                                  action="{{ route('posts.destroy', ['post'=>$post->id])}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete"/>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>

        </div>

    </div>
@endsection
