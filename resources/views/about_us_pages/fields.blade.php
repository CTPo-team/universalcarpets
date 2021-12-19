<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    {!! Form::textarea('short_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('seo_desc', 'Seo Desc:') !!}
    {!! Form::textarea('seo_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Category Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('seo_category', 'Seo Category:') !!}
    {!! Form::textarea('seo_category', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Keyword Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('seo_keyword', 'Seo Keyword:') !!}
    {!! Form::textarea('seo_keyword', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('seo_url', 'Seo Url:') !!}
    {!! Form::textarea('seo_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aboutUsPages.index') }}" class="btn btn-light">Cancel</a>
</div>
