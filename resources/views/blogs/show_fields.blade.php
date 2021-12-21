<!-- Blog Category Id Field -->
<div class="form-group">
    {!! Form::label('blog_category_id', 'Blog Category:') !!}
    <p>{{ $blog->blogCategory->title ?? "" }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $blog->title }}</p>
</div>

<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Banner Image:') !!}
    <div class="gallery gallery-md">
        <div class="gallery-item" data-image="{{asset('img/blog/'.$blog->path_image)}}" data-title="Image 1" href="{{asset('img/blog/'.$blog->path_image)}}" title="Image 1" style="background-image: url({{asset('img/blog/'.$blog->path_image)}});"></div>
    </div>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <p>{!! $blog->desc !!}</p>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Description:') !!}
    <p>{!! $blog->short_desc !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $blog->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</p>
</div>
