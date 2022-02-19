<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'disabled' => 'disabled']) !!}
</div>

@if($aboutUsPage->id == 1 || $aboutUsPage->id == 2)
<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote', 'required' => 'required']) !!}
</div>
@endif

<!-- Short Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_desc', 'Short Description:') !!}
    {!! Form::textarea('short_desc', null, ['class' => 'form-control summernote-simple']) !!}
</div>

@if($aboutUsPage->id == 3)
    @if(isset($aboutUsPage))
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('path_image', 'Current Image:') !!}
            <div class="gallery gallery-md">
                @foreach ($aboutUsPage->aboutUsGallery as $key => $img)
                    <div class="gallery-item" data-image="{{asset('img/about/'.$img->path_image)}}" data-title="Image {{$key}}" href="{{asset('img/about/'.$img->path_image)}}" title="Image {{$key}}" style="background-image: url({{asset('img/about/'.$img->path_image)}});"></div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        @if(isset($aboutUsPage))
            {!! Form::label('path_image', 'Replace Image:') !!}
        @else
            {!! Form::label('path_image', 'Image:') !!}
        @endif
        <p>
            <small>Max Size: 2MB | Max File: 10 | Recommended: Less than 500KB & Resolution 1024 × 576 px</small>
        </p>
        <input id="path_image" type="file" class="form-control fileinput-image-multiple"  name="path_image[]" data-preview-file-type="text" required multiple>
    </div>
@endif

@if($aboutUsPage->id == 1)
<!-- Our Strategy Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('our_strategy_desc', 'Our Strategy Description:') !!}
    {!! Form::textarea('our_strategy_desc', null, ['class' => 'form-control summernote', 'required' => 'required']) !!}
</div>
@endif

@include('layouts.seo')

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aboutUsPages.index') }}" class="btn btn-light">Cancel</a>
</div>
