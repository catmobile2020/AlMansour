@extends('layouts.app')
@section('page-name', 'Post')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

            @forelse ($posts as $post)
                <div class="card shadow-sm mb-4
            @if(now()->diffInMinutes($post->created_at) < 30)
                                border-success border-top-0 border-right-0 border-bottom-0
            @endif
                    ">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="text-dark"
                               href="{{ route('posts.show', ['post' => $post->id]) }}"
                               style="text-decoration: none"
                            >
                                {{ $post->title }}
                            </a>
                        </h4>


                        <p class="card-text">
                            <small class="text-muted">
                                {{ $post->caption }}
                            </small>
                        </p>
                    </div>

                    <div class="card-footer d-flex justify-content-around">

                        {{ $post->created_at }}

                        @auth
                            <div class="d-flex align-self-center">
                                <a class="badge badge-light mr-1" href="{{ route('posts.edit', ['post' => $post->id])}}">{{ __('Edit') }}</a>

                                <a class="badge badge-light"
                                   href="{{ route('posts.destroy', ['post' => $post->id])}}"
                                   onclick="event.preventDefault();document.getElementById('fn-delete-form_{{ $post->id }}').submit()">{{ __('Delete') }}</a>
                                <form style="display:none" id="fn-delete-form_{{ $post->id }}" method="POST"
                                      action="{{ route('posts.destroy', ['post'=>$post->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete"/>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ __('No News posted yet!') }}
                        </h5>
                    </div>
                </div>
            @endforelse


            {{ $posts->links() }}

        </div>


    </div>

@endsection
