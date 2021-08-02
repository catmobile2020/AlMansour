<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <title>
        @if(isset($meta_title))
            {{ $meta_title }}
        @else
            @yield('page-name')
        @endif
    </title>
</head>
<body id="app">

@include('includes.header')

<main class="container py-4 card shadow py-2">
    @component('layouts.components.success')
    @endcomponent
    @yield('content')
</main>

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea.fn_post_editor',
        language: "en",
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link code | help',
    });
    tinymce.init({
        selector: 'textarea.fn_comment_editor',
        language: "en",
        menubar: false,
        plugins: [
            'advlist autolink link',
            'searchreplace code',
        ],
        toolbar: 'undo redo | bold italic underline strikethrough | link code'
    });
</script>
@if (Route::currentRouteName() == 'posts.edit'
    || Route::currentRouteName() == 'posts.create'
    || Route::currentRouteName() == 'posts.show'
    || Route::currentRouteName() == 'abouts.edit'
    || Route::currentRouteName() == 'users.show')
@include('includes.tinymce')
@endif

</div>
</div>
</div>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
@yield('js')
</body>
</html>
