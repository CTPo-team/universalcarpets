@extends('frontend.app')

@section('content')
  
  @if(isset($product->imageProduct) && count($product->imageProduct) > 0)
    <img src="{{asset('img/product/'.$product->imageProduct[0]->path_image)}}" alt="" style="max-width: 200px;">
  @endif
  <h1>{{$product->title ?? ""}}</h1>
  <p>
    {!! $product->desc !!}
  </p>
  <hr>
  <h1>Product Gallery</h1>
  <div class="row">
   @if(isset($product->imageProduct) && count($product->imageProduct) > 0)
      @foreach($product->imageProduct as $data)
        <img src="{{asset('img/product/'.$data->path_image)}}" alt="" style="max-width: 200px;">
      @endforeach
    @endif
  </div>
  <h1>Related Product</h1>
  <div class="row">
    @foreach($relatedProduct as $key => $data)
      <a href="{{ url('detail-product/'.$data->slug) }}">
        <div class="card" style="width: 18rem;">
        @if(isset($data->imageProduct) && count($data->imageProduct) > 0)
          <img class="card-img-top" src="{{asset('img/product/'.$data->imageProduct[0]->path_image)}}" alt="Card image cap">
        @endif
          <div class="card-body">
            <h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text">{!! strlen(strip_tags($data->desc)) > 200 ? substr(strip_tags($data->desc),0,200).'...' : strip_tags($data->desc) !!}</p>
          </div>
        </div>
      </a>
    @endforeach
  </div>
@endsection   

