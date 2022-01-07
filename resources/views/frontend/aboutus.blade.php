@extends('frontend.app')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">OUR STORY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">NETWORK</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">TECHNOLOGIES</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
    <!-- OUR STORY CONTENT -->
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <h1>OUR STORY</h1>
    <p>
        {!! $ourStory->desc ?? '' !!}
    </p>
    <h2>OUR STRATEGY</h2>
    <p>
        {!! $ourStory->our_strategy_desc ?? '' !!}
    </p>
  </div>

  <!-- NETWORK CONTENT -->
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <h1>NETWORK</h1>
    <p>
        {!! $network->desc ?? '' !!}
    </p>
  </div>

  <!-- TECHNOLOGIES -->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <h1>TECHNOLOGIES</h1>
    <p>
        {!! $technologies->short_desc ?? '' !!}
    </p>
    <h2>GALLERY</h2>
    @foreach($technologies->aboutUsGallery as $gallery)
        <div class="col-6">
            <img src="{{asset('img/about/'.$gallery->path_image)}}" alt="" style="max-width: 200px;">
        </div>
    @endforeach
  </div>
</div>
@endsection