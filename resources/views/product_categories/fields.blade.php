
<!-- Product Category Id Field -->
<div class="form-group col-sm-12 subcategory">
    {!! Form::label('product_category_id', 'Main Category:') !!}
    {!! Form::select('product_category_id', $subCategory, null,['class' => 'form-control select2','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255, 'required' => 'required']) !!}
</div>

@if(!isset($productCategory->id) || ((isset($productCategory->subCategory) && count($productCategory->subCategory) == 0) && (isset($productCategory->product) && count($productCategory->product) == 0)))
    <div class="form-group col-sm-12">
        <label class="custom-switch">
            <input type="checkbox" name="subcategory" value="1" class="custom-switch-input option-subcategory" onchange="checkSub()" {{empty($productCategory->product_category_id) ? "" : "checked"}}>
            <span class="custom-switch-indicator"></span>
            <span class="custom-switch-description">Is Subcategory</span>
        </label>
    </div>
@endif

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


@section('scripts')
    @if(!isset($productCategory->id) || (isset($productCategory->id) && empty($productCategory->product_category_id)))
        <script>
            $(document).ready(function(){
                $(".subcategory").hide();
            });
        </script>
    @endif

    <script>
        var statusSub = $('.option-subcategory').is(":checked");
        function checkSub(){
            if(!statusSub){
                $(".subcategory").show(700);
                statusSub = true;
            }else{
                $(".subcategory").hide(700);
                statusSub = false;
            }
        }
    </script>
@endsection