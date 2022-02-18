<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $contactUsPage->title }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $contactUsPage->desc !!}
            </p>
        </div>
    </div>
</div>

<!-- Embed Maps Link Field -->
<div class="form-group">
    {!! Form::label('embed_maps_link', 'Embed Maps URL:') !!}
    <p>{!! $contactUsPage->embed_maps_link !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $contactUsPage->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $contactUsPage->updated_at->format("d/m/Y h:i:s") }}</p>
</div>