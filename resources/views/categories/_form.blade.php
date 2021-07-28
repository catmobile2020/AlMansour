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

@component('layouts.components.errors')
@endcomponent
