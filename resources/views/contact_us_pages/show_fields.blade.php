<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $contactUsPage->title }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <p>{!! $contactUsPage->desc !!}</p>
</div>

<!-- Embed Maps Link Field -->
<div class="form-group">
    {!! Form::label('embed_maps_link', 'Embed Maps URL:') !!}
    <p>{!! $contactUsPage->embed_maps_link !!}</p>
</div>

