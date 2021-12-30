<div class="form-group">
    <p>
        <label for="site_name">{{ __('Site Name') }}</label>
        <input class="form-control" type="text" id="site_name" name="site_name" value="{{ old('site_name', $info->site_name ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="email">{{ __('Email') }}</label>
        <input class="form-control" type="email" id="email" name="email" value="{{ old('email', $info->email ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="mobile">{{ __('Mobile') }}</label>
        <input class="form-control" type="text" id="mobile" name="mobile" value="{{ old('mobile', $info->mobile ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="fax">{{ __('FAX') }}</label>
        <input class="form-control" type="text" id="fax" name="fax" value="{{ old('fax', $info->fax ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="address">{{ __('Address') }}</label>
        <textarea rows="3" class="form-control" type="text" id="address" name="address">{{ old('address', $info->address ?? null) }}</textarea>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="map">{{ __('Map URL') }}</label>
        <input class="form-control" type="url" id="map" name="map" value="{{ old('map', $info->map ?? null) }}"/>
    </p>
</div>
<div class="form-group">
    <p>
        <label for="facebook">{{ __('Facebook') }}</label>
        <input class="form-control" type="url" id="facebook" name="facebook" value="{{ old('facebook', $info->facebook ?? null) }}"/>
    </p>
</div>
<div class="form-group">
    <p>
        <label for="instgram">{{ __('Instgram') }}</label>
        <input class="form-control" type="url" id="instgram" name="instgram" value="{{ old('instgram', $info->instgram ?? null) }}"/>
    </p>
</div>
<div class="form-group">
    <p>
        <label for="twitter">{{ __('Twitter') }}</label>
        <input class="form-control" type="url" id="twitter" name="twitter" value="{{ old('twitter', $info->twitter ?? null) }}"/>
    </p>
</div>
<div class="form-group">
    <p>
        <label for="linkedin">{{ __('Linkedin') }}</label>
        <input class="form-control" type="url" id="linkedin" name="linkedin" value="{{ old('linkedin', $info->linkedin ?? null) }}"/>
    </p>
</div>

<div class="form-group">
    <p>
        <label for="logo">{{ __('Logo') }}</label>
        <input class="form-control-file" type="file" id="logo" name="logo">
    </p>
    {!! isset($info->logo) ? '<img src="'.asset(Storage::url($info->logo)).'" alt="Logo" width="200">' : null !!}
</div>

<div class="form-group">
    <p>
        <label for="favicon">{{ __('Favicon') }}</label>
        <input class="form-control-file" type="file" id="favicon" name="favicon">
    </p>
    {!! isset($info->favicon) ? '<img src="'.asset(Storage::url($info->favicon)).'" alt="Favicon" width="200">' : null !!}
</div>
@component('layouts.components.errors')
@endcomponent
