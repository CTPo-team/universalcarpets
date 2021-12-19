<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blogCategory->title }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{{ $blogCategory->desc }}</p>
</div>

<!-- Seo Desc Field -->
<div class="form-group">
    {!! Form::label('seo_desc', 'Seo Desc:') !!}
    <p>{{ $blogCategory->seo_desc }}</p>
</div>

<!-- Seo Category Field -->
<div class="form-group">
    {!! Form::label('seo_category', 'Seo Category:') !!}
    <p>{{ $blogCategory->seo_category }}</p>
</div>

<!-- Seo Keyword Field -->
<div class="form-group">
    {!! Form::label('seo_keyword', 'Seo Keyword:') !!}
    <p>{{ $blogCategory->seo_keyword }}</p>
</div>

<!-- Seo Url Field -->
<div class="form-group">
    {!! Form::label('seo_url', 'Seo Url:') !!}
    <p>{{ $blogCategory->seo_url }}</p>
</div>

