@extends('frontend.app')

@section('content')
<style>
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        border-left: none;
        border-right: none;
        border-top: none;
        border-bottom: 2px solid black;
    }

</style>
<div class="row" style="margin-top:-72px;margin-left:0px;margin-right:0px;height:680px;background: 
                                linear-gradient(to bottom,  rgb(66 61 64 / 30%) 60%, white 95%),
                                url({{asset('images/banneraboutus.png')}}); background-position:center;">
    <div class="col-12" style="">
        <div class="carousel-caption text-left">
            <div class="row pt-5">
                <div class="col-md-8">
                    <p class="fontbantitle"
                        style="font-family: 'Playfair Display', serif;font-size: 129px;line-height:1;font-weight:bold;letter-spacing:10px;">
                        ABOUT US</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
            <li class="nav-item col-4 text-center">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true" style="color:black !important">OUR STORY</a>
            </li>
            <li class="nav-item col-4 text-center">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false" style="color:black !important">NETWORK</a>
            </li>
            <li class="nav-item col-4 text-center">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false" style="color:black !important">TECHNOLOGIES</a>
            </li>
        </ul>
    </div>
    </div>

    <div class="tab-content" id="myTabContent">
        <!-- OUR STORY CONTENT -->
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row" style="margin-left:-15px;margin-right:-15px;">
              <div class="col-12" style="margin-top:90px">
                <img class="img-fluid" src="{{asset('images/aboutusimg.png')}}">
                <div class="aboutyt" style="position:absolute;right:100px;margin-top:-350px">
                <iframe width="560" height="380" src="https://www.youtube.com/embed/iw-3BeREYiI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
            <div class="container" style="margin-top:100px">
            <div class="row">
              <div class="col-md-6">
              <p>
                {!! $ourStory->desc ?? '' !!}
            </p>
              </div>
              <div class="col-md-6">
                <img class="img-fluid" src="{{asset('images/serti.png')}}">
              </div>
            </div>
     
            <h2>OUR STRATEGY</h2>
            <p>
                {!! $ourStory->our_strategy_desc ?? '' !!}
            </p>
            </div>
          
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
