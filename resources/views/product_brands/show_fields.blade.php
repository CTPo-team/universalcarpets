<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $productBrand->title }}</p>
</div>

@if(count($productBrand->product) > 0)
    <div class="form-group">
        {!! Form::label('product', 'Product:') !!}
        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @foreach($productBrand->product as $data)
                        <a href="{!! route('products.show', [$data->id]) !!}"><li class="list-group-item">{{$data->title}}</li></a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productBrand->created_at->format("d/m/Y h:i:s") }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productBrand->updated_at->format("d/m/Y h:i:s") }}</p>
</div>