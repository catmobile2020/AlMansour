@extends('layouts.app')
@section('page-name', 'Services')
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class=" mb-4 border-success border-top-0 border-right-0 border-bottom-0">
                <div class="card-body">
                    <div>
                        <h1 class="card-title pull-left">Services Table</h1>
                        <a href="{{ route('services.create') }}" class="pull-right btn btn-primary">Add New</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Category') }}</th>
                                    <th scope="col">{{ __('Title') }} (AR)</th>
                                    <th scope="col">{{ __('Title') }} (EN)</th>
                                    <th scope="col">{{ __('Thumbnail') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @forelse ($services as $service)
                                <tr>
                                    <th scope="row">{{ $i }}-</th>
                                    <td>{{ $service->category->en_name }}</td>
                                    <td>{{ $service->ar_title }}</td>
                                    <td>{{ $service->en_title }}</td>
                                    <td><img src="{{ asset(Storage::url($service->thumbnail)) }}" alt="Thumbnail" width="80"></td>
                                    <td>
                                        <a class="badge badge-light" href="{{ route('services.edit', ['service' => $service->id])}}">Edit</a>
                                        <a class="badge badge-danger"
                                           href="{{ route('services.destroy', ['service' => $service->id])}}"
                                           onclick="event.preventDefault();document.getElementById('fn-delete-form_{{ $service->id }}').submit()">{{ __('Delete') }}</a>
                                        <form style="display:none" id="fn-delete-form_{{ $service->id }}"
                                              method="POST"
                                              action="{{ route('services.destroy', ['service' => $service->id])}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="delete"/>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @empty
                                <tr>
                                    <th colspan="6" scope="row">No Data to Show</th>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $services->links() }}
        </div>
    </div>
@endsection
