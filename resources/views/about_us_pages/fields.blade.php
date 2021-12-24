<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'disabled' => 'disabled']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote']) !!}
</div>

<!-- Short Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    {!! Form::textarea('short_desc', null, ['class' => 'form-control summernote-simple']) !!}
</div>

@include('layouts.seo')

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aboutUsPages.index') }}" class="btn btn-light">Cancel</a>
</div>
