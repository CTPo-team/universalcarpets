<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>

<!-- Embed Maps Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('embed_maps_link', 'Embed Maps URL:') !!}
    {!! Form::text('embed_maps_link', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote-simple', 'required' => 'required']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contactUsPages.index') }}" class="btn btn-light">Cancel</a>
</div>
