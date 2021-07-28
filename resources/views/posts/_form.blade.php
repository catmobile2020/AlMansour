
<div class="form-group">
    <p>
        <label for="language_id">{{ __('Language') }}</label>
        <select class="form-control" id="language_id" name="language_id">
            @foreach($languages as $language)
                <option {{ old('language_id', isset($post->language_id) ? ($post->language_id == $language->id ? 'selected' : '') : '') }} value="{{ $language->id }}">{{ $language->name }}</option>
            @endforeach
        </select>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="title">{{ __('Title') }}</label>
        <input class="form-control" type="text" id="title" name="title" value="{{ old('title', $post->title ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="caption">{{ __('Caption') }}</label>
        <textarea rows="3" class="form-control" type="text" id="caption" name="caption">{{ old('caption', $post->caption ?? null) }}</textarea>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="content">{{ __('Content') }}</label>
        <textarea rows="10" class="form-control fn_post_editor" type="text" id="content" name="content">{{ old('content', $post->content ?? null) }}</textarea>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="image">{{ __('Image') }}</label>
        <input class="form-control-file" type="file" id="image" name="image" value=""/>
    </p>
</div>


@component('layouts.components.errors')
@endcomponent
