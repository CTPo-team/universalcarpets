@extends('frontend.app')

@section('content')
  <h1>{{$blog->blogCategory->title ?? ""}}</h1>
  <h2>{{$blog->title}}</h2>
  <h4>{{$blog->updated_at->format('d F Y')}}</h4>
  <img src="{{asset('img/blog/'.$blog->path_image)}}" alt="" style="max-width: 200px;">
  <p>
    {!! $blog->desc !!}
  </p>
  <hr>
  <h1>Related Articles</h1>
  <div class="row">
    @foreach($relatedBlog as $key => $data)
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
  </div>

@endsection   

