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
        <label for="ar_name">Child?</label>
        <input type="checkbox" id="checkbox_child" onchange="valueChanged()" {{ $category != null ? ($category->parent()->exists() ? 'checked' : '') : '' }} />
    </p>
</div>

<div class="form-group" id="child" style="display: {{ $category != null ? ($category->parent()->exists() ? 'show' : 'none') : '' }};">
    <p>
        <label for="ar_name">{{ __('Sub-Category') }}</label>
        <select name="parent_id" class="form-control" id="parent_id">
            <option value="">Child Category</option>
            @foreach($childrens as $children)
                <option value="{{ $children->id }}" {{ isset($category) ? ($category->parent()->exists() ? ($category->parent->id == $children->id ? 'selected' : '') : null) : null }}>{{ $children->en_name }}</option>
            @endforeach
        </select>
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
<script>
    function valueChanged()
    {
        if($('#checkbox_child').is(":checked"))
            $("#child").show();
        else
            $("#child").hide();
            $('#parent_id').prop('selectedIndex', 0);
    }
</script>
@component('layouts.components.errors')
@endcomponent
