<div class="form-group">
    <p>
        <label for="en_name">{{ __('Name') }} (EN)</label>
        <input class="form-control" type="text" id="en_name" placeholder="Enter Title (EN)" required name="en_name" value="{{ old('en_name', $category->en_name ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="ar_name">{{ __('Name') }} (AR)</label>
        <input class="form-control" type="text" id="ar_name" placeholder="Enter Title (AR)" required name="ar_name" value="{{ old('ar_name', $category->ar_name ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="image">{{ __('Image') }}</label>
        <input class="form-control-file" type="file" id="image" name="image">
    </p>
    @if(isset($category->image))
            <img src="{{ asset(Storage::url($category->image)) }}" alt="Image" width="200">
    @endif
</div>
@component('layouts.components.errors')
@endcomponent
