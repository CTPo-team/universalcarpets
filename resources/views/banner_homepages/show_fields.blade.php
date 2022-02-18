<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Path Image:') !!}
    <div class="gallery gallery-md">
        <div class="gallery-item" data-image="{{asset('img/banner/'.$bannerHomepage->path_image)}}" data-title="Image 1" href="{{asset('img/banner/'.$bannerHomepage->path_image)}}" title="Image 1" style="background-image: url({{asset('img/banner/'.$bannerHomepage->path_image)}});"></div>
    </div>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $bannerHomepage->title }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $bannerHomepage->desc !!}
            </p>
        </div>
    </div>
</div>

<!-- Button Url Field -->
<div class="form-group">
    {!! Form::label('button_url', 'Button Url:') !!}
    <p><a href="{{ $bannerHomepage->button_url }}">{{ $bannerHomepage->button_url }}</a></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $bannerHomepage->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $bannerHomepage->updated_at->format("d/m/Y h:i:s") }}</p>
</div>