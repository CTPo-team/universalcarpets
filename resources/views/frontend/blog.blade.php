@extends('frontend.app')

@section('content')
  <h1>NEW</h1>
  @if(!empty($new))
    <a href="{{ url('detail-blog/'.$new->slug) }}">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/blog/'.$new->path_image)}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$new->title}}</h5>
          <p class="card-text">{!! strlen(strip_tags($new->desc)) > 200 ? substr(strip_tags($new->desc),0,200).'...' : strip_tags($new->desc) !!}</p>
        </div>
      </div>
    </a>
  @else
    <h1>No Data</h1>
  @endif

  <h1>Most Viewed</h1>
  @if(!empty($mostViewed))
    @foreach($mostViewed as $key => $data)
      <a href="{{ url('detail-blog/'.$data->slug) }}">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('img/blog/'.$data->path_image)}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$data->title}}</h5>
            <p class="card-text">{!! strlen(strip_tags($data->desc)) > 200 ? substr(strip_tags($data->desc),0,200).'...' : strip_tags($data->desc) !!}</p>
          </div>
        </div>
      </a>
    @endforeach
  @else
    <h1>No Data</h1>
  @endif

  <h1>Older Articles</h1>

@endsection   

