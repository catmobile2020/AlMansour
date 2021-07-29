<div class="form-group">
    <p>
        <label for="category_id">{{ __('Category') }}</label>
        <select class="form-control" id="category_id" name="category_id">
            @foreach($categories as $category)
                <option {{ old('category_id', isset($service) ? ($category->id == $service->category_id ? 'selected' : '') : '') }} value="{{ $category->id }}">{{ $category->en_name }}</option>
            @endforeach
        </select>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="en_title">{{ __('Title') }} (EN)</label>
        <input class="form-control" type="text" id="en_title" placeholder="Enter Title (EN)" required name="en_title" value="{{ old('en_title', $service->en_title ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="ar_title">{{ __('Title') }} (AR)</label>
        <input class="form-control" type="text" id="ar_title" placeholder="Enter Title (AR)" required name="ar_title" value="{{ old('ar_title', $service->ar_title ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="ar_contact">{{ __('Content') }} (AR)</label>
        <textarea rows="10" class="form-control fn_post_editor" type="text" id="ar_content" name="ar_content">{{ old('ar_content', $service->ar_content ?? null) }}</textarea>
    </p>
</div>
<div class="form-group">
    <p>
        <label for="ar_contact">{{ __('Content') }} (EN)</label>
        <textarea rows="10" class="form-control fn_post_editor" type="text" id="en_content" name="en_content">{{ old('en_content', $service->en_content ?? null) }}</textarea>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="thumbnail">{{ __('Thumbnail') }}</label>
        <input class="form-control-file" type="file" id="thumbnail" name="thumbnail">
    </p>
    {!! isset($service->thumbnail) ? '<img src="'.asset(Storage::url($service->thumbnail)).'" alt="Thumbnail" width="200">' : null !!}
</div>
@component('layouts.components.errors')
@endcomponent
