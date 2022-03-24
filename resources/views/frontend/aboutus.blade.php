@extends('frontend.app')

@section('content')
<div class="row" id="banner" style="margin-top:-72px;margin-left:0px;margin-right:0px;background: 
                                linear-gradient(to bottom,  rgb(66 61 64 / 30%) 60%, #F5F5F5 95%),
                                url({{asset('images/banneraboutus.png')}}); background-position:center;">
    <div class="col-12" style="">
        <div class="carousel-caption text-left">
            <div class="row pt-5">
                <div class="col-md-8">
                    <p class="fontbantitle"
                        style="font-family: 'Playfair Display', serif;font-size: 6vw;line-height:1;font-weight:bold;letter-spacing:10px;">
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
                <a class="nav-link tababout-mob active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">OUR STORY</a>
            </li>
            <li class="nav-item col-4 text-center">
                <a class="nav-link tababout-mob" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">NETWORK</a>
            </li>
            <li class="nav-item col-4 text-center">
                <a class="nav-link tababout-mob" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">TECHNOLOGIES</a>
            </li>
        </ul>
    </div>
</div>

<div class="tab-content" id="myTabContent">
    <!-- OUR STORY CONTENT -->
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="row d-none d-sm-block" style="margin-left:-15px;margin-right:-15px;">
            <div class="col-12" style="margin-top:90px">
                <img class="img-fluid" src="{{asset('images/aboutusimg.png')}}">
                <div class="aboutyt" style="position:absolute;right:100px;margin-top:-350px">
                    <iframe width="560" class="vaboutus" height="380" src="https://www.youtube.com/embed/NTSHN1BGd5c"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
            </div>
        </div>
        <div class="row d-block d-sm-none" style="background:black">
            <div class="col-12 text-center pt-4 pl-4 pr-4" style="margin-top:25px">
            <p style="font-family: 'Playfair Display', serif;line-height:1;font-weight:bold;color:#D5AD6A;font-size:9vw">Universal Carpet & Rugs Presents</p>
            </div>
            <div class="col-12">
                <div>
                    <iframe width="100%" height="340" src="https://www.youtube.com/embed/NTSHN1BGd5c"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6 d-none d-sm-block"  style="padding-right:0px">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col"  style="padding-left:7vw">
                            {!! $ourStory->desc ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-block d-sm-none pl-5 pr-5"  style="padding-right:0px">
                {!! $ourStory->desc ?? '' !!}
            </div>
            <div class="col-md-6"  style="padding-left:0px;padding-right:0px">
                <img class="img-fluid" src="{{asset('images/serti.png')}}">
            </div>
        </div>

        <div class="container d-block d-sm-none">
            <div class="row pt-5">
                <div class="col-12 text-center pb-3">
                    <p style="font-family: 'Playfair Display', serif;line-height:1;font-weight:bold;color:#D5AD6A;font-size:9vw">Our Strategy</p>
                </div>
            </div>
        </div>

        <div class="row mb-5 d-none d-sm-block mt-5"
            style="background:url({{asset('images/ourstrategy.png')}});background-size: cover;background-position:right;background-size: 95%;background-repeat:no-repeat;height:78vh;">
            <div class="row pb-4">
                <div class="col-12 text-center pb-3">
                    <p style="font-family: 'Playfair Display', serif;line-height:1;font-weight:bold;color:#D5AD6A;font-size:3vw">Our Strategy</p>
                </div>
            </div>   
            <div class="row text-white align-items-center" style="height:59vh;">
                    <div class="col-6">
                    </div>
                    <div class="col-4" style="font-size:1.23vw">
                        {!! $ourStory->our_strategy_desc ?? '' !!}
                    </div>
            </div>
        </div>
        <div class="row mb-5 d-block d-sm-none">
                    <div class="col-12 pl-5 pr-5" style="font-size:4vw">
                        {!! $ourStory->our_strategy_desc ?? '' !!}
                    </div>
        </div>
    </div>

    <!-- NETWORK CONTENT -->
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row d-none d-sm-block" style="margin-left:-15px;margin-right:-15px;">
            <div class="col-12" style="margin-top:90px">
                <img class="img-fluid" src="{{asset('images/aboutnetwork.png')}}">
            </div>
        </div>
        <div class="row d-block d-sm-none" style="background:black">
            <div class="col-12 text-center pt-4 pl-4 pr-4 pb-4" style="margin-top:25px">
            <p style="font-family: 'Playfair Display', serif;line-height:1;font-weight:bold;color:#D5AD6A;font-size:9vw">Spreads all over the world</p>
            </div>
        </div>
        <div class="container d-none d-sm-block pt-5">
            <div class="row justify-content-md-center">
                <div class="col-12" style="font-size:1.3vw">

                    {!! $network->desc ?? '' !!}
                </div>
            </div>
        </div>
        <div class="container d-block d-sm-none pt-5">
            <div class="row justify-content-md-center">
                <div class="col-12" style="font-size:4vw">

                    {!! $network->desc ?? '' !!}
                </div>
            </div>
        </div>
        <div class="row" style="margin-left:-15px;margin-right:-15px;">
            <div class="col-12">
                <img class="img-fluid" src="{{asset('images/aboutnetworkline.png')}}">
            </div>
        </div>
    </div>

    <!-- TECHNOLOGIES -->
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="d-none d-sm-block" style="background:#0e0e0e">
        <div class="container pt-5 pb-5" style="margin-top:90px">
            <div class="row text-center p-3" style="color:#D5AD6A;font-size:2.2vw">
            ❝ {!! strip_tags($technologies->short_desc) ?? '' !!} ❝
            </div>
        </div>
        </div>
        
        <div class="row d-block d-sm-none" style="background:black">
            <div class="col-12 text-center pt-4 pl-4 pr-4 pb-4" style="margin-top:25px">
            <div style="font-family: 'Playfair Display', serif;line-height:1;font-weight:bold;color:#D5AD6A;font-size:4vw">{!! $technologies->short_desc ?? '' !!}</div>
            </div>
        </div>
     

        <div class="container abouttech pt-5">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-6 mt-3" style="padding-right:0px;padding-left:0px">
                    @foreach($aboutUsGalleryEven as $gallery)
                    <div class="col-12 mt-3" style="padding-right:0px;padding-left:0px">
                        <img class="img-fluid" src="{{asset('img/about/'.$gallery->path_image)}}" style="height:310px !important">
                    </div>
                    @endforeach
                </div>
                <div class="col-12 col-md-6 mt-5" style="padding-right:0px;padding-left:0px">
                    @foreach($aboutUsGalleryOdd as $gallery)
                    <div class="col-12 mt-3" style="padding-right:0px;padding-left:0px">
                        <img class="img-fluid" src="{{asset('img/about/'.$gallery->path_image)}}" style="height:310px !important">
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>

    </div>
</div>


@endsection
