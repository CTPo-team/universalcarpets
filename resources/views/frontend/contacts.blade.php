@extends('frontend.app')

@section('content')
  <h1>OUR OFFICE</h1>
  @foreach($contacts as $key => $data)
    <div class="row">
      <div class="col-12">
        <h3>{{$data->title ?? ''}}</h3>
      </div>
      <div class="col-12">
        {!!$data->desc ?? ''!!}
      </div>
    </div>
  @endforeach

  <hr>
  <h1>MAP</h1>
  @foreach($contacts as $key => $data)
    <div class="row">
      <div class="col-12">
        {!!$data->embed_maps_link ?? ''!!}
      </div>
      <div class="col-12">
        <h3>{{$data->title ?? ''}}</h3>
      </div>
    </div>
  @endforeach

@endsection   

