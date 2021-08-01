@extends('layouts.app')
@section('page-name', 'Careers Applying List')
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class=" mb-4 border-success border-top-0 border-right-0 border-bottom-0">
                <div class="card-body">
                    <div>
                        <h1 class="card-title">Careers Applying Table</h1>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Job') }}</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Mobile') }}</th>
                                    <th scope="col">{{ __('CV') }}</th>
                                    <th scope="col">{{ __('Created at') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @forelse ($careersApply as $apply)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $apply->career->title }}</td>
                                    <td>{{ $apply->name }}</td>
                                    <td><a href="mailTo:{{ $apply->email }}">{{ $apply->email }}</a></td>
                                    <td><a href="tel:{{ $apply->mobile }}">{{ $apply->mobile }}</a></td>
                                    <td>
                                        @if(Storage::exists($apply->cv))
                                            <a class="btn btn-primary btn-sm" href="{{ Storage::download($apply->cv) }}">{{ __('Download') }}</a>
                                        @else
                                            'file not exists'
                                        @endif
                                    </td>
                                    <td title="{{ $apply->created_at }}">{{ $apply->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a class="badge badge-danger"
                                           href="{{ route('careers_apply.destroy', ['careers_apply' => $apply->id])}}"
                                           onclick="event.preventDefault();document.getElementById('fn-delete-form_{{ $apply->id }}').submit()">{{ __('Delete') }}</a>
                                        <form style="display:none" id="fn-delete-form_{{ $apply->id }}"
                                              method="POST"
                                              action="{{ route('careers_apply.destroy', ['careers_apply' => $apply->id])}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="delete"/>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @empty
                                <tr>
                                    <th colspan="8" scope="row">No Data to Show</th>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $careersApply->links() }}
        </div>
    </div>
@endsection
