<div class="form-group">
    <p>
        <label for="title">{{ __('Title') }}</label>
        <input class="form-control" type="text" id="title" placeholder="Enter Title" required name="title" value="{{ old('title', $career->title ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="content">{{ __('Content') }}</label>
        <textarea rows="10" class="form-control fn_post_editor" type="text" id="content" name="content">{{ old('content', $career->content ?? null) }}</textarea>
    </p>
</div>

@component('layouts.components.errors')
@endcomponent
