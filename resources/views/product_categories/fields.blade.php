<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 c">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control summernote-simple']) !!}
</div>

<!-- Sub Category Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('sub_category', 'Sub Category:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sub_category', 0) !!}
        {!! Form::checkbox('sub_category', '1', null) !!}
    </label>
</div> -->

@include('layouts.seo')
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productCategories.index') }}" class="btn btn-light">Cancel</a>
</div>
