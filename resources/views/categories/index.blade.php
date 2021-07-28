@extends('layouts.app')
@section('page-name', 'Categories')
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class=" mb-4 border-success border-top-0 border-right-0 border-bottom-0">
                <div class="card-body">
                    <div>
                        <h1 class="card-title pull-left">Category Table</h1>
                        <a href="{{ route('categories.create') }}" class="pull-right btn btn-primary">Add New</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('AR Name') }}</th>
                                    <th scope="col">{{ __('EN Name') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @forelse ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $category->ar_name }}</td>
                                    <td>{{ $category->en_name }}</td>
                                    <td>
                                        <a class="badge badge-light" href="{{ route('categories.edit', ['category' => $category->id])}}">Edit</a>
                                        <a class="badge badge-danger"
                                           href="{{ route('categories.destroy', ['category' => $category->id])}}"
                                           onclick="event.preventDefault();document.getElementById('fn-delete-form_{{ $category->id }}').submit()">{{ __('Delete') }}</a>
                                        <form style="display:none" id="fn-delete-form_{{ $category->id }}"
                                              method="POST"
                                              action="{{ route('categories.destroy', ['category' => $category->id])}}">
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
            {{ $categories->links() }}
        </div>
    </div>
@endsection
