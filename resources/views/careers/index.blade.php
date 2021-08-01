@extends('layouts.app')
@section('page-name', 'Careers')
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class=" mb-4 border-success border-top-0 border-right-0 border-bottom-0">
                <div class="card-body">
                    <div>
                        <h1 class="card-title pull-left">Careers Table</h1>
                        <a href="{{ route('careers.create') }}" class="pull-right btn btn-primary">Add New</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Title') }}</th>
                                    <th scope="col">{{ __('Created at') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @forelse ($careers as $career)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $career->title }}</td>
                                    <td>{{ $career->created_at }}</td>
                                    <td>
                                        <a class="badge badge-light" href="{{ route('careers.edit', ['career' => $career->id])}}">Edit</a>
                                        <a class="badge badge-danger"
                                           href="{{ route('careers.destroy', ['career' => $career->id])}}"
                                           onclick="event.preventDefault();document.getElementById('fn-delete-form_{{ $career->id }}').submit()">{{ __('Delete') }}</a>
                                        <form style="display:none" id="fn-delete-form_{{ $career->id }}"
                                              method="POST"
                                              action="{{ route('careers.destroy', ['career' => $career->id])}}">
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
            {{ $careers->links() }}
        </div>
    </div>
@endsection
