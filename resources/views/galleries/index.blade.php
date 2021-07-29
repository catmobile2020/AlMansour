@extends('layouts.app')
@section('page-name', 'Services')
@section('content')
    <div>
        <h1 class="pull-left">{{ __('Galleries') }}</h1>
        <a href="{{ route('galleries.create') }}" class="pull-right btn btn-primary">Add Media</a>
    </div>
    <div class="row">
        @forelse($galleries as $gallery)
            <div class="col-md-3" id="image-{{ $gallery->id }}">

                <img src="{{ asset(Storage::url($gallery->image)) }}" width="200" height="200" alt="{{ $gallery->id }}">
                <br>
                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="DELETE">
                    @csrf
                    @method('post')
                    <button type="submit" class="btn btn-danger btn-sm deletebutton" style="width: 200px" value="{{ $gallery->id }}">X</button>
                </form>

            </div>
        @empty
            <h3>No Media to Show</h3>
        @endforelse
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $(".deletebutton").click(function(event){
                event.preventDefault();
                console.log($(this).attr('value'));

                $form = $(this).parent('form');
                $imageID = $(this).attr('value');

                $.ajax({
                    url: $form.attr('action'),
                    type: $form.attr('method'),
                    data: {
                        _token: CSRF_TOKEN
                    },
                    dataType: 'JSON',
                    success: function (data) {
                        console.log(data);
                        $('#image-'+$imageID).detach();
                    },
                    error: function (event) {
                        console.log(event)
                    }
                });
            });
        });
    </script>
@endsection
