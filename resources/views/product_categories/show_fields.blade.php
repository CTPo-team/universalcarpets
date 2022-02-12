<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $productCategory->title }}</p>
</div>

<div class="form-group">
    {!! Form::label('isSubcategory', 'Is Subcategory:') !!}
    <p>{!! isset($productCategory->parent->title) ? "<div class='badge badge-success'>Yes</div>" : "<div class='badge badge-danger'>No</div>"!!}</p>
</div>

<div class="form-group">
    {!! Form::label('isSubcategory', 'Category:') !!}
    <p>{!! isset($productCategory->parent->title) ? $productCategory->parent->title : ""!!}</p>
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

@if(count($productCategory->subCategory)>0)
    <div class="form-group">
        {!! Form::label('subCategory', 'Sub Category:') !!}
        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @foreach($productCategory->subCategory as $data)
                    <a href="{!! route('productCategories.show', [$data->id]) !!}"><li class="list-group-item">{{$data->title}}</li></a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

@if(count($productCategory->product) > 0)
    <div class="form-group">
        {!! Form::label('product', 'Product:') !!}
        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @foreach($productCategory->product as $data)
                        <a href="{!! route('products.show', [$data->id]) !!}"><li class="list-group-item">{{$data->title}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif