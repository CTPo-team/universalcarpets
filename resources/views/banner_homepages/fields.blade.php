

<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>
 
@if(isset($bannerHomepage))
    <!-- Path Image Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('path_image', 'Current Image:') !!}
        <div class="gallery gallery-md">
            <div class="gallery-item" data-image="{{asset('img/banner/'.$bannerHomepage->path_image)}}" data-title="Image 1" href="{{asset('img/banner/'.$bannerHomepage->path_image)}}" title="Image 1" style="background-image: url({{asset('img/banner/'.$bannerHomepage->path_image)}});"></div>
        </div>
    </div>
@endif

<!-- Path Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    @if(isset($bannerHomepage))
        {!! Form::label('path_image', 'Replace Image:') !!}
    @else
        {!! Form::label('path_image', 'Image:') !!}
    @endif
    <input id="path_image" type="file" class="form-control fileinput-image"  name="path_image" data-preview-file-type="text" {{ !isset($bannerHomepage->id) ? 'required' : ''}}>
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote-simple']) !!}
</div>

<!-- Button Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_url', 'Button URL:') !!}
    {!! Form::text('button_url', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', [1 => "Active", 0 => "Inactive"], null,['class' => 'form-control select2','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bannerHomepages.index') }}" class="btn btn-light">Cancel</a>
</div>
