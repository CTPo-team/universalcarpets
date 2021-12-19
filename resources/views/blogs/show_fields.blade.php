<!-- Blog Category Id Field -->
<div class="form-group">
    {!! Form::label('blog_category_id', 'Blog Category Id:') !!}
    <p>{{ $blog->blog_category_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blog->title }}</p>
</div>

<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Path Image:') !!}
    <p>{{ $blog->path_image }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{{ $blog->desc }}</p>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    <p>{{ $blog->short_desc }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $blog->status }}</p>
</div>

<!-- Seo Desc Field -->
<div class="form-group">
    {!! Form::label('seo_desc', 'Seo Desc:') !!}
    <p>{{ $blog->seo_desc }}</p>
</div>

<!-- Seo Category Field -->
<div class="form-group">
    {!! Form::label('seo_category', 'Seo Category:') !!}
    <p>{{ $blog->seo_category }}</p>
</div>

<!-- Seo Keyword Field -->
<div class="form-group">
    {!! Form::label('seo_keyword', 'Seo Keyword:') !!}
    <p>{{ $blog->seo_keyword }}</p>
</div>

<!-- Seo Url Field -->
<div class="form-group">
    {!! Form::label('seo_url', 'Seo Url:') !!}
    <p>{{ $blog->seo_url }}</p>
</div>

