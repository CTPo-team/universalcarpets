<!-- Path Image Field -->
<div class="form-group">
    {!! Form::label('path_image', 'Path Image:') !!}
    <p><img src="{{asset('img/banner/'.$bannerHomepage->path_image)}}" style="max-width:400px"></p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $bannerHomepage->title }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <p>{!! $bannerHomepage->desc !!}</p>
</div>

<!-- Button Url Field -->
<div class="form-group">
    {!! Form::label('button_url', 'Button Url:') !!}
    <p><a href="{{ $bannerHomepage->button_url }}">{{ $bannerHomepage->button_url }}</a></p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $bannerHomepage->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</p>
</div>

