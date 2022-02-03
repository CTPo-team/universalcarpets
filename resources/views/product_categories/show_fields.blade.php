<!-- Product Category Id Field -->
<div class="form-group">
    {!! Form::label('product_category_id', 'Product Category Id:') !!}
    <p>{{ $productCategory->product_category_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $productCategory->title }}</p>
</div>

<!-- Desc Field -->
<div class="form-group">
    {!! Form::label('desc', 'Description:') !!}
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                {!! $productCategory->desc !!}
            </p>
        </div>
    </div>
</div>

<!-- Sub Category Field -->
<div class="form-group">
    {!! Form::label('sub_category', 'Sub Category:') !!}
    <p>{{ $productCategory->sub_category }}</p>
</div>