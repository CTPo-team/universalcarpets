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
        <div class="gallery-item" data-image="{{$blog->path_image}}" data-title="Image 1" href="{{$blog->path_image}}" title="Image 1" style="background-image: url({{$blog->path_image}});"></div>
    </div>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $blog->desc !!}
            </p>
        </div>
    </div>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $blog->short_desc !!}
            </p>
        </div>
    </div>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $blog->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $blog->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $blog->updated_at->format("d/m/Y h:i:s") }}</p>
</div>