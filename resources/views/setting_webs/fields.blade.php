<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email1', 'Email1:') !!}
    {!! Form::email('email1', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email2', 'Email2:') !!}
    {!! Form::email('email2', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Contact Us Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_contact_us', 'Email Contact Us:') !!}
    <small>For receive email from contact us</small>
    {!! Form::email('email_contact_us', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Youtube Field -->
<div class="form-group col-sm-6">
    {!! Form::label('youtube', 'Youtube:') !!}
    {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
</div>

<!-- Path Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('path_image', 'Image TUV:') !!}
    <p>
        <small>Max Size: 2MB | Max File: 1 | Recommended: Less than 500KB & Resolution 844 × 389 px</small>
    </p>
    <input id="single_image_upload" type="file" class="form-control"  name="single_image_upload" data-preview-file-type="text">
    <input type="hidden" name="path_image" id="path_image">
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('settingWebs.index') }}" class="btn btn-light">Cancel</a>
</div>

@section('scriptsfileinput')
    <script>
        setSingleFile("#single_image_upload","#path_image", <?php echo json_encode(isset($settingWeb->path_image) ? $settingWeb->path_image : []); ?>)
    </script>
@endsection